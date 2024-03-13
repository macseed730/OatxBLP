const ip = require('ip')
const fs = require('fs')
const dotenv = require('dotenv')
const crypto = require("crypto");

dotenv.config({path: '.env'});

if (!fs.existsSync('.auth')) {
    console.warn('Auth file not found creating.....')
    const randAuth = crypto.randomBytes(20).toString('hex')

    fs.writeFileSync('.auth', randAuth)
    console.log('Created Auth File')
}
const ipAddr = process.argv[2] || ip.address()
const port = process.env.HOST_PORT

const siteAuth = process.env.SITE_AUTH

const tokenStr = fs.readFileSync('.auth')

const objectToParse = {
    ip: ipAddr,
    endpoint: `http://${ipAddr}:${port}${siteAuth}`,
    authToken: tokenStr.toString()
}

const strObj = JSON.stringify(objectToParse)
// console.log(strObj)
const salted = Buffer.from(strObj).toString('base64')

const commandToUse = `/addserver-${salted}`

console.log(`ADD THE FOLLOWING COMMAND TO THE BOT TO CONNECT OUR BOT TO YOUR SERVER

BELOW --->

${commandToUse}`)



