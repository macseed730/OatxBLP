# Welcome to NakedPages!

****Disclaimer**: Nakedpages and all its projects was created for research purpose only. By using nakedpages you agree that you take full responsibility for whatever use case,The developer(s) of @nakedpages has ZERO responsibility for any action/results from using nakedpages.**


## This is a developer guide on extending **nakedpages**.

Throughout this documentation **nakedpages** will be referred to as **atx**
(Which is the binary the projects run on)



# Extending atx

**atx** binary is a phishing app, it does both reverse proxy and PHP rendering at the same time, on its own it can do no such work, it requires configuration files called projects to perform well.


For Developers familiar with Evilginx2/Modlishka etc... migrating to atx will be fairly easy, only key difference is atx configurations are in JSON, and can be further extended with JavaScript


## Features of atx

 1. Support Reverse Proxy
 2. Support PHP Rendering
 3. Project files are in JSON
 4. Project files can also be extended with JavaScript for wider application
 5. Support importing other projects code 
 6. Support switching projects at runtime and switching back based on url patterns
 7. Captures inputs based on domains and PHP files
 8. Captures cookie automatically
 9. Support EXIT Triggers

All The Features can be easily accessed with our json configuration schema


## JSON CONFIG SCHEMA

> NOTE: Each KEY will be fully explained in the next section.
> Table Consist of Name/Description

| KEY| BREIF DESCRIPTION OF KEY|
|--|--|
| SCHEME | **{REQUIRED}** Name of the project, (should be directory name also)|
| CURRENT_DOMAIN| **{REQUIRED}** Domain name that the project executes on|
| START_PATH| **{REQUIRED}** First path the user is redirected to upto entering the link|
| PATTERNS| **{DEFAULT: []}** List of patterns to be used to replace in the giving html|
| FORCE_PROXY| **{DEFALT: []}** Url paths to force proxy on, and not PHP|
| PHP_PROCESSOR| **{DEFAULT: {}}** Dictionary of paths and objects to control php flow|
| COOKIE_PATH| **{DEFAULT: []}** Paths that trigger Send Cookies|
| EXIT_TRIGGER_PATH| **{DEFAULT: {}}** Paths that trigger redirect to exit links|
| EXIT_URL| **{DEFAULT: ""}** Link to redirect to exit link|
| EXTRA_COMMANDS| **{DEFAULT: []}** List of commands to execture|
| CAPTURES| **{DEFAULT: {}}** Dictionary of objects to capture from form inputs|
| IMPORTED_MODULES| **{DEFAULT: {}}** Imported modules would be loaded here|
| PRE_HANDLERS| **{DEFAULT: {}}** Extra classes to load based on trigger path|
| EXTERNAL_FILTERS| **{DEFAULT: {}}** Extra Domains to filter not related to main domain|
| PROXY_REQUEST| **{DEFAULT: "DEFAULT"}** **IGNORE SEE BELOW** |
| PROXY_RESPONSE| **{DEFAULT: "DEFAULT"}** **IGNORE SEE BELOW** |
| DEFAULT_PRE_HANDLER| **{DEFAULT: "DEFAULT"}** **IGNORE SEE BELOW** |

> Unless you plan to either write JS code to intercept request, response, handler class the following commands are not necessary: 
PROXY_REQUEST: request
PROXY_RESPONSE: response
DEFAULT_PRE_HANDLERL: handler


All projects should be named main.js under 
atx/projects/SCHEME/main.js
where scheme is the project scheme in main.js config file

