console.log('utils.js');

const name = 'Mike';

//used for making name variable accessible in app1.js

const add = function (a, b) {
    return a + b;
}

module.exports = name;
module.exports = add;