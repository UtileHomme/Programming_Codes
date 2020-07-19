// https://youtu.be/PFmuCDHHpwk?t=2454

function Circle(radius) {
    this.radius = radius;
    this.draw = function () {
        console.log('draw');
    }
}

const circle = new Circle(10);

//for getting the properties of an object

for (let key in circle) {
    if (typeof circle[key] != 'function') {
        console.log(key, circle[key]);
    }
}

//another way of getting the properties of an object
const key = Object.keys(circle);
console.log(key);

//How to check whether a property exists in an object
if ('radius' in circle) {
    console.log('Circle has radius')
}