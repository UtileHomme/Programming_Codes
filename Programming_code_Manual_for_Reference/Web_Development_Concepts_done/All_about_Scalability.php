<!-- What is APP Server Scalability -->

<!-- Reference - https://www.youtube.com/watch?v=xUumgxZ04SM -->

- A typical App working looks like

1. Process requests

2. Run DB queries

3. Collate results

4. Render HTML
- use caching for faster loading

** These days we have one program running on a server
- But our server might get overloaded

- We can use "Load balancer" to get requests from user through different app servers to the database
- it is optimised for spreading the requests across different servers
- it takes a request, choosing a server and forwarding the connection to the app server

** Different Load balancing algorithms can be used to decide which request will be handled by which server

a. Random
b. Round robin (one server at a time for each request)
c. Load based algorithm to choose the server with less requests on it

<!-- What does Scalability mean -->

<!-- Reference - https://www.youtube.com/watch?v=wte3dmk8fmc -->

- It is the ability to handle a growing amount of work in a capable manner
- To achieve this, we either need to give more power to an existing system or add more systems

<!-- Vertical Scaling -->
- It means adding more resources to the existing system
- It has a limit

<!-- Horizontal Scaling (Scaling out) -->
- It involves adding more servers or nodes
