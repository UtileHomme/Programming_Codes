var myMessage = document.getElementById("message");

function showMessage()
{
    myMessage.className = "show";
}

//showMessage should fire after 3sec
setTimeout(showMessage, 3000);



