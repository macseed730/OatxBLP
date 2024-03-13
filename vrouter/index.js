const path = require('path')
const fs = require('fs')
const express = require('express');
const jwt = require('jsonwebtoken');
const cookieParser = require('cookie-parser');
const UAParser = require('ua-parser-js');
const Datastore = require('nedb')
const { format, parseISO } = require('date-fns');



const router = express();
const sessionStore = {}; // In-memory session store

router.set('view engine', 'pug');
router.set('views', path.join(__dirname, 'views'));

const trafficDBFILE = path.join(__dirname, '../atx/database/traffic.db')



const checkJwt = (req, res, next) => {
    const token = req.query.jwt;
    if (!token) {
        return res.status(404).send('Not Found');
    }

    const secretKey = fs.readFileSync(process.env.SECRET_FILE)

    jwt.verify(token, secretKey, (err, decoded) => {
        if (err) {
            return res.status(404).send('Token Error, Generate New?');
        }
        
        if (decoded.exp < Date.now() / 1000) {
            return res.status(404).send('Token Expired, Generate New?');
        }

        for (let sessionId in sessionStore) {
            const sessionObj = sessionStore[sessionId];
            if (decoded.uuid === sessionObj.uuid) {
                return res.status(404).send('Token Consumed, Generate New?');
            }

            delete sessionStore[sessionId];
        }

        const sessionId = new Date().getTime().toString(); 

        sessionStore[sessionId] = {
            uuid: decoded.uuid,
            ip: req.ip,
            expires: decoded.exp * 1000 // Session expires when JWT expires
        };

        res.cookie('sessionId', sessionId);
        res.redirect('stat');
    });
};


const authVerify = (req, res, next) => {
    const sessionId = req.cookies.sessionId;
    const session = sessionStore[sessionId];

    if (!session) {
        return res.status(404).send('Not Found');
    }

    if (session.expires < Date.now()) {
        delete sessionStore[sessionId];
        return res.status(404).send('Session Expired, Geenerate New?');
    }

    if (session.ip !== req.ip) {
        return res.status(404).send('IP Auth does not match');
    }

    next();
};

router.use(cookieParser());

router.use('/static', express.static(path.join(__dirname,'static')));



router.get('/exec', checkJwt);

    
router.get('/stat', authVerify, (req, res) => {
    const trafficDB = new Datastore({ filename: trafficDBFILE, autoload: true });

    trafficDB.find({}, (err, data) => {
        if (err) {
            res.status(500).send(err);
        } else {
            let deviceCount = {};
            let accessCount = { true: 0, false: 0 };
            let trafficPerHour = {};

            data.forEach(d => {
                const parser = new UAParser(d.userAgent);
                const agent = parser.getResult()
                deviceCount[agent.os.name] = (deviceCount[agent.os.name] || 0) + 1;
                accessCount[d.allowedAccess] += 1;

                const trafficDate = new Date(d.dateTime)
                const now = new Date();
                const yesterday = new Date(now.getTime() - (24 * 60 * 60 * 1000));

                if (trafficDate > yesterday) {
                    const hour = trafficDate.getHours();
                    trafficPerHour[hour] = (trafficPerHour[hour] || 0) + 1;
                }
                
            });

            res.render('stat', { deviceCount, accessCount, trafficPerHour });
        }
    });
});

router.get('/traffic', authVerify, (req, res) => {

    const trafficDB = new Datastore({ filename: trafficDBFILE, autoload: true });

    let page = Number(req.query.page);
    if (!page || page < 1) page = 1;

    trafficDB.find({ logInformation: { $exists: true }})
        .skip((page - 1) * 20)
        .limit(20)
        .exec((err, data) => {
            if (err) {
                res.status(500).send(err);
            } else {
                const formattedData = data.map(d => {
                    const parser = new UAParser(d.userAgent);
                    const result = parser.getResult();
                    return {...d, deviceType: `${result.os.name} ${result.browser.name}`};
                });
                res.render('table', {data: formattedData, page: page});
            }
        });
});


module.exports = router;