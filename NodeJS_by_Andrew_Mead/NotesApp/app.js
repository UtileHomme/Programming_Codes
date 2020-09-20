const fs = require('fs');

fs.writeFileSync('notes.txt', 'My Name is Jatin Sharma');

fs.appendFileSync('notes.txt', '\nI am 28 year old');

