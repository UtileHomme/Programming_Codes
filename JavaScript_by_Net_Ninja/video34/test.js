var myBody = document.getElementsByTagName("body");

console.log(myBody);

var checkHTML = myBody[0].innerHTML;

// For replacing the entire content of the body tag
// myBody[0].innerHTML = "<p>I am a paragraphp</p>"

var myTitle = document.getElementById("jatin");

// For replacing the text of a particular tag
myTitle.textContent = "yay jatin";