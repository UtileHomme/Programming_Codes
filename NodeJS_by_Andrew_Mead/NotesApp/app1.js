const validator = require("validator");
const chalk = require("chalk");

const name = require("./utils.js");

const add = require("./utils.js");

const getNotes = require("./notes.js");

const msg = getNotes();

console.log(msg);

// const name = 'Jatin';

console.log(name);

const sum = add(2, 3);
console.log(sum);

console.log(validator.isEmail("jatin@example.com"));
console.log(validator.isURL("google"));

console.log(chalk.red.bold("hello"));

console.log(process.argv[2]);

