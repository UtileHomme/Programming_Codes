// https://youtu.be/PFmuCDHHpwk?t=2869

// Private Properties and Methods

function Circle(radius) {

    this.radius = radius;
    let defaultLocation = {
        x: 0,
        y: 0
    };

    let computeOptimumLocation = function () {
        // ..
    }

    this.draw = function () {

        let x, y;

        computeOptimumLocation(0.1);

        // defaultLocation

        // this.radius

        console.log('draw');
    }
}

const circle = new Circle(10);

circle.draw();