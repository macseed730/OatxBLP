const path = require('path')
const childProcess = require('child_process');
const express = require('express')
const app = express()
const port = 3000

const errorServer = require('./error-server')


// keep track of whether callback has been invoked to prevent multiple invocations
let invoked = false;

let psX = null; 



app.get('/start', (req, res) => {
    console.log("Stating Application atx.....")
    startApp(res)
})


app.get('/stop', (req, res) => {
    console.log("Stoppiing Application atx.....")
    stopApp(res)
})

app.get('/restart', (req, res) => {
    
    restartApp(res)
})

app.get('/status', (req, res) => {
    if (psX === null) {
        res.send('Server Not Running')
    }else {
        res.send(JSON.stringify(psX, null, 4))
    }
})


function startApp(res) {
    if (psX !== null) {
        console.log("Applicatin atx Already Started");
        if (res !== null){
            return res.send("PASS");
        }
    }
   
    psX = childProcess.spawn(path.join(process.cwd(), 'atx/atx.app'), {cwd: 'atx'});

    console.log("Started Application atx");
    // listen for errors as they may prevent the exit event from firing
    psX.on('error', function (err) {
        console.error(err);
        errorServer.addMessage(err);
    });
    
    psX.stdout.on('data', (data) => {
        console.log(data.toString());
        errorServer.addMessage(data.toString());
    });

    psX.stderr.on('data', (data) => {
        console.log(data.toString());
        errorServer.addMessage(data.toString());

    });
    
    
    // execute the callback once the process has finished running
    psX.on('exit', function (code, signal) 
    {
        errorServer.startErrorServer()

        if (invoked) {
            return;
        }
        invoked = false;
        console.warn("App Exited without been invoked, Code: " + code);
        console.error('ERROR!!!!! PLEASE CHECK YOUR CONFIG!!!')
        // return startApp(null)
    });
    if (res != null) {
        res.send("OK")
    }
    
}

function stopApp(res) {
     if (psX === null) {
        console.log("Application atx not Running");
        return res.send("PASS");
    }
    invoked = true;
    psX.kill();
    
    psX = null;
    console.log("Stopped Application atx");
    res.send("OK")

}

function restartApp(res) {
    console.log("Restarting Application atx");

    if (psX !== null) {
         invoked = true;
         psX.kill();
         psX = null;
    }
    startApp(res)
    console.log("Restarted Application atx");
}

setInterval(restartApp, 1000 * 60 * 60 * 24);


module.exports = app;