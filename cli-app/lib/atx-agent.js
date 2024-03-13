const fs = require('fs')
const path = require('path')
const superagent = require('superagent')

const APP_URL = `http://127.0.0.1:${process.env.HOST_PORT}${process.env.SITE_AUTH}`

const tokenStr = "fs.readFileSync(path.join(__dirname, '../../.auth'))"


const doRestartAfterChange = () => {
    superagent.post(`${APP_URL}/handler/instance/state`)
    .set('naked', tokenStr)
    .send({ state: 'RESTART' })
    .end((err, resp) => {
        if (err) {
            console.error(err)
        }
    })
}

exports.getProjects = (cBack) => {
    superagent.get(`${APP_URL}/handler/projects`)
        .set('naked', tokenStr)
        .end((err, resp) => {
            if (err) {
                return cBack(false, `Failed to execute command, error: ${err}`)
            }

            if (resp.body.code === 0) {
                return cBack(true,  resp.body.info)
            } else {
                return cBack(false, resp.body.message)
            }
                    
        })
}

exports.getInformation = (cBack) => {
    superagent.get(`${APP_URL}/handler/information`)
        .set('naked', tokenStr)
        .end((err, resp) => {
            if (err) {
                return cBack(false, `Failed to execute command, error: ${err}`)
            }

            if (resp.body.code === 0) {
                return cBack(true,  resp.body.info)
            } else {
                return cBack(false, resp.body.message)
            }
                    
        })
}

exports.getTraffic = (cBack) => {
    superagent.get(`${APP_URL}/handler/traffic`)
    .set('naked', tokenStr)
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}


exports.getDomains = (cBack) => {
    superagent.get(`${APP_URL}/handler/domains`)
    .set('naked', tokenStr)
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }
        if (resp.body.code === 0) {
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}

exports.getLinks = (cBack) => {
    superagent.get(`${APP_URL}/handler/links`)
    .set('naked', tokenStr)
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}


exports.addDomain = (domainName, cBack) => {
    superagent.post(`${APP_URL}/handler/domains/add`)
    .set('naked', tokenStr)
    .send({ domain: domainName })
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            doRestartAfterChange()
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })

}

exports.deleteDomain = (domainName, cBack) => {
    superagent.post(`${APP_URL}/handler/domains/delete`)
    .set('naked', tokenStr)
    .send({ domain: domainName })
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            doRestartAfterChange()
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}

exports.switchAntibot = (antibotSwitch, antibotInfo, cBack) => {
    superagent.post(`${APP_URL}/handler/antibot/switch`)
    .set('naked', tokenStr)
    .send({ antibot: antibotSwitch, antibotInfo: antibotInfo })
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            doRestartAfterChange()
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}

exports.setTelegramID = (telegramInfo, cBack) => {
    superagent.post(`${APP_URL}/handler/telegram`)
    .set('naked', tokenStr)
    .send({ telegramID:telegramInfo })
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            doRestartAfterChange()
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}

exports.setExitLink = (exitLink, cBack) => {
    superagent.post(`${APP_URL}/handler/exitlink`)
    .set('naked', tokenStr)
    .send({ exitLink:exitLink })
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            doRestartAfterChange()
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}



exports.changeProject = (projectName, cBack) => {
    superagent.post(`${APP_URL}/handler/projects/change`)
    .set('naked', tokenStr)
    .send({ project: projectName })
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            doRestartAfterChange()
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}

exports.changeState = (newState, cBack) => {
    superagent.post(`${APP_URL}/handler/instance/state`)
    .set('naked', tokenStr)
    .send({ state: newState })
    .end((err, resp) => {
        if (err) {
            return cBack(false, `Failed to execute command, error: ${err}`)
        }

        if (resp.body.code === 0) {
            return cBack(true, resp.body.info)
        } else {
            return cBack(false, resp.body.message)
        }
                
    })
}


