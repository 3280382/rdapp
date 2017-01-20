var fs = require("fs");

console.log(__dirname);
console.log(fs.readFileSync("project.json").toString());