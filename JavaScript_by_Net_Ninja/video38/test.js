var parent = document.getElementById("main-nav").getElementsByTagName("ul");

var child = parent.getElementsByTagName("li")[0];

//removes the first "li" tag in the "ul" tag
//stores it in a variable
var removed = parent.removeChild(child);


