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

<!-- How to reference the element itself without an id. This selects all buttons -->

$(':button').click(function()
{
  alert('Hello');
});

<!-- When any button is clicked, we wish to display "Please wait... in the button" -->

$(':submit').click(function()
{
  $(':submit').attr('value', 'Please wait...');
});

<!-- This is how we change the css property of some element -->

<!-- Here, as soon as we click inside a field, we wish to change some property like color etc.
    This will work on input type = "text"
-->

$(':text').focusin(function()
{
  $(this).css('background-color:yellow');
}
);

<!-- This will work on all elements with an empty field -->

$(':text').focusin(function()
{
  $(this).css('background-color','yellow');
}
);

<!-- How to use the element which we are working with  -->

$('#button_click').click(function()
{
  // when we click the button, change its value to "Please wait"
    $(this).attr('value','Please wait');
}
);

<!-- We have added a class "highlight" in the css file. We wish to apply
it to the element as soon as some action is taken -->

$(document).ready(function()
{
  // to highlight the table rows
  $('.table tr:even').addClass('highlight');
}
);

<!-- This is how we select the element along with its attribute -->

$(document).ready(function()
{
  var email_default = 'Enter your email address...';

  //first argument is the attribute we want to change : second is the value we want to put there
  $('input[type="email"]').attr('value',email_default).focus(function()
  {
    if($(this).val()== email_default)
    {
      $(this).attr('value','');
    }
  }
).blur(function()
{
  //if there is nothing inside the field
  if($(this).val()== '')
  {
    $(this).attr('value',email_default);
  }
}
);
}
);

<!-- This is how we do things in a text field as and when a key is pressed -->

$(document).ready(function()
{
  // as soon as the key is pressed, do this
  $('#search_name').keyup(function()
  {
    search_name = $(this).val();

    //when we press backspace remove the css class
    $('#names li').removeClass('highlight');

    //to avoid space taking the affect for highlighting
    if(jQuery.trim(search_name)!='')
    {
    //selects the li element in the 'names' list
    $("#names li:contains('" + search_name + "')").addClass('highlight');
    }
  }
);
}
);

- addClass is used for adding the class present in the css file
- jQuery.trim() is used removing any white space
- :contains is used for checking or performing a query on the basis of data entered

<!-- How to disable a button after it has been clicked -->

$(':text').focusin(function()
{
  $(this).css('background-color','yellow');
}
);

//when we move away from the element, change the bg color to white
$(':text').blur(function()
{
  $(this).css('background-color','white');
}
);

//after the button has been clicked change its attribute value and make it disabled
$(':button').click(function()
{
  $(this).attr('value','Please wait....');
  $(this).attr('disabled',true);
}
);

<!-- How to increase the font size of an element by making a custom function -->

function change_size(element, size)
{
  //parseInt will only give us the integer value
  var current = parseInt(element.css('font-size'));

  var new_size;
  if(size=='smaller')
  {
    new_size = current - 2;
  }
  else if(size=='bigger')
  {
    new_size = current + 2;
  }

  element.css('font-size', new_size + 'px');
}

$('#smaller').click(function()
{
  change_size($('p'), 'smaller');
}
);

$('#bigger').click(function()
{
  change_size($('p'), 'bigger');
}
);

- "parseInt" will extract the numerical value for us

<!-- This is how we enable an upload file button -->

$(document).ready(function()
{
  $('#file').change(function()
  {
    //this stores the value of the path of the file
    value = $(this).attr('value');

    $('#submit').removeAttr('disabled');

  }
);
}
);

- removeAttr is used for nullifying the "disabled" attribute
- "change" function is used when we want to capture and perform an event when a change is made to the element

<!-- This is how we disabled the button and then enable it -->

$(document).ready(function()
{
  //this will select the element after the input type (in this case, the submit button)

  //we are trying to disable the upload button here

  //first select the next element and disable it, then run the change function
  $('input[type="file"]').change(function()
  {
      $(this).next().removeAttr('disabled');
  }
).next().attr('disabled','disabled');

}
);

