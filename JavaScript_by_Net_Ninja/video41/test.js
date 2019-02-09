function setUpEvents()
{
    var content = document.getElementById("content");

    var button = document.getElementById("show-more");

    button.onclick = function()
    {
        if(content.className=="open")
        {
            //shrink the box
            content.className = "";
            button.innerHTML = "Show More"

        }
        else
        {
            //expand the box
            content.className = "open";
            button.innerHTML = "Show Less"
        }
    };
};



//when all html tags have been loaded then only fire this event
window.onload = function()
{
    setUpEvents();
};