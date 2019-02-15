
//base class
var Job = function()
{
    this.pays = true;
};

//subclass
var TechJob = function(title, pays)
{
    //this line calls the Job constructor
    Job.call(this);
    this.title = title;
    this.pays = pays;
};

//inherit the functions and properties of "Job" into "TechJob"
TechJob.prototype = Object.create(Job.prototype);

TechJob.prototype.constructor = TechJob;

Object.prototype.print = function()
{
    console.log('I am executing front of the master Object');
};

var softwarePosition = new TechJob('Javascript Programmer', true);
var softwarePosition2 = new TechJob('WB Programmer', false);

console.log(softwarePosition.print());
console.log(softwarePosition2.print());

