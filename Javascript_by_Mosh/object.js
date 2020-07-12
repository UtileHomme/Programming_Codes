// https://youtu.be/W6NZfCO5SIk?t=1809

// Object Literal
let person = {
    name: "Jatin",
    age: 30
};

// Dot notation to access properties
person.name = "John";

console.log(person);
console.log(person.name);

// Bracket notation to access properties
person['name'] = "Mary";

console.log(person.name);

// OR

// dynamic declaration of property
let selection = 'name';
person[selection] = "Greg";

console.log(person);