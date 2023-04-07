const logEvents = require("./logEvents");
const events = require("events");

const myEvent = new events.EventEmitter();

myEvent.on("log", (msg) => {
  logEvents(msg);
});

setTimeout(() => {
  myEvent.emit("log", "Logging events in logs/eventLogs.txt");
}, 0);

exports.myEvent = myEvent