- function "next" is used to capture the element next to the present element. Similarly for "prev"

<!-- This is how we hide a particular element -->

$('#hide_message').click(function()
{
  // This will hide the 'p' tag when the button is clicked
  $('#message').hide();
}
);

<!-- This is how we show a menu on "double click" -->

$('#menu_link').dblclick(function()
{
  $('#menu').show();
}
);

- use the "show" function for this purpose
- use "dblclick" function for double click

<!-- This is how we display data that is entered in the field as soon as keys are pressed -->

$('#user_text').keyup(function()
{
  // when we use the keydown function, it will run the event first and then grab the value
  var user_text = $('#user_text').val();

  //this will output the value into user_text_feedback
  $('#user_text_feedback').html(user_text);
}
);

- function ".html" will output the value that is entered in the field
- function ".keyup" is used whenever we want to capture the event when after pressing the key it is released.
- function ".keydown" for pressing the key


<!-- This is how we display what has been selected from the menu using "change" function -->

$('#list').change(function()
{
  //when we use a different option, this event will be triggered
  var list_value = $('#list').val();
  $('#list_feedback').html('You have selected ' + list_value);
}
);

<!-- This is how we handle the "submit" event -->

$('#signup_form').submit(function()
{
  var user_email = $('#user_email').val();

  $('#signup_feedback').html('Thanks!! ' + 'user_email' + ' has been signed up.');
}
);

- use the "submit" function for this purpose

<!-- This is how we display a text as soon as we hover on some element -->

$('#menu_videos').hover(function()
{
    $('#menu_feedback').html('Free Video tutorials');
}
);

<!-- This is how we display a text as soon as the user scrolls through a textarea -->

$('#some_text').scroll(function()
{
  var scroll_pos = $('#some_text').scrollTop();
  $('#some_feedback').html('You have scrolled and are at position ' + scroll_pos);
}
);

- use "scroll" function on the element
- use "scrollTop" function to get the "position" of the scrolling bar in integer format

<!-- This is how we trigger an event when a text in a field is selected -->

// Here, we want to display something when the user selects some text

$('#some_text').select(function()
{
  $('#some_feedback').html('Something has been selected');
}
);

- use the "select" function for this purpose

<!-- How to trigger an event when we focus on a element,i.e., we place a pointer onto the field -->

// As soon as we focus on the element, something gets displayed

$('#name').focusin(function()
{
  $('#name_span').html('Enter your full name');
}
);

- use "focusin" function

<!-- How to trigger an event as soon as the "mouse" enters or leaves an element -->

// This is the conventional way

$('a').mouseenter(function()
{
  $(this).addClass('bold');
}
).mouseleave(function()
{
  $(this).removeClass('bold');
}
);

<!-- How to use bind to carry out the above two events together -->

$('a').bind('mouseenter mouseleave',function()
{
  $(this).toggleClass('bold');
}
);

- use "toggleClass" because it will check whether a class is applied or not and change the state accordingly
- use "bind" to carry out something on the basis of multiple events

<!-- this is how we add an element "after" an event is triggered -->
$(document).ready(function()
{
  $('.duplicate').click(function()
{
  alert('You have clicked');
  $(this).after('<input type="button" value="Click" class="duplicate" />');
}
);
}
);

- use the "after" function

<!-- This is how we monitor the number of characters remaining in a textarea and print them -->

$(document).ready(function()
{
  var text_max=55;

  $('#textarea_feedback').html(text_max + 'character remaining');

  // We are trying to print the number of characters remaining after text
  // has been typed in the textarea

  $('#textarea').keyup(function()
  {
    //take the length of the number of characters entered in the textarea
    var text_length = $('#textarea').val().length;

    var text_remaining = text_max - text_length;

    $('#textarea_feedback').html(text_remaining + 'characters remaining');
  }
);
}
);