## TYPICAL main.js File

    const configExport = {
    SCHEME: 'test',
    CURRENT_DOMAIN: 'test.com',
    START_PATH: '/login',
    PATTERNS: [],
    FORCE_PROXY: [],
    //MAY SKIP
    PHP_PROCESSOR: {
        '/application/php/render/': {
            GET: {
                script: 'index.php',
            },
            POST: {
                script: null,   
                redirectTo: null,
            },
        },
    },
    COOKIE_PATH: ['/proxy/cookie],
    EXIT_TRIGGER_PATH: ['/proxy/exit'],
    EXIT_URL: 'https://test.com',

    EXTRA_COMMANDS: [],
    CAPTURES: {},
    IMPORTED_MODULES: [],
    PRE_HANDLERS: [],
    EXTERNAL_FILTERS: [],
    }
    module.exports = configExport


KEYS description below
## SCHEME
Set the project name, we also recommend it should be the name of the directory where the main.js is stored.

## CURRENT_DOMAIN
The **Starting Domain** for executing the proxy, i used the word **Starting Domain** because domains can change with commands like CHANGE_DOMAIN
This is the proxy target domain for reverse proxy.

## START_PATH
The first path to execute when the user enters the page.
If this path is in PHP_PROCESSOR: then PHP script is executed.
or else the path is rendered by the reverse proxy against the current domain.

## PATTERN

    note: the CURRENT_DOMAIN is always replaced automatically by the script
    No need to use pattersn for CURRENT_DOMAIN
    it also replaces all subdomains under the current domain for it automaitclaly

A List of objects to make regex replacements for the script the object consist of

    {
    match: string/regex
    replace: string/regex
    domain: string
    }
**match**: the string or regular extension to match, support both normal string and regular expressions.
Example: For matching Hello World

> match: "Hello World", //string
> match: "H.*d", //regex

**replace**:  replacement for the match uses both string and regex
Example: For Replacing World in Hello World with Earth

    {
    match: "World",
    repace: "Earth"
    }
    // you can also use regex
    {
    match: "Hello (.*)"
    replace: "Hello $1"
    }
    //$1 here replaces with the first capture group
    // this is for those familiar with regex in JS
    '
**domain**:  it's not required to use, except you want your pattern to execute only on a specific domain.
Example: to execute patten only for app.test.com

    {
    match: "Hello World",
    replace: "Hello Earth",
    domain: "app.test.com"
    }
**CONSTANTS TO USE: **
We have some constants to use to make working with patterns easier. 
It works for both match and replace.

|NAME| DESCRIPTON |
|--|--|
| {HOSTNAME} | Replaces/Matches the hostname of the website, the phishing domain |
| {DOMAIN} | Replaces/Matches the current domain name of target for reverse proxy |

## FORCE_PROXY
A List of URL paths to force proxy on, if you wish to migrate the link from PHP to proxy during session.

## PHP_PROCESSOR
An Object with URL path as keys to an object as value

    path: {
	    GET: {
		    script: "",
	    }
	    POST: {
			redirectTo: ""
		    script: "",
	    }
	}
    

path: the URL path to match, support both regex and string
**GET**: commands to handle GET requests
**GET.script**: PHP Script to execute for GET request
**POST**: commands to execute under POST
**POST.redirectTo**: url to redirect to after the post instead of executing script
**POST.script**: PHP Script to execute for POST Request 

## COOKIE_PATH
A List of URLs that trigger sending cookies

## EXIT_TRIGGER_PATH
A List of URLs that trigger exiting the link and going to EXIT_URL


## EXIT_URL
URL to exit to, must be an external URL, example: https://exit.com.

You can delete the current file by clicking the **Remove** button in the file explorer. The file will be moved into the **Trash** folder and automatically deleted after 7 days of inactivity.


## EXTRA_COMMANDS
A List of Objects to execute as commands

Syntax:

    {
    path:  '',
    command:  'CHANGE_DOMAIN',
    command_args: {}
    }
**path**: The path that triggers the command
**command** The command to execute, see below for commands
**command_args**: an object with command arguments, see below for command_args for each command

***COMMANDS & THEIR COMMAND_ARGS***

**To change domain**

    command: CHANGE_DOMAIN
    command_args:{
    new_domain: "" //the new domain to replace to
    persistent: true/false //if the changing of the domain should be permaenmnt for that user,
    }

**To Change Url**    

    command: CHANGE_URL
    command_args:{
	    new_url: "" //the new url to change to
    }


## CAPTURES
An Object or data to capture from the session as form fields through post request.
Syntax:

    captureName: {
	    params: ['captureField'],
	    hosts: ['domain.co ']
    },
    .......
**captureName**: the name you assign to the captured data, can be anything, username, password, pw, id, etc.....
**params**: A list of fields to capture for that captureName, example: userid, password, email
**hosts**: A list of hosts of target domain you want that **param** to be searched on 
(if you are using PHP rendering replace the domain with **'PHP-EXEC'** then the system will know its php 

## **EXTERNAL_FILTERS**
A List of domains to also filter apart from the main domain.
syntax

    EXTERNAL_FILTERS: ['anotherdomain.com', 'assets.3domain.com']
   
  This domain will also be auto filtered including the current domain.

## PRE_HANDLERS
Extra JS Classes to load to handle request.
(Ignore)
  

## IMPORTED_MODULES

A List of modules to load and trigger at certain points.

> (Read "What are modules?" to better understand modules)

Syntax

    {
	    beginAt:  '/auth/module',
	    exitAt:  '/module/exit',
	    module:  NEW_MODULE,
    }

**beginAt**: path where the module should begin execution
**exitAt**: path where the module should end execution
**module**: imported module that has already been imported with NodeJS `require()` function call


# What are Modules?
Coming soon.......

# DEVELOPING PROJECTS
No Better way to understand this better than to see it in action and to see the previous codes
The directory `atx/projects` contain directory of different projects, you can see them all in action.

