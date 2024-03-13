const fs = require('fs')
const path = require('path')
const crypto = require('crypto');
const jwt = require('jsonwebtoken');


const { validationResult } = require('express-validator');


exports.fetchTrafficToken = (req, res) => {  
	
    const secretKey= fs.readFileSync(process.env.SECRET_FILE)

    let id = crypto.randomBytes(16).toString("hex");


    const jwtToken = jwt.sign({ uuid: id }, secretKey, { expiresIn: '10m' });


    const genUrl = `http://${process.env.HOST_IP}:${process.env.HOST_PORT}/v404/exec?jwt=${jwtToken}`

    return res.json({
        status: "Success",
        error: null,
        code: 0,
        message: `Successfully Generated Traffic Token, Expires in 10m URL: ${genUrl}`,
        info: genUrl,
    })
}



