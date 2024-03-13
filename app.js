const express = require('express');
const http = require('http');
const path = require('path');
const cookieParser = require('cookie-parser');
const lessMiddleware = require('less-middleware');
const logger = require('morgan');
const mongoose = require('mongoose');
const dotenv = require('dotenv');
const superagent = require('superagent');
const pm3 = require('./pm/pm3');


dotenv.config({path: '.env'});

// TODO: Change this
mongoose.set('useFindAndModify', false);
mongoose.set('useCreateIndex', true);
mongoose.set('useNewUrlParser', true);
mongoose.set('useUnifiedTopology', true);

mongoose.connect('mongodb://localhost:27017/atx')
    .catch((err) => {
        console.error(err);
        console.warn('%s MongoDB connection error. Please make sure MongoDB is running.', '✗');
        process.exit();
    })
    // .then());



const app = express();
app.set('port', process.env.HOST_PORT);


// noinspection JSCheckFunctionSignatures
app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));


process.env.SECRET_FILE = path.join(__dirname, '.env');

/**yAPIRouter Router*/
const yAPIRouter = require('./yapi')
app.use(`${process.env.SITE_AUTH}`, yAPIRouter)



// Random index changes on every reboot
const vRouter = require('./vrouter')
app.use('/v404', vRouter)

app.use(function (req, res, next) {
    res.status(404).send('Not Found');
});

/**
 * Listen on provided port, on all network interfaces.
 */

const server = http.createServer(app);

server.listen(process.env.HOST_PORT, '0.0.0.0');
server.on('error', onError);
server.on('listening', onListening);

/**
 * Event listener for HTTP server "error" event.
 */

function onError(error) {
	if (error.syscall !== 'listen') {
		throw error;
	}

	const bind = 'Port ' + process.env.HOST_PORT;

	// handle specific listen errors with friendly messages
	switch (error.code) {
		case 'EACCES':
			console.error(bind + ' requires elevated privileges');
			process.exit(1);
			break;
		case 'EADDRINUSE':
			console.error(bind + ' is already in use');
			process.exit(1);
			break;
		default:
			throw error;
	}
}

/**
 * Event listener for HTTP server "listening" event.
 */

function onListening() {
	const addr = server.address();
	console.log(`Listening on ${process.env.HOST_IP}:${process.env.HOST_PORT}`);


	pm3.listen(process.env.PM3_PORT, 'localhost', () =>{
		console.log(`Started PM3 to listen on ${process.env.PM3_PORT}`);
		superagent.get(`http://localhost:${process.env.PM3_PORT}/start`)
            .end((err, resp) => {
                if (err) console.error(err)
                console.log("Started Child Process with PM3....")
            })
	})

}
