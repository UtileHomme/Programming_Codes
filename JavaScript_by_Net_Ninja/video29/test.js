var myArray = new Array();

myArray[0] = 8;

myArray[1] = "hello";

var myCar = new Object();
myCar.maxSpeed = 58;
myCar.driver = "Shaun";

console.log(myCar.driver);

myCar.drive = function () {
    console.log("now driving");
};

myCar.drive();

var myCar2 = {
    maxSpeed: 70,
    driver: "Net Ninja",
    drive: function (speed, time) {
        console.log(speed*time);
    },
    test:function()
    {
        console.log(this);
    },
    logDriver:function()
    {
        console.log("driver name is" + this.driver);
    }
};

console.log(myCar2.maxSpeed);
myCar2.drive(58,3);
myCar2.test();
myCar2.logDriver();