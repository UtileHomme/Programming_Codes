<!-- Why is Ajax needed -->

AJAX = Asynchronous Javascript and XML

- In the traditional scenario, when a HTTP request is made the user has to wait for the HTTP response (this is received when the page is refreshed)

- Javascript interacts with the server in real time
- the data returned is formatted in XML format

- It is a web development technique used for sending and retrieving data in the background without refreshing the webpage

<!-- What does Asynchronous mean in AJAX -->

<!-- Reference - https://stackoverflow.com/questions/3393751/what-does-asynchronous-means-in-ajax -->

- it means that the script will send a request to the server and continue it's execution without waiting for its reply.
- as soon as a reply is received a browser event is fired, which in turn allows the script to execute associated actions

- AJAX knows when to pull data from the server, because you tell it when to do it

<!-- Difference between synchronous and asynchronous requests -->

<!-- Reference - http://www.phpmind.com/blog/2010/07/what-is-ajax-synchronous-and-asynchronous/ -->

<!-- Reference - https://www.javatpoint.com/understanding-synchronous-vs-asynchronous -->

1. Synchronous

- The script stops and waits for the server to send back a reply before continuing

- In standard web applications, the interation between the customer and the server is synchronous. This means that one has to happen after the other
Eg - If a customer clicks a link, the request is sent to the server, which then sends the results back.

- Because of the danger of a request getting lost and hanging the browser, synchronous javascript isn't recommmended for anything outside of unload event handlers, but if you need to hear back from the server before you can allow the user to nagivate away from the page, synchronous JS isn't the best option

2. Asynchronous

- Here the script allows the page to continue to be processed and will handle the reply if and when it arrives.
- If anything goes wrong in the request and/or transfer of the file, your program still has the ability to recognize the problem and recover from it.

- Processing asynchronously avoids the delay while the retrieval from the server is taking place because your visitor can continue to interact with the web page and the requested information will be processed with the response updating the page as and when it arrives
