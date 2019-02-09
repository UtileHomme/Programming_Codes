//stores the current timestamp
var myDate = new Date();

console.log(myDate);

var myPastDate = new Date(1545, 11, 2);

console.log(myPastDate);

var birthday = new Date(1985, 8, 15, 11, 15, 25);

console.log(birthday.getMonth());
console.log(birthday.getFullYear());
console.log(birthday.getDate());
console.log(birthday.getDay());
console.log(birthday.getHours());
console.log(birthday.getTime());