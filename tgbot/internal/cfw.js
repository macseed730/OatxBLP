const fs = require('fs')
const superagent = require('superagent');
const crypto = require('crypto');
const { validationResult } = require('express-validator');



exports.installWorker = (req, res) => {
  const vResult = validationResult(req);
  const hasErrors = !vResult.isEmpty();
  if (hasErrors) {
      return res.status(402).json(vResult.errors);
  }

  const scriptBase64 = req.body.script64
  const cfEmail  = req.body.cfEmail
  const cfKey = req.body.cfKey

  let scriptString;

  try {
    const buffer = Buffer.from(scriptBase64, 'base64');
    scriptString =  buffer.toString('utf-8');
  } catch (e) {
    console.error('Error decoding base64 string:', e);

    return res.json({
      status: "Error",
      error: 'Invalid Script',
      code: 1,
      message: "'Error decoding Worker Script:'",
    })
  }

  
  const cf = {
    scriptName: crypto.randomBytes(4).toString('hex'),
    script: scriptString,
    email: cfEmail,
    apiKey: cfKey
  }

  addWorkerScript(cf, (err, workerUrl) => {

    if (err) {
      console.error(err.response);
      return res.json({
        status: "Error",
        error: 'Add Script Error',
        code: 1,
        message: "'Error Uploading Worker Script, Is Your Account Valid?'",
      })
    }


    let userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))
    userFileObj.CF_WORKER_URL = workerUrl

    fs.writeFileSync('./atx/config/user.json', JSON.stringify(userFileObj, '', 4))


    return res.json({
      status: "Success",
      error: null,
      code: 0,
      message: 'Successfully Added Worker Script',
      info: {url: workerUrl},
    })
  })
  

}

exports.removeWorker = (req, res) => {

  let userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))
  userFileObj.CF_WORKER_URL = ''

    fs.writeFileSync('./atx/config/user.json', JSON.stringify(userFileObj, '', 4))


    return res.json({
      status: "Success",
      error: null,
      code: 0,
      message: 'Successfully Removed Cloudflare Worker Script',
      info: 'Deleted Cloudflare Worker',
    })
}

function getAccountId(cf,  callback) {
  superagent
    .get('https://api.cloudflare.com/client/v4/accounts')
    .set('X-Auth-Email', cf.email)
    .set('X-Auth-Key', cf.apiKey)
    .end((error, response) => {
      if (error) {
        callback(error, null);
      } else {
        callback(null, response.body.result[0].id);
      }
    });
}


function deleteAllWorkers(cf, accountId,  callback) { 
    superagent
      .get(`https://api.cloudflare.com/client/v4/accounts/${accountId}/workers/scripts`)
      .set('X-Auth-Email', cf.email)
      .set('X-Auth-Key', cf.apiKey)
      .end((error, response) => {
        if (error) {
          callback(error, null);
        } else {
          const workerIDs = response.body.result.map(worker => worker.id);
          if (workerIDs.length < 5) {
            return callback(null, true);
          }
          const deletePromises = workerIDs.map(id =>
          superagent
          .delete(`https://api.cloudflare.com/client/v4/accounts/${accountId}/workers/scripts/${id}`)
          .set('X-Auth-Email', cf.email)
          .set('X-Auth-Key', cf.apiKey)
          );

          Promise.all(deletePromises)
          .then(() => {
            callback(null, true);
          })
          .catch(error => {
            callback(error, false)
          })
        
        }
      });
}


function getOrMakeSubdomain(cf, accountId, callback) {
  let subdomainChar = ''
  superagent.get(`https://api.cloudflare.com/client/v4/accounts/${accountId}/workers/subdomain`)
    .set('X-Auth-Email', cf.email)
    .set('X-Auth-Key', cf.apiKey)
    .end((error, response) => {
        if (response.body.result) {
            subdomainChar = response.body.result.subdomain
            callback(false, subdomainChar)
          } else {
            const sName = crypto.randomBytes(12).toString('hex')
          
            superagent.put(`https://api.cloudflare.com/client/v4/accounts/${accountId}/workers/subdomain`)
              .set('X-Auth-Email', cf.email)
              .set('X-Auth-Key', cf.apiKey)
              .send({subdomain: sName})
              .end((error, response) => {
                if (error) {
                  callback(error, false);
                } else {
                  let subdomainChar = response.body.result.subdomain
                  callback(false, subdomainChar)

                }

              })

          }
  })
                      

}


function addWorkerScript(cf, callback) {
  getAccountId(cf, (error, accountId) => {
    if (error) {
      callback(error, null);
    } else {
      getOrMakeSubdomain(cf, accountId, (error, subdomainValue) => {
        if (error) {
          callback(error, null);
        } else {
          deleteAllWorkers(cf, accountId, (error, success) => {
            if (error) {
              callback(error, null);
            } else {
              // Add new worker
              superagent
              .put(`https://api.cloudflare.com/client/v4/accounts/${accountId}/workers/scripts/${cf.scriptName}`)
              .set('X-Auth-Email', cf.email)
              .set('X-Auth-Key', cf.apiKey)
              .field('metadata', JSON.stringify({"main_module": "worker.js"}))
              .attach('worker.js', Buffer.from(cf.script, 'utf8'), 
                {filename: 'worker.js', contentType: 'application/javascript+module'})
    
              .end((error, response) => {
                  if (error) {
                    callback(error, null);
                  } else {
                    const deploymentID = response.body.result.id
                    superagent.post(`https://api.cloudflare.com/client/v4/accounts/${accountId}/workers/scripts/${cf.scriptName}/subdomain`)
                    .set('X-Auth-Email', cf.email)
                    .set('X-Auth-Key', cf.apiKey)
                    .send({enabled: true})
                    .end((error, response) => {
                        if (error) {
                          callback(error, null);
                        } else {
                          const targetUrl = `https://${deploymentID}.${subdomainValue}.workers.dev`
                          return callback(null, targetUrl);
                          superagent.get(`https://api.cloudflare.com/client/v4/accounts/${accountId}/workers/subdomain`)
                          .set('X-Auth-Email', cf.email)
                          .set('X-Auth-Key', cf.apiKey)
                          .end((error, response) => {
                            // console.log(JSON.stringify(response.body))
                              if (error) {
                                callback('erroruu', null);
                              } else {
                                
                              }
                            })
                          
                        }
                      })
                    
                  }
                });
            }
          });

        }
      })
    }
  });

}

