// https://youtu.be/PFmuCDHHpwk?t=1552

// Functions as Objects

function Circle(radius) {
    this.radius = radius;
    this.draw = function () {
        console.log('draw');
    }
}

// const Circle1 = new Function('radius', `
// this.radius = radius;
// this.draw = function () {
//     console.log('draw');
// }
// `);

// const circle = new Circle1(1);

//alternative for line 24
Circle.call({}, 1);
Circle.apply({}, [1, 2, 3]);

const another = new Circle(1);

//Circle.name
//Circle.length