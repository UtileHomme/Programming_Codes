
//base class
var Job = function()
{
    this.pays = true;
};

// prototype method
Job.prototype.print = function()
{
    console.log(this.pays ? 'Please hire me' : 'no thank you');
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

//ths will overwrite the above method in Job
TechJob.prototype.print = function()
{
    console.log(this.pays ? this.title + ' Job is great, please hire me!' : 'I would rather learn JS');
};

var softwarePosition = new TechJob('Javascript Programmer', true);
var softwarePosition2 = new TechJob('WB Programmer', false);

console.log(softwarePosition.print());
console.log(softwarePosition2.print());

