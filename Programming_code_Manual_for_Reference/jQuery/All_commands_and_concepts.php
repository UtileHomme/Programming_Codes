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

<!-- This gives the count of all the elements on the page -->
var count = $('*').length;

<!-- This gives the count of all the elements within the selected element -->
var count = $('#area').find('*').length;
alert(count);

<!-- How to return the value of the id -->
var name = $('#name').val();

<!-- This is how we call an event when a button is clicked -->
$('#click_me').click(function()
{
  alert('Hello');
}
);
