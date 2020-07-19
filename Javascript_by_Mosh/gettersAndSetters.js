// https://www.youtube.com/watch?v=bl98dm7vJt0&list=PLTjRvDozrdlxEIuOBZkMAK5uiqp8rHUax&index=11

const person = {
    firstName: 'Mosh',
    lastName: 'Hamedani',

    //getter
    get fullName() {
        return `${
                person.firstName
            }
            ${
                person.lastName
            }`;
    },

    //setter
    set fullName(value) {
        const parts = value.split(' ');
        this.firstName = parts[0];
        this.lastName = parts[1];
    }
};

// console.log(person.fullName());
console.log(person);

//Temporal Literal
console.log(`
            ${
                person.firstName
            }
            ${
                person.lastName
            }`);