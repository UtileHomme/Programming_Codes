const validator = require('validator');

const name = require('./utils.js');

const add = require('./utils.js');

// const name = 'Jatin';

console.log(name);

const sum = add(2, 3);
console.log(sum);

console.log(validator.isEmail('jatin@example.com'));
console.log(validator.isURL('google'));