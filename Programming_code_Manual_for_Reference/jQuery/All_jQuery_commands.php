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

-- hide('how fast we want it to disappear','the way we want it to disappear',call_back function)
    - first parameter can be a string or a number Eg - 'fast','slow', 1000 , 500 etc.
    - second parameter can be 'linear','swing (by default)' etc.


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

<!-- This is how we show a text on an element when the user hovers over it -->

// 'e' is an object out here which has been passed as a parameter
$('.hover').mousemove(function(e)
{
    // we are displaying the mouse 'x' and 'y' coordinates
    //these coordinates are relative to the document
    // $('#co').text('x: ' + e.clientX + 'y: '  + e.clientY);

    //will retrieve the value of the 'hovertext' attribute set in the 'anchor' tag
    var hovertext = $(this).attr('hovertext');

    $('#hoverdiv').text(hovertext).show();

    //we are setting the top and left property when we hover
    $('#hoverdiv').css('top', e.clientY+15).css('left', e.clientX+15);
}
).mouseout(function()
{
    //to hide the hoverdiv when the cursor leaves the links
    $('#hoverdiv').hide();
}
);

<!-- This is how we copy some text and display it when we click on a button -->

$('#copy_button').click(function()
{
    //this will capture the value from the '#text' id
    var text = $('#text').html();

    //here, we are placing it in the second "id"
    $('#copy').html(text);
}
);

<!-- This is how we grab the value from a field and display it -->

$('#button').click(function()
{
    var name = $('#name').val();
    $('#area').text(name);
}
);

<!-- How to display the value of an attribute -->

var attr = $('#link').attr('href');
$('#attr').text(attr);

<!-- This is how we disable a "button" on the basis of user selecting a "checkbox" -->

$(document).ready(function()
{
    // we are checking whether the check box has been changed or not
    $('#agree').change(function()
    {
        //this will take the current state of the checkbox
        state = $(this).is(':checked');

        //if the value of "checkbox" is on, we enable the button so that "continue" is visible and clickable
        if(state==true)
        {
            $('#continue').removeAttr('disabled');
        }

        //if the value of "checkbox" has nothing, we add the "disable" attribute to the button
        else if(state==" ")
        {
            $('#continue').attr('disabled', 'disabled');
        }
    }
);
}
);

<!-- How to combine two texts from different input fields when button is clicked -->

$(document).ready(function()
{
    $('#combine').click(function()
    {
        var combined_text = ' ';

        //index gives the order number of the element
        //using "each" function , we are looping through each selector
        $('input[type=text]').each(function()
        {
            combined_text += $(this).val() + ' ';
        }
    );

    $('#combined').text(combined_text);
}
);
}
);

<!-- How to select the child element of a parent and append something to the last , middle or first child -->

$(document).ready(function()
{
    // $('.names li:first').append(' First');
    // $('.names li:last').append(' Last');

    //we are selecting the child of a parent, then the "first occurrence of it" and appending some text to it
    $('.names').find('li').first().append(' (first)');
    $('.names').find('li').first().next().append(' (second)');
    $('.names').find('li').last().append(' (last)');
}
);

-- use "first" function  for selecting the first child
-- use "last" function for selecting the last child
- use "next" after "first" to get the second child

<!-- How to toggle the info after a class has been applied -->

$(document).ready(function()
{
    //find the first "li" in the menu, add class "bold" to it and hide everything after that class
    $('.menu').find('li').first().addClass('bold').click(function()
    {
        $(this).nextAll().toggle();
    }
).nextAll().hide();
});

-- the function "nextAll" will select all the information after the selected "li" and hide it

<!-- How to change an html element by finding it as a part of another element -->

$(document).ready(function()
    {
        $('p').find('strong').addClass('big');
    }
);

-- use the "find" function

<!-- How to check whether there is a "child" element present in the "parent" or not -->

$(document).ready(function()
{
    $('ul').each(function()
    {
        this_sel = $(this);

        // if there is no "li" element in the "ul" , print empty something
        if(this_sel.has('li').length==0)
        {
            this_sel.after('Empty menu');
        }
    }
);
}
);

- use the "has" function

<!-- How to make an element "slide down" when it is hidden by default -->

$(document).ready(function()
{
    $('#top_message').slideDown('slow');
}
)

$(document).ready(function()
{
    var speed = 300
    $('#top_message').slideDown(speed);

    $('#hide_message').click(function()
    {
            $('#top_message').slideUp(speed);
    }
);
}
)

<!-- How to stop an ongoing animation -->

$('#start').click(function()
{
    $('#image').slideToggle('slow');
}
);

