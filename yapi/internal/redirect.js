const fs = require('fs')
const { exec } = require('child_process')

const { validationResult } = require('express-validator');
const superagent = require('superagent');
const { info } = require('console');



exports.getRedirect = (req, res) => {
    let redirectUrl

    let userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))
    const srcKey = userFileObj.SRC_KEY


    const sslFileObj = JSON.parse(fs.readFileSync('./atx/config/ssl.json'))
    sslFileObj.forEach(sslInfo =>  {
        const formattedLink = `https://${sslInfo.domain}/?${srcKey}`
        if (sslInfo.isRedirect) {
            redirectUrl = formattedLink
        }
        
    })
    let cloudflare_gen_link = userFileObj.CF_WORKER_URL || ''


    const redirectObj = {
        redirect: redirectUrl,
        cloudflare_url: cloudflare_gen_link
    }

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully fetched redirect`,
        info: redirectObj,
    })

}

exports.setRedirect = (req, res) => {
    const vResult = validationResult(req);
    const hasErrors = !vResult.isEmpty();
    if (hasErrors) {
            return res.status(402).json(vResult.errors);
    }
    
    let domainName = req.body.domain
    domainName = domainName.toLowerCase();


    const sslFileObj = JSON.parse(fs.readFileSync('./atx/config/ssl.json'))

    if (sslFileObj.length < 2) {
        return res.json({
            status: "Error",
            error: 'Low Domain count',
            code: 1,
            message: "To use redirect you need to have atleast 2 domains added...",
        })
    }

    const domainValueList = sslFileObj.map(obj => obj.domain);
    console.log(domainValueList, domainName)
    if (domainValueList.indexOf(domainName) === -1) {
        console.error('Domain does not exists')
        return res.json({
            status: "Error",
            error: 'Invalid Domain',
            code: 1,
            message: "Domain Does not exist, please check domain name...",
        })
    } else {
        console.log(JSON.stringify(sslFileObj))

        sslFileObj.forEach(sslInfo =>  {
            if (sslInfo.domain === domainName) {
                sslInfo.isRedirect = true;
            } else {
                sslInfo.isRedirect = false;
            }
        })

        console.log(JSON.stringify(sslFileObj))
        fs.writeFileSync('./atx/config/ssl.json', JSON.stringify(sslFileObj, '', 4))
        return res.json({
            status: "Success",
            error: null,
            code: 0,
            message: `Successfully set Redirect to  ${domainName}, Please Restart atx to effect changes`,
            info: domainName,
        })
    }
}
