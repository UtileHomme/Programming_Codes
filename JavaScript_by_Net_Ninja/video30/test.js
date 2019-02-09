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

//constuctor
var Car = function(maxSpeed, driver)
{
    this.maxSpeed = maxSpeed;
    this.driver = driver;
    this.drive = function(speed, time)
    {
        console.log(speed * time);
    },
    this.logDriver = function()
    {
        console.log("driver name is " + this.driver);
    }
};

var myCar = new Car(70, "ninja man");

myCar.drive(30,5);
myCar.logDriver();
