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

<!-- How a web browser displays a web page -->

This is how a URL(Uniform Resource Locator) looks:

- http://   www.google.com   ::80   /wiki   /Uniform_Resource_Locator?name=Jatin#top
    1                       2                 3         4                 5                                     6                  7

    1. Scheme or Protocol
    2. Server Domain name
    3. Port
    4. Path to resource
    5. Query string
    6. Fragment Id

- The URL tells the location of a Resource

- The browser parses the HTML
    - it breaks up the document into pieces and figures out what to do with the "pieces"
    - it understands "headings","paragraphs" etc. and that they need to linked together

- It also decides the "appearance" on the basis of CSS stylesheets
- It also fetches any "Javascript" files

- All this is stored in an "Internal Data Structure"
- It then renders a visible page and publishes everything into "Document Object Model"
- DOM allows one to traverse or manipulate the page and make it "sing and dance"
