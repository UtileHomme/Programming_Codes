// https://www.youtube.com/watch?v=09BwruU4kiY&list=PLTjRvDozrdlxEIuOBZkMAK5uiqp8rHUax&index=6

//string primitive
const message = "This is my first message";

const len = message.length;

const firstLetter = mesage[0];

//returns true or false
const check = message.includes('my');

//returns true or false
const startcheck = message.startsWith('This');

//returns true or false
const endcheck = message.endsWith('message');

//find starting point of a string
const index = message.indexOf('my');

//replace a word with another
const replace = message.replace('first', 'second');

//change to Uppercase
const upperCase = message.toUpperCase();

//trim method
const trimMethod = message.trim();

//single quote inside a string
const quote = 'This is my \'first message ';

//new line in string
const newLine = 'This is my \n First message';

//split string based on a given character
message.split(' ');

//string object
const another = new String('hi');