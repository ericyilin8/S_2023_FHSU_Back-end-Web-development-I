const fs = require("fs");

const filepath = "text.txt";

//Write a text to the text file
fs.writeFileSync("text.txt", "This is a example of writeSync");

//Read a file using sync
const data = fs.readFileSync(filepath, { encoding: "utf-8" });

console.log(data);

let sum = 0;
for (let i = 1; i <= 10; i++) {
  sum = sum + i;
}

console.log("Sum: ", sum);

//1. Use fs.appendFileSync to append the file
// 2. Run the script
// 3. Check the data in the file
