function getAverage(a,b)
{
    var average = (a+b)/2; //local variable

    console.log(average);

    return average;
}

var myResult = getAverage(7,12); //global variable

function logResult()
{
    console.log("The average is " + myResult);
}

logResult();