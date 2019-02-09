var newLI = document.createElement("li");

var newA = document.createElement("a");

var menu = document.getElementById("main-nav").getElementsByTagName("ul")[0];

console.log(menu);
menu.appendChild(newLI);

newLI.appendChild(newA);
newA.innerHTML = "Blog";

menu.insertBefore(newLI, menu.getElementsByTagName("li")[0]);


