const express = require("express");
const app = express();
const path = require("path");
const cors = require("cors");
const { logger } = require("./middleware/logEvents");
const errorHandler = require("./middleware/errorHandler");
const PORT = process.env.PORT || 3000;

// Custom Middleware Function
app.use(logger);

// Cross-Origin Resource Sharing
const whiteList = [
  "http://127.0.0.1:550",
  "http://localhost:3000",
  "https://www.google.com",
];

const corsOptions = {
  origin: (origin, callback) => {
    if (whiteList.indexOf(origin) !== -1 || !origin) {
      callback(null, true);
    } else {
      callback(new Error("Not allowed by CORS"));
    }
  },
  optionSuccessStatus: 200,
};

app.use(cors(corsOptions));

// Built in middleware functions in express
app.use(express.urlencoded({ extended: false }));
app.use(express.json());
app.use(express.static(path.join(__dirname, "/public")));

app.get("^/$|/index(.html)?", (req, res) => {
  //   res.sendFile("./views/index.html", { root: __dirname });
  res.sendFile(path.join(__dirname, "views", "index.html"));
});

app.get("/new-page.html", (req, res) => {
  res.sendFile(path.join(__dirname, "views", "new-page.html"));
});

app.get("/old-page.html", (req, res) => {
  res.redirect(301, "/new-page.html");
});

// Route Handlers
app.get(
  "/hello(.html)?",
  (req, res, next) => {
    console.log("attempted to lead hello.html");
    next();
  },
  (req, res) => {
    res.send("Hello World");
  }
);

// Array of Callbacks
const one = function (req, res, next) {
  console.log("one");
  next();
};

const two = function (req, res, next) {
  console.log("two");
  next();
};

const three = function (req, res) {
  console.log("three");
  res.send("Hello from Three!");
};

app.get("/chain(.html)?", [one, two, three]);

app.get("/*", (req, res) => {
  res.sendFile(path.join(__dirname, "views", "404.html"));
});

app.use(errorHandler);

app.listen(PORT, () => console.log(`Server is running on ${PORT}`));
