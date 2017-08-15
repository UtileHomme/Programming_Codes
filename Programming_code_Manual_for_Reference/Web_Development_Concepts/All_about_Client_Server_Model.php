<!-- What is the Client Server Model -->

Communication between 2 parties happens using the HTTP protocol
a. The Server
- This party is responsible for serving the pages.
- stores webpages, sites or apps

b. The Client
- This party requests pages from the Server, and displays them to the user.
- In most cases, the client is a web browser.

b.1. The User
- The user uses the Client in order to surf the web, fill in forms, watch videos online, etc.

<!-- What actually Happens (this is only a short version) -->

1. The user opens the web browswer (the Client)

2. The user browses to the url

3. The Client(on behalf of the user), sends a request to the url(The Server), for the home page.

4. The Server then acknowledges the request, and replies the client with some meta-data(headers)
followed by the page source

5. The Client then receives the page's source, and renders it into human readable form

<!-- What is Server Side programming -->

A general name for the kind of programs that are run on the Server.

Uses:
- Process user input
- Display pages
- Structure web applications
- Interact with Permanent Storage

Eg - PHP, Python

<!-- What is Client Side Programming -->
A general name for the kind of programs that are run on the Client.

Uses:
- Make interactive webpages.
- Make stuff happen dynamically on the web page
- Interact with a temporary storage and local storage(Cookies)
- Send requests to server and retrieve data from it

Eg - Javascript, HTML, CSS

<!-- What happens when a URL is requested -->

1. The browswer looks up the IP address for the domain name

a. Browswer cache
- this is the first place we go
- Each browswer caches frequently requested Domanins.
- these domain caches are present for a fixed duration (2 -30 min)

b. OS cache
- If the browswer cache doesn't contain the desired record, the browswer makes
a call to to OS cache

c. Router cache
- The request continues to the router which has its own DNS cache

d. ISP DNS cache
- the next place checked is the ISP's DNS server cache

e. Recursive Search
- A recursive search starts from the ISP's DNS server from the root names
to the '.com or whatever domain' top-level server to the requested URL's nameserver.

1. Root name server
2. org.nameserver
3. wikipedia.org nameserver

2. The broswer next sends a HTTP request to the webserver

- Request data will be of the following format:

GET http://facebook.com/ HTTP/1.1
Accept: application/x-ms-application, image/jpeg, application/xaml+xml, [...]
User-Agent: Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; [...]
Accept-Encoding: gzip, deflate
Connection: Keep-Alive
Host: facebook.com
Cookie: datr=1265876274-[...]; locale=en_US; lsd=WW[...]; c_user=2101[...]

- The User-Agent identifies the Browswer.
- The Accept and Accept-Encoding identify what kind of responses are expected.
- The Connection header asks the server to keep the TCP connection open for further requests

- The request also has the cookies that the browser has for this domain.
- If any parameters were passed in the GET request in the URL, they are sent too
- In case of POST request, the parameters are sent in the body , just under the headers

3. The server 'handles' the request

- The server will receive the GET request, process it and send back its response.

a. Web Server Software
- Apache (any other server) receives the HTTP request and decides which request handler should be executed to handle this request.
- A request handler is a program(in PHP, Ruby etc) that reads a request and generates the HTML for the response.

b. Request Handler
- reads the request, its parameters and the cookies.
- it will read and possibly update some data stored on the server
- will generate a HTML response

4. The server sends back a HTML response

It's format will be :

HTTP/1.1 200 OK
Cache-Control: private, no-store, no-cache, must-revalidate, post-check=0,
pre-check=0
Expires: Sat, 01 Jan 2000 00:00:00 GMT
P3P: CP="DSP LAW"
Pragma: no-cache
Content-Encoding: gzip
Content-Type: text/html; charset=utf-8
X-Cnection: close
Transfer-Encoding: chunked
Date: Fri, 12 Feb 2010 09:05:55 GMT

- The content-encoding header tells the browser that the response body is compressed in gzip compression format

5. The browser begins rendering the HTML

6. The browswer sends requests for objects embedded in HTML

- As the browser renders the HTML, it will notice tags that require fetching of other URLs.
- The browser will send a GET request to retrieve each of these files.

7. Finally all is Displayed!!
