const fs = require("fs");

const filepath = "text.txt";

let dataWrite = "This is an example of async";

fs.writeFile("text.txt", dataWrite, (err) => {
  console.log(err);
});

fs.readFile(filepath, { encoding: "utf-8" }, (err, data) => {
  console.log(data);
});

let sum = 0;
for (let i = 1; i <= 10; i++) {
  sum = sum + i;
}

console.log("Sum: ", sum);
