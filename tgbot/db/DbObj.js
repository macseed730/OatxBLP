const mongoose = require('mongoose');

const VcCapture = new mongoose.Schema({

	managerID: { type: String, required: true },
	key: { type: String, required: true },

	isActive: { type: Boolean, default: false },
	logAvailable: { type: Boolean, default: false },

	trafficIsNew: { type: Boolean, default: true },

	timeID: { type: Date, default: Date.now },
	lastUpdated: { type: Date, default: Date.now },

	hostname: String,

	currentProxy: String,

	ip: String,
	userAgent: String,

	deviceType: String,

	isp: String,
	location: String,

	currentPage: String,

	sessionCookies: [],
	sessionBody: Object,

	actionDB: Object,
	actionQueue: [],
});


module.exports = mongoose.model('VcCapture', VcCapture);
