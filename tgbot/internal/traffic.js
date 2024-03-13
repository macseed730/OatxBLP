const fs = require('fs')
const path = require('path')
const { validationResult } = require('express-validator');
const dbObj = require('../db/DbObj')


exports.fetchTraffic = (req, res) => {  
	
    dbObj.aggregate(
        [{ "$facet": {
            "Bots": [
                { "$match" : {"isActive": { "$exists": true, "$eq":false }}},
                { "$count": "Bots" },
            ],
            "Real": [
                { "$match" : {"isActive": { "$exists": true, "$eq":true }}},
                { "$count": "Real" }
            ],
            "Total": [
                { "$match" : {"managerID": { "$exists": true }}},
                { "$count": "Total" }
            ],
            "iOS": [
                { "$match" : {"deviceType": { "$exists": true, "$eq": "iOS" }}},
                { "$count": "iOS" }
                ],
            "Android": [
                { "$match" : {"deviceType": { "$exists": true, "$eq": "Android" }}},
                { "$count": "Android" }
                ],
            "Windows": [
                { "$match" : {"deviceType": { "$exists": true, "$eq": "Windows" }}},
                { "$count": "Windows" }
                ],
            "Mac": [
                { "$match" : {"deviceType": { "$exists": true, "$eq": "Mac" }}},
                { "$count": "Mac" }
                ],
            "Linux": [
                { "$match" : {"deviceType": { "$exists": true, "$eq": "Linux" }}},
                { "$count": "Linux" }
                ],
            "Unknown": [
                { "$match" : {"deviceType": { "$exists": true, "$eq": "STUB!" }}},
                { "$count": "Unknown" }
                ],
            }},
            
            { "$project": 
            {
                "Bots": { "$arrayElemAt": ["$Bots.Bots", 0] },
                "Real": { "$arrayElemAt": ["$Real.Real", 0] },
                "Total": { "$arrayElemAt": ["$Total.Total", 0] },
                // "iOS": { "$arrayElemAt": ["$iOS.iOS", 0] },
                // "Android": { "$arrayElemAt": ["$Android.Android", 0] },
                // "Windows": { "$arrayElemAt": ["$Windows.Windows", 0] },
                // "Mac": { "$arrayElemAt": ["$Mac.Mac", 0] },
                // "Linux": { "$arrayElemAt": ["$Linux.Linux", 0] },
                // "Unknown": { "$arrayElemAt": ["$Unknown.Unknown", 0] },
            }
            }],
            (err, arrayDocs) => {
                if (err) {
                    console.error(err)
                    return res.json({
                        status: "Error",
                        error: err,
                        code: 1,
                        message: `Failed to execute action: ${execAction} on server`,
                    })
                }
                return res.json({
                    status: "Success",
                    error: null,
                    code: 0,
                    // info: arrayDocs[0],
                    info: `${JSON.stringify(arrayDocs[0], '', 4)}`,
                    message: 'Fetched Trafficc Sucessfully',
                })
            }
    )
		
}



