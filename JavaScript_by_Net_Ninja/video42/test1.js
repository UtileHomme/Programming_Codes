var colorChanger = document.getElementById("color-changer");

var colors = ["red", "blue", "green", "pink"];

var counter = 0;

function changeColor()
{
    if(counter>=colors.length)
    {
        counter=0;
    }
    colorChanger.style.background = colors[counter];
    counter = counter+1;
}

//after every 3 seconds call this changeColor function
var myTimer = setInterval(changeColor, 3000);

colorChanger.onclick = function()
{
    clearInterval(myTimer);
    colorChanger.innerHTML = "Timer Stopped";
}