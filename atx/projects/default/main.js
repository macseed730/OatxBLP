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

        this.res.writeHead(200)
        this.res.end('It works!, Now change project and open again')
        this.res.end()

    }
}




const configExport = {
    SCHEME: 'default',

    CURRENT_DOMAIN: 'www.default.com',

    START_PATH: '/',
    
    DEFAULT_PRE_HANDLER: DefaultPreHandler,


    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport

