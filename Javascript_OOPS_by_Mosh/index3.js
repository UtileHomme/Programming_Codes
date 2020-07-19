// https://youtu.be/PFmuCDHHpwk?t=1069

// Constructors

function createCircle(radius) {
    return {
        radius,
        draw: function () {
            console.log('draw');
        }
    };
}

const circle = createCircle(1);

//constructor function
function Circle(radius) {

    //referencing an object
    this.radius = radius;
    this.draw = function () {
        console.draw('draw');
    }
}

const another = new Circle(1);