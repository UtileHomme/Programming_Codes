<!-- What is jQuery -->

jQuery is a Javascript library for document traversing, event handling
, animating and AJAX interactions

<!-- Why do we put the script just before body -->

- We wish to load all the elements before we actually start checking for elements using jQuery

<script type="text/javascript" src="js/jquery.js">

</script>

- This is how we use inline jQuery

<p onclick="$(this).hide();">This is a paragraph</p>

- We should aim to keep our Javascript from our HTML

- Therefore, external scripting is preferred. This is how the code looks

$('#paragraph').click(function()
{
  // here is the code which happens when the user clicks
  $('#paragraph').hide();
}
);

<!-- Why and When do we need document ready event -->

- There are times when we might not need the user to perform some action and then some event to get triggered.
- At times, we might want some event to happen as soon as the page loads
- This is how we'll do it

$(document).ready(function()
{

}
);

- When we wish to do something when the entire page loads, do this

$(window).on('load', function()
{
  alert("Window loaded");
}
);

- This is how you select a particular element all through the page

$('p').click(function()
{

}
);

- we used the "click()" method to activate click events

- we use ".length" on an element when we wish to print the count of that element

- we use ".val()" when we wish to find the value that element contains

- we use ".attr('attribute of that element', 'value of the attribute that we wish to see in that attribute')"
when we wish to change the attribute of any element

- we use the ".focusin" function when we wish to perform an event when we focus in

- we use the ".addClass('css class')" function when we want to add a CSS class to an element

<!-- This is how we check for the value entered in a field  -->


  $("#names li:contains('" + search_name + "')").addClass('highlight');

- we used "jQuery.trim()" for removing whitespaces

- we use ".blur()" for removing the functionality from the element

<!-- This is how we disable a button after its click -->

$(this).attr('disabled',true);

* Never define a variable inside an 'if', since JS doesn't have the idea of a 'block scope'
- always define them outside the conditions

<!-- How to extract a numerical value from a string -->

- "parseInt" will extract the numerical value for us

- use "removeAttr" when you wish to remove the value set for a particular attribute

<!-- How to hide a particular element -->

- use "hide" function on the element

<!-- How to use "double click" and "show" events -->

- use the "show" function
- use "dblclick" function for double click

<!-- How to capture "keypress" events -->

- function ".html" will output the value that is entered in the field
- function ".keyup" is used whenever we want to capture the event when after pressing the key it is released.
- function ".keydown" for pressing the key

<!-- How to capture "submit" button events -->

- use the "submit" function for this purpose

<!-- How to use "hover" feature -->

- use "hover" function

<!-- How to use "scroll" feature -->

- use "scroll" function on the element
- use "scrollTop" function to get the "position" of the scrolling bar in integer format

<!-- How to use "select" something and show an event  -->

- use "select" function on the element

<!-- How to trigger an event, when we place our pointer onto an element  and click-->

- use "focusin" function
- use "focusout" function to change the event to do something when we move the pointer away

<!-- How to dynamically carry out and event -->

- use "toggleClass" which applies the class on the basis of its present state

<!-- How to capture an event when the user moves away from the element -->

- use "mouseout" event

*** 'html' function in jquery is used for grabbing some html content from one area and showing it in another area

<!-- How to display a text stored in a variable which has some value grabbed on a click -->

-- use the "text" function 
