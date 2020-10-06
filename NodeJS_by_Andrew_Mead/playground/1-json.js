const fs = require('fs');

const book = {
    title: 'Ego is the Enemy',
    author: 'Ryan Holiday'
};

//stringify takes object or array and converts to JSON
const bookJSON = JSON.stringify(book);
// console.log(bookJSON);

fs.writeFileSync('1-json.json', bookJSON);

//parse takes JSON and converts to JSON object
const parsedData = JSON.parse(bookJSON);

// console.log(parsedData.author);

const dataBuffer = fs.readFileSync('1-json.json');

//toString converts Buffer to Strings
const dataJSON = dataBuffer.toString();

const data = JSON.parse(dataJSON);

// console.log(data.title);

//Challenge Time

const ChallengeBuffer = fs.readFileSync('2-json.json');

const ChallengeJSON = ChallengeBuffer.toString();

const user = JSON.parse(ChallengeJSON);

user.name = 'Gunther';
user.age = 54;

const userJSON = JSON.stringify(user);
fs.writeFileSync('2-json.json', userJSON);

