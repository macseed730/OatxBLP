const fs = require('fs')
const path = require('path')
const { validationResult } = require('express-validator');


exports.getProjects = (req, res) => {

    const projectList = []

    const dirList = fs.readdirSync('./atx/projects')
    dirList.forEach(dirEntry => {
        if (fs.existsSync(path.join('./atx/projects', `${dirEntry}/main.js`))) {
            projectList.push(dirEntry)
        }
    })

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: 'Successfully fetched projects',
        info: projectList,
    })
}

exports.changeProject = (req, res) => {
    const vResult = validationResult(req);
    const hasErrors = !vResult.isEmpty();
    if (hasErrors) {
            return res.status(402).json(vResult.errors);
    }

    const projectName = req.body.project
    if (!fs.existsSync(path.join('./atx/projects', `${projectName}/main.js`))) {
        return res.json({
            status: "Error",
            error: 'Invalid Project',
            code: 1,
            message: "Project Does not exist, please check projectName given...",
        })
    } 

    let userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))

    userFileObj.CURRENT_PROJECT = projectName

    fs.writeFileSync('./atx/config/user.json', JSON.stringify(userFileObj, '', 4))

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully changed project to ${projectName}, Please Restart atx to effect changes`,
        info: projectName,
    })
     
}

exports.getActiveProject = (req, res) => {
    let userFileObj = JSON.parse(fs.readFileSync('./atx/config/user.json'))
    const projectName = userFileObj.CURRENT_PROJECT
    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Current Project name is: ${projectName}`,
        info: projectName,
    })
}


