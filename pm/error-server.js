const http = require('http');
const https = require('https');
const tls = require('tls')
const fs = require('fs');

const FIFO_BAG = []
const FIFO_BAG_SIZE = 2

const sslFile = require('../atx/config/ssl.json');


exports.addMessage = (message) => {

  if (FIFO_BAG.length === FIFO_BAG_SIZE) {
    FIFO_BAG.shift();
  }
  FIFO_BAG.push(message);
}

exports.startErrorServer = () => {
  const SSLCerts = {}

  sslFile.forEach((sslObj) => {
    const domainName = sslObj.domain
  
    SSLCerts[domainName] = {
        cert: fs.readFileSync(sslObj.cert),
        key: fs.readFileSync(sslObj.key),
    }
  })
  
  
  const sslOptions = {
    SNICallback(hostname, cb) {
        const ctx = tls.createSecureContext(SSLCerts[hostname])
        cb(null, ctx)
    },
  }

  // create HTTPS server
  const httpsServer = https.createServer(sslOptions, (req, res) => {
    res.writeHead(500);
    const byeData = 'If you see this message, it means your application is not running\n'
      + 'If you are a developer, who  is developing, please check the full logs and fix the application\n'
      + 'IF NOT Please Contact Techincal Support to fix it.\n\n'
      + 'Below are Few lines of Error help you understand?\n\n\n';
    res.write(byeData);
    const errorLogs = [...FIFO_BAG]

    res.write(errorLogs.join('\n'));
    
    res.end();
  });

  httpsServer.listen(443, () => {
    console.log('HTTPS ERROR Server Has Started....... ');
  });
}
