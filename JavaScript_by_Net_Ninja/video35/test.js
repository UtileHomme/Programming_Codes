var link = document.getElementById("test");

var k = link.getAttribute("href");

console.log(k);

link.setAttribute("class", "pie");

//for setting the class value
link.className = "ninja";

console.log(link.href);
