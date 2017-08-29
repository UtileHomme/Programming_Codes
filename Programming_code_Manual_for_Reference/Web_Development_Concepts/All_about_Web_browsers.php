<!-- Basic Components of a Web Browser -->

http://imgur.com/a/75Gg5

1. User Interface
    - All the buttons(back, url etc)

2. Browser Engine
    - facilitates communication between the UI and Rendering Engine

3. Rendering Engine
    - Takes all the HTML and CSS and puts all of it on the screen

4. Networking
    - uses HTTP and requests stuff all over the Internet

5. JS Interpreter
    - Interprets and executes the scripts

6. UI Backend
    - Tells the browswer what we want to see on the UI

7. Data Persistence
    - for storing cookies

<!-- The Process -->

1. Resource Gathering
    - gathers all the HTML , CSS etc resources

2. Parse HTML and create a DOM tree
    - involves nesting of tags in the form of a tree
    - This tree consists of DOM elements
    - a lot of errors are checked out here

3. Create Render tree from DOM tree
    - adding styles to the HTML
    - apply them to the right elements

** hidden tags are displayed in the DOM tree but not rendered in the Render Tree

4. Layout
    - We need to position and give size to the elements
    - everything is in context of a box

5. Painting
    - uses the graphic functions to show items on the screen
    - it also handles the z-dimension (overlapping)

** DOM and Rendering Tree are constantly changing , so they need to be reparsed
