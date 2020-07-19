// https://youtu.be/PFmuCDHHpwk?t=2625

//Abstraction

function Circle(radius) {
    this.radius = radius;
    this.defaultLocation = {
        x: 0,
        y: 0
    };

    this.computeOptimumLocation = function () {
        // ..
    }

    this.draw = function () {
        this.computeOptimumLocation();

        console.log('draw');
    }
}

const circle = new Circle(10);

circle.draw();