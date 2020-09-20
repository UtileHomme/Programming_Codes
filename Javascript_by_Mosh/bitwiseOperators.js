//1 = 00000001
//2 = 00000010


console.log(1 | 2);     //00000011
console.log(1 & 2);     //00000000

//Read - 0000100
//Read and Write - 00000110
//Read, write and execute - 00000111

const readPermission = 4;
const writePermission = 2;
const executePermission = 1;

let myPermission = 0;
myPermission = myPermission | readPermission | writePermission;

console.log(myPermission);

let message = (myPermission & readPermission) ? 'yes' : 'no';

console.log(message);







