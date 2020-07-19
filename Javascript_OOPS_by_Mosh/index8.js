// https://youtu.be/PFmuCDHHpwk?t=2220

//Add or remove properties

function Circle(radius) {
    this.radius = radius;
    this.draw = function () {
        console.log('draw');
    }
}

const circle = new Circle(10);

//adding a new property

circle.location = {
    x: 1
};

//another way for the above line
circle['location'] = {
    x: 1
};

//deleting a property

delete circle.location;