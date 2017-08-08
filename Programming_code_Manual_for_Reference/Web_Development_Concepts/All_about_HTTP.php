<!-- What is HTTP -->

- Stands for HyperText Transfer Protocol
- is a stateless, application-layer protocol for communicating between distributed systems.

- It allows for communication between a variety of hosts and clients, and supports a mixture of network configurations.
- to make this possible, it assumes very little about a particular system, and does not keep a state between different message
exchange
- The communication usually takes over TCP/IP ; default port = 80

Current version = HTTP/1.1

<!-- How does a URL look -->

http://www.domain.come:1234/path/to/resource?a=x&b=y;

http:// = protocol
www.domain.com = host
1234 = port
/path/to.resource = resource path
?a=x&b=y = query or parameters

<!-- What are HTTP verbs -->

- The client tells the host which actions to perform. They are as follows:

a. GET
  - fetch an existing resource
  - The URL contains all the necessary information the server needs to locate and return the resource

b. POST
 - create a new resource
 - POST requests usually carry a payload that specifies the data for the new resource

c. PUT
  - update an existing resource
  - the payload may contain the updated data for the resource

d. DELETE
  - delete the existing resource

* PUT and DELETE are considered specialized versions of the POST verb

e. HEAD
  - is similar to GET but without a message body
  - is used to retrieve the server headers for a particular resource, generally to check if the resource has changed via timestamps

<!-- What are HTTP Status Codes -->

- They tell the client how to interpret the server response

a. 1xx. Informational Messages

  - is present only in HTTP/1.1
  - The server sends a "Expect: 100-continue" message, telling the client to contiue sending the remainder of the request
    or to ignore if it has already sent it.

b. 2xx. Successful

  - This tells the client that the request was successfully processed.
  - For the GET request, the server sends the resource in the message body itself.

  Some Codes are:

  1. 202 Accepted:
    - the request was accepted but may not include the resource in the response.

  2. 204 No Content:
    - There is no message body in the response

  3. 205 Reset Content:
    - indicates to the client to reset its document view.

c. 3xx. Redirection

  - This requires the client to take additional action.

  Some Codes are:

  1. 301 Moved Permanently:
    - The resource is now located at a new URL

  2. 303 See other:
    - The resource is located at a new URL
    - The 'Location' response header contains the temporary URL

d. 4xx. Client Error

  - These codes are used when the server thinks that the client is at fault, either by requesting an invalid resource
    or making a bad request.

  Some Codes are :

  1. 400 Bad Request:
    - The request was malformed

  2. 401 Unauthorized:
    - The request required authentication
    - The 'Authentication' header needs to have the credentials

  3. 403 Forbidden:
    - Server has denied access to the server

e. 5xx. Server Error

- These codes indicate a server failure while processing the request

  Some Codes are :

  1. 500 Internal Server Error

  2. 501 Not Implemented:
    - The server doesn't support the request functionality

<!-- How a typical request and response looks like -->

http://imgur.com/a/O0zwM




<!-- Why is HTTP is called a stateless protocol and how can be make it stateful -->

- It doesn't require the server to retain the information or status of the user for the duration of multiple requests.
- Each request is considered new

But some web applications might need to track the user's progress from page to page.

It can be done in the following ways:
1. the use of HTTP cookies
2. server side sessions
3. hidden variables (when submitting a form)
4. Rewriting the url and sending some parameters along with it

The statelessness is required so that there is less traffic and the webpage loads easily.

<!-- How is the stateful thing carried out using Sessions and Cookies -->

- The server stores whatever info it cares about to maintain between requests and assigns that information an ID.
- It then tells the browswer that session ID in such a way that it can hand the ID back when it's time to make another request

- If the browswer plays its part and provides the session ID, then the stored info can be retrieved, updated with each request providing
some degree of statefulness

- Sessions are implemented using cookies. The server hands over the browser a cookie with the session ID and the browser hands over the
same cookies with each request until the cookie expires or is otherwise forgotten
   - Some cookies(session cookies) are forgotten as soon as the browswer closes
