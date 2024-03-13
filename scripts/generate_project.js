const fs = require('fs')
const path = require('path')
const inquirer = require('inquirer')
const format = require('string-template')

const questionList = [
    {
        type: 'input',
        message: 'Enter the project name:',
        name: 'projectName'
    }, 
    
    {
        type: 'input',
        message: 'Enter the target domain:',
        name: 'domainName',
        validate(answer)  {
            const re = new RegExp(/^((?:(?:(?:\w[\.\-\+]?)*)\w)+)((?:(?:(?:\w[\.\-\+]?){0,62})\w)+)\.(\w{2,6})$/); 
            if (!answer.match(re)) {
                return "Enter a valid domain name"
            }
            return true
        }
    },
    {
        type: 'input',
        message: 'Enter the target url path:',
        prefix: '',
        name: 'startPath',
       
    },
    {
        type: 'checkbox',
        message: 'Select a Handler',
        name: 'handlers',
        choices: [
        new inquirer.Separator(' = Available Proects in ./projects = '),
        {
            name: "Reverse Proxy Handler",
            value: 'reverse'
        },
        {
            name: "PHP Handler ",
            value: 'php'
        }
    
        ],
        validate(answer) {
            if (answer.length < 1) {
                return 'You must pick one of the list'
            }
            return true
        }
    }, 
]


const projectsDir = path.join(__dirname, 'atx/projects')
if (!fs.existsSync(projectsDir)) {
    console.error('Failed to find project directory, exiting.....')
    process.exit(1)
}



inquirer
  .prompt(questionList)
  .then((answerList => {
    const {projectName, domainName, startPath, handlers} = answerList
    
    const newProjectDir = path.join(projectsDir, projectName)
    if (fs.existsSync(newProjectDir)) {
        console.error(`Directory ${newProjectDir} is not empty cannot overrite.....`)
        process.exit(1)
    }

    fs.mkdirSync(newProjectDir)

    const projectGen = fs.readFileSync(path.join(__dirname, 'scripts/new-project.dat'), 'utf8').toString();

    const newGeneratedProject = format(projectGen, { projectName, domainName, startPath })
    fs.writeFileSync(path.join(newProjectDir, 'main.js'), newGeneratedProject)
    console.log(`Finished Geneating Project: *${projectName}* ..... Target URL: ${domainName} \n\n`)

  }))