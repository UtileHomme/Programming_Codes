// https://youtu.be/PFmuCDHHpwk?t=897

// Factories

function createCircle(radius) {
    return {
        radius,
        draw: function () {
            console.log('draw');
        }
    };
}

const circle = createCircle(1);

circle.draw();