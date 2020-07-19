// https://youtu.be/PFmuCDHHpwk?t=1869

// Values vs Reference Type

//Values
let x = 10;
let y = x;

x = 20;

//Reference

let x = {
    value: 10
};
let y = x;

x.value = 20;

//both values are 20 since it is the reference/address that is copied

/*
Primitives are copied by Value
Objects are copied by Reference
*/