$('#stop').click(function()
{
    $('#image').stop();
}
);

<!-- How to delay an event by some time before it takes effect -->

$('#go').click(function()
{
    //we are fading out the element, giving a delay of 3seconds and then fading in the element
    $('#para').fadeOut().delay(3000).fadeIn();
}
);

<!-- How to fadein one element at a time while the previous one fades out -->

$(document).ready(function() {
    $('.fadeto').css('opacity','0.4');
        //speed , opacity
        $('.fadeto').mouseover(function()
        {
            //we only want to fadein one element at a time and fadeout the other
            $(this).fadeTo(100, 1);

            //here, we are ensuring that the one that is not "this" is set to opacity=0.4
            $('.fadeto').not(this).fadeTo(100,0.4);
        }
    );
    }
);

<!-- How to append a user entered value at the end of a sentence -->

$('#button').click(function()
{
    //whatever the user enters into the input field, we want to append to the sentence
    var name = $('#name').val();
    $('#sentence').append(name);
}
);

<!-- How to append a value from an element and appending it to another element -->

$('#append').click(function()
{
    $('#span').appendTo('#paragraph');
}
);

<!-- How to keep the element at its place and still append to another element -->

$('#append').click(function()
{
    $('#span').clone().appendTo('#paragraph');
}
);

<!-- How to get the "height" and "width" of an element -->

$(document).ready(function() {

    //also $('#div').css('height')  -- here we'll get the "px" along with the numerical value  -- use parseInt to only get the numerical value
    var div_height = $('#div').height();
    var div_width = $('#div').width();
    $('#div').text('Width: ' + div_width + ' / Height : ' + div_height);
});

<!-- How to use "height" and "width" of a screen to set the "image" height and width  -->

$(document).ready(function() {
    var w_height = $(window).height();
    var w_width = $(window).width();

    $('.fit').css('height', w_height).css('width', w_width);
});

<!-- How to find the integer value of the current position when we are scrolling down a textarea -->

$(document).ready(function() {
    $('#textarea').scroll(function()
    {
        var scroll_top = $(this).scrollTop();
        $('#feedback').text('Currently at Position: ' + scroll_top);
    }
);
});

<!-- How to append a link into a dropdown menu by clicking on it  -->

$('.link').click(function()
    {
        //everytime we click on a link, it will be filled into the dropdown menu
        var item = $(this).text();
        $('#list').append('<option>' + item + '</option>');
    }
);

<!-- How to place something in the center of the window -->

$(document).ready(function() {
    function move_div()
    {
        window_width = $(window).width();
        window_height = $(window).height();

        obj_width = $('#verycenter').width();
        obj_height = $('#verycenter').height();

        $('#verycenter').css( 'top', (window_height/2)-(obj_height/2) ).css( 'left' , (window_width/2)-(obj_width/2) );
    }

    move_div();

    //to make a responsive
    $(window).resize(function()
    {
        move_div();
    }
);
});


-- use "resize" function to dynamically set the values of a window

<!-- How to show a error message beside a text field and remove it once the action is taken -->

$(document).ready(function() {
    $('input[type="text"]').focusin(function()
    {
        this_sel = $(this);
        minlength = this_sel.attr('minlength');

        //the minlength shouldn't be zero or less than it. Also, the value that we putting inside
        //the form should be less than the minlength
        if(minlength != 0 && minlength>0 && this_sel.val().length<minlength)
        {
            this_sel.after('<span>'+ minlength + ' Characters required</span>');
        }
    }
).keyup(function()
{
    if(this_sel.val().length>=minlength)
    {
        this_sel.next().remove();
    }
}
).blur(function()
{
    //here we are removing the span element
    this_sel.next().remove();
}
);
});

<!-- How to scroll to the top if the user clicks a "Go to top" link -->

$(document).ready(function() {
    $('.top').click(function()
    {
        //animate(position, speed)
        $('html, body').animate({ scrollTop: 0}, 'fast');
    }
);
});

<!-- How to enable checkbox when we scroll to the end -->

$(document).ready(function() {
    $('#agree').attr('disabled','disabled');

    $('#terms').scroll(function()
    {
        //this is the height of the textarea
        var textarea_height = $(this)[0].scrollHeight;

        //this is the height of the inner part of the textarea
        var scroll_height = textarea_height - $(this).innerHeight();

        //returns the current position of the scroll top
        var scroll_top = $(this).scrollTop();

        if(scroll_top== scroll_height)
        {
            $('#agree').removeAttr('disabled');
        }
    }
);
});

How to check whet 
