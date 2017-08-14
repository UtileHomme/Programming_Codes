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
