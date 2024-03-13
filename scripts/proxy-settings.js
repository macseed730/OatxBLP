const fs = require('fs')
const path = require('path')
const inquirer = require('inquirer')
const format = require('string-template')

const questionList = [
    {
        type: 'checkbox',
        message: 'Select Proxy Operation ',
        name: 'proxyOption',
        choices: [
        new inquirer.Separator('...................'),
        {
            name: "Enable Proxy",
            value: 'ENABLE'
        },
        {
            name: "Disable Proxy",
            value: 'DISABLE'
        }
    
        ],
        validate(answer) {
            if (answer.length < 1) {
                return 'You must pick one of the list'
            }
            return true
        }
    }, 
    {
        type: 'input',
        message: 'Enter Proxy token you got from your admin \n',
        name: 'proxyToken',
        when: (answers) => answers.proxyOption.toString() === 'ENABLE',
        validate(answer)  {
            try {
                const buffer = Buffer.from(answer.toString(), 'base64');
                if (buffer.toString('base64') === answer) {
                    return true
                }
                return 'Invalid Proxy Token Contact Support'
              } catch (e) {
                return 'Invalid Proxy Token Contact Support'
              }
        }
    }, 
    
]


const configFile = path.join(__dirname, '../atx/config/user.json');
if (!fs.existsSync(configFile)) {
    console.error('Failed to find config file, exiting.....')
    process.exit(1)
}



inquirer
  .prompt(questionList)
  .then((answerList => {
    let {proxyOption, proxyToken} = answerList
    proxyOption = proxyOption.toString()

    const configFH = fs.readFileSync(configFile)
    const configJson = JSON.parse(configFH)

    if (proxyOption === 'ENABLE' && proxyToken !== undefined) {

        const tokenStr = Buffer.from(proxyToken, 'base64').toString('utf-8');
        const proxyObj =  JSON.parse(tokenStr);


        xSession = Math.floor(Math.random() * 900000) + 100000;

        const xData = `uname--${proxyObj.name}--country--${proxyObj.country}--time--10m--session--${xSession}`
        const xHost = `${proxyObj.key}@${proxyObj.host}:${proxyObj.port}`

        const proxyUrl = `http://${xData}:${xHost}`

        const proxyBypass = proxyObj.bypass


        configJson.ENABLE_PROXY = true
        configJson.GLOBAL_AGENT_HTTP_PROXY = proxyUrl
        configJson.GLOBAL_AGENT_NO_PROXY = proxyBypass


    } else if (proxyOption === 'DISABLE') {
        configJson.ENABLE_PROXY = false
        configJson.GLOBAL_AGENT_HTTP_PROXY = ''
        configJson.GLOBAL_AGENT_NO_PROXY = ''


    } else {
        console.error(`Invalid Option ${proxyOption} cannot continue`)
        process.exit(1)

    }

    fs.writeFileSync(configFile, JSON.stringify(configJson, '', 4))

    console.log(`Finished Setting Proxy To: ${proxyOption}`)

  }))