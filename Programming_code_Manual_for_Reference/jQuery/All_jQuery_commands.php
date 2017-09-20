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

<!-- How to check whether an User input data is within an Array or not -->

$(document).ready(function() {
    var names = ['Alex','Billy','Dale'];

    $('#check').click(function()
    {
        var name = $('#name').val();

        //the name we are looking for, the array
        if(jQuery.inArray(name, names) != '-1')
        {
            alert(name + ' is in the array');
        }
        else
        {
            alert(name + ' is not in the array');
        }
    }
)
});

-- use the jQuery.inArray(the element we are searching, the name of the array ) should not be equal to '-1'

<!-- How to add user input data into an array and display it in a div-->

$(document).ready(function() {
    function display_array()
    {
        $('#names').text(' ');

        //show all values in the array one by one
        $.each(names,function(index, value )
        {
            $('#names').append(value + '<br>');
        }
    );
    }

    var names = ['Jatin','Dale','Billy'];

    display_array();

    $('#insert').click(function() {
        var name = $('#name').val();

        //we are passing the name entered by the user into the array
        names.push(name);
        display_array();
    });
});

-- use names.push(name)
-- for looping use, $.each(array_name,function(index, value )

<!-- How to display timestamp on the screen -->

$(document).ready(function() {

    //this for refreshing the time every 1 second
    setInterval(function()
    {
        //this is for retrieving the present time
        var timestamp = jQuery.now();
        $('#time').text(timestamp);
    },1);
});

-- use "jQuery.now" function

<!-- How to retrieve days passed after current time -->

$(document).ready(function() {
    //divide by 1000 to get 'seconds'
    eventTime = Date.parse('12 September 2017')/1000;
    currentTime = Math.floor(jQuery.now()/1000);

    seconds = eventTime - currentTime;

    days = Math.floor(seconds/(60*60*24));

    $('#days').text('Only ' +days + ' days until the event');
});

-- Date.parse('date') is used for converting the date into timestamp
-- Math.floor() is used for removing the trailing decimals

<!-- How to load a file -->

$('#button').click(function()
{
    $('#content').load('page.html');
}
);

-- use the "load" function

<!-- How to add "AJAX" calls to jquery code -->

$('#button').click(function()
{
    $.ajax(
        {
            url: 'page1.html',
            success: function(data)
            {
                $('#content').html(data);
            }
        }
    );
}
);

-- "url" is the page where the content is
-- "success" is the data which we wish to retrieve from the page

<!-- How to send data through an "AJAX" call -->

$('#button').click(function()
{
    var name = $('#name').val();
    $.ajax(
        {
            url: 'php/page.php',
            //sending the "name" variable to php file
            data: 'name='+name,
            success: function(data)
            {
                //retrieving that content
                $('#content').html(data);
            }
        }
    );
}
);

<!-- Another way -->

$.ajax({
      type: "GET",
      // this is the route
      url:'allleadc' ,
      data: {'keyword1' : keyword , 'status1':status , 'filter1' : filter,'_token':$('input[name=_token]').val() },
      // This is coming from alldata view page
      success: function(data){
        $('#result').html(data);
      }
    });

<!-- What are the different "AJAX" callback events -->

$('#button').click(function()
{
    var name = $('#name').val();
    $.ajax(
        {
            url: 'php/page.ph',
            //sending the "name" variable to php file
            data: 'name='+name,
            success: function(data)
            {
                //retrieving that content
                $('#content').html(data);
            }
        }
    ).fail(function() {
        alert('An error occured');
    }).success(function()
    {

    }
).complete(function()
{

}
);
}
);

-- complete means may or may not have executed correctly but ajax request is completed
-- success means all went well

<!-- How to change the data type being sent in AJAX -->

$('#button').click(function()
{
    var name = $('#name').val();
    $.ajax(
        {
            //the variable which was being sent as "GET" earlier, will now be sent as "POST"
            type: 'POST',
            url: 'php/page.php',
            //sending the "name" variable to php file
            data: 'name='+name,
            success: function(data)
            {
                //retrieving that content
                $('#content').html(data);
            }
        }
    );
}
);

<!-- How to send "Status Codes" in AJAX -->

$('#button').click(function()
{
    $.ajax(
        {
            url: 'pag.html',
            statusCode:
            {
                    404: function()
                    {
                        $('#content').text('Page not found');
                    }
            },
            success: function(data)
            {
                $('#content').html(data);
            }
        }
    );
}
);

<!-- How to validate email  -->

function validate_email(email)
{
    $.post('php/email.php ',{ email: email },function(data)
    {
        $('#email_feedback').text(data);
    });

}

$('#email').focusin(function()
{
    //if the email id has not been entered
    if($('#email').val()==='')
    {
        //when the user focuses in the text field
        $('#email_feedback').text('Go on, enter a valid email address...');
    }
    else
    {
        //if the user has entered into the field, revalidate it
        //validating the email from the above function as soon as the user presses a button
        validate_email($('#email').val());

    }
}
).blur(function()
{
    //when the user focuses out of the text field , remove the email message
    $('#email_feedback').text(' ');
}
).keyup(function()
{
    //validating the email from the above function as soon as the user presses a button
    validate_email($('#email').val());
}
);

<!-- How to update data in a Database -->

$('#save_button').click(function() {

    var name = $('#name').val();
    var email = $('#email').val();

    $('#save_status').text('Loading...');

    $.post('php/settings.php', { name: name , email:email},function(data)
    {
        $('#save_status').text(data);
    }
);

});

<!-- How to create a basic plugin -->

//How to make a plugin

(function($)
{
    //Name of the function after "fn"
    $.fn.targetBlank = function()
    {
        //if the target is already one of values by default, no need to change it
        var targetArray = ['_blank','_self ', '_parent','_top'];
        var target = jQuery.trim($(this).attr('target'));

        // alert(target);
        if(target == undefined || target=='' || jQuery.inArray(target, targetArray) == false)
        {
            $(this).attr('target','_self');
        }
    }
})(jQuery);

<!-- How to call a plugin -->

$(document).ready(function() {
    $('a').targetBlank();
});

<!-- How to add "draggable" jquery UI -->

$(document).ready(function() {
    $('#drag').draggable();
});

<!-- How to constrain a draggable to a particular axis -->

$(document).ready(function() {
    $('#drag').draggable({ axis: "x" } );
});

<!-- How to constrain a draggable inside the window itself -->

$(document).ready(function() {
    //will constrain the drag space only to the inside of all scrolls not beyond that
    $('#drag').draggable({ containment: 'document' } );
});

<!-- How to constrain a draggable beyond the window -->

$(document).ready(function() {
    $('#drag').draggable({ containment: 'window' } );
});

<!-- How to restrict a draggable inside the parent of the element -->

$(document).ready(function() {
    $('#drag').draggable({ containment: 'parent' } );
});

<!-- How to restrict a draggable inside particular dimensions -->

$(document).ready(function() {
    $('#drag').draggable({ containment: [0,0,200,200] } );
});

<!-- How to change the pointer type of the draggable -->

$(document).ready(function() {

    //we can choose "pointer" cursor too
    //"opacity" is for choosing the visibility
    //"grid" will snap to particular areas in a grid
    $('#drag').draggable({ cursor: 'crosshair' , opacity: 0.60, grid: [20,20] } );
});

<!-- How to set up events for every drag action -->

$(document).ready(function() {

    //we can choose "pointer" cursor too
    //"opacity" is for choosing the visibility
    //"revert" will cause the element to go back to its original position
    $('#drag').draggable({ cursor: 'crosshair' , opacity: 0.60, revert: true, revertDuration: 5000,
    start: function()
    {
            $('#event').text('Dragging started');
    },
    drag: function()
    {
        $('#event').text('Dragging');
    },
    stop: function()
    {
        $('#event').text('Dragging stopped');
    }
} );
});

<!-- How to initiate something when an element is dropped -->

$(document).ready(function() {

$('#drag').draggable({ containment: 'document', revert: true });

//whenever we drop something inside the "div" we get an alert
$('#drop').droppable({ drop: function()
    {
        alert('Dropped');
    }
    })

});

<!-- How to set a border when an element is dropped inside the div -->

$(document).ready(function()
{
$('#drag').draggable({ containment: 'document', revert: true });

//whenever we drop something inside the "div" , "border" class will be added to it

//"tolerance" is for applying the border only when the entire span is inside the border,
// will the color change

//intersect is by default, which takes 50% into consideration

//tolerance: "touch" is when the span touches the border
$('#drop').droppable({ hoverClass: 'border', tolerance: 'fit' });
});

<!-- How to create events for every instance of a drop -->

$(document).ready(function()
{
    $('.name,.place').draggable({ containment: 'document', revert: true });

    //whenever we drop something inside the "div" , "border" class will be added to it

    //"tolerance" is for applying the border only when the entire span is inside the border,
    // will the color change

    //intersect is by default, which takes 50% into consideration

    //tolerance: "touch" is when the span touches the border

    //Inside, "accept", we can mention the "classes" we want to be allowed to drop
    //we don't wish to drop london
    //"over" function is when we are inside and we hover
    $('#drop').droppable({ hoverClass: 'border', tolerance: 'pointer', accept: '.name', over: function()
    {
        $('#drop').text('Something has hover over me');
    },
    //"out" function is when we hover inside and take it out
    out: function()
    {
        $('#drop').text('Something has been dragged out');
    },
    //"drop" function
    drop:function()
    {
        $('#drop').text('Something dropped');
    }
});
});

<!-- How to sort a list of items -->

//this is for making a list sortable: by default the list will also be draggable
//containment ensures that the list item doesn't go outside the list
//tolerance ensures that the list gets sorted as soon as the pointer of the second element reaches the first
//cursor changes the pointer type
//revert moves the element to original state
//connectWith ensures that we can sort from one list to another
//update allows us to raise an event once we try to sort some list

//connectWith is used for adding items from one list to another
$('#names, #places').sortable({ containment: 'document', tolerance: 'pointer',cursor: 'pointer',revert: true, opacity:0.6, connectWith: "#names, #places", update: function()
    {
        content = $(this).text();
        $('#sort_status').text(content);
    }

});

<!-- How to resize an element -->

<!-- Attributes 1 -->
//ghost will show a shadow for the resizing
//animateDuration gives the speed
//animateEasing decides whether the speed is uniform or distributed
//use aspectRatio without animate attributes
//use grid alone

$('#box').resizable({ animate: true, animateDuration: 'slow', animateEasing: 'swing', aspectRatio: 9/10,ghost: true, grid: [20,20]});

<!-- Attributes 2 -->
//ghost will show a shadow for the resizing
//animateDuration gives the speed
//animateEasing decides whether the speed is uniform or distributed
//use aspectRatio without animate attributes
//use grid alone
//handles ensures that we can only resize from specific directions - default is "all" - allows resizing from end of document too

$('#box').resizable({handles: 'e,se', maxHeight: 200, minHeight: 100, maxWidth: 200, minWidth: 100});

<!-- How to enable accordion or dropdowns -->

$('#content').accordion({ fillSpace : true, icons: {'header': ' ui-icon-plus', 'headerSelected' : 'ui-icon-minus'},
    event: 'mouseover'
});

//collapsible ensures that when we open any div in the accordion we are able close it to
//active ensures that the specfied number of the element is opened by default - "false" will keep all closed

$('#content').accordion({ fillSpace : true, collapsible: true, active: 2 });

<!-- How to add "datepicker" functionality -->

//dateFormat will help us apply the type of format that we want
//minDate helps us choose the point from which we wish to start the date
// "0" starts from the present date
//showButtonPanel shows two buttons "Today" and "Done" to be clicked by the user
//showAnim is for modifying the animation (bounce, fadeIn, empty quotes, show(default))

$('#date').datepicker({dateFormat: 'dd-mm-yy' , minDate: 0, maxDate: '+1m + 2d'
, showButtonPanel: true, showAnim: 'fadeIn'
});

<!-- How to add "dialog" box  -->

$('#save').click(function()
{
    $('#dialog').attr('title','Saved').text('Settings were saved').dialog({ buttons:
        {
            //when the button defined "Ok" is clicked , run this function
            'Ok': function()
            {
                //close the dialog
                $(this).dialog('close');
            }
            //closeonEscape will close the dialog when "Esc" key is pressed
            //draggable is set to false if we don't want it to be dragged all through the page
            //resizable makes the dialog box static
            //show helps apply animations
            //modal ensures that the background things are disabled and the dialog box is to closed first
            //positions sets the position for the dialog box - 'top/bottom',



        }, closeonEscape: true, draggable: false, resizable:false, show: 'fade', modal: true,
        position: ['left','top']
    });
}
);

<!-- How to add "Progressbar" functionality to a page -->

$('#upload').click(function()
{
    var val = 0;
    //the variable "val" keeps increasing every 50 ms by 1
    var interval = setInterval(function()
    {
        val = val + 1;
        $('#pb').progressbar({ value: val});

        //percentage will go beyond if we don't break it
        $('#percent').text(val + '%');

        if(val == 100)
        {
            clearInterval(interval);
        }
    }, 50
    );
}
);

<!-- How to add "Slider" functionality -->

var min_value = 1;
var max_value = 200;

$('#slider').slider({

    min: min_value,
    max: max_value,
    range: true,
    values: [20,40],

    //step:5  (will mean that the slider will increment by 5 pounds)
    slide: function(event, ui)
    {
        //we are placing the "value" from the "ui" into the "slider" value
        $('#slider_value').html('&pound;' + ui.values[0] + ' to  &pound' + ui.values[1]);
    }
});


<!-- How to add Slider for vertical orientation -->

var min_value = 1;
var max_value = 100;

$('#slider').slider({

    min: min_value,
    max: max_value,
    //this makes the orientation top to bottom
    orientation: 'vertical',

    // step:5  (will mean that the slider will increment by 5 pounds)
    slide: function(event, ui)
    {
        //we are placing the "value" from the "ui" into the "slider" value
        $('#slider_value').html(ui.value);
    },
    stop: function(event, ui)
    {
        alert(ui.value);
    }
});

<!-- How to add "tabs" on a page and make the user select them "on hover" -->

$('#tabs').tabs({ ajaxOptions: {error: function(xhr, index, status, anchor)
{
    $(anchor.hash).text('Could not load page')
}
// Hovering over the tab displays its content
}, event:'mouseover'});

<!-- How to add "tabs" on a page and collapse them on click-->

$('#tabs').tabs({ ajaxOptions: {error: function(xhr, index, status, anchor)
{
    $(anchor.hash).text('Could not load page')
}
}, collapsible: true });


<!-- // How to make the tabs sortable -->

$('#tabs').tabs({ ajaxOptions: {error: function(xhr, index, status, anchor)
{
    $(anchor.hash).text('Could not load page')
}
}}).find('.ui-tabs-nav').sortable({ axis: 'x'});

<!-- How to set cookies that expire after some time -->


$('#tabs').tabs({ ajaxOptions: {error: function(xhr, index, status, anchor)
{
    $(anchor.hash).text('Could not load page')
}
//to set the expiry time (in days)
}, cookie: { expires: 2 }});

<!-- How to show date in a particular format using jQuery -->

$('#FromDate').datepicker({
    format: "yyyy-mm-dd"
});
$('#ToDate').datepicker({
    format: "yyyy-mm-dd"
});

<!-- How to hide the date after it has been selected using the datepicker -->

$('#FromDate').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });
    $('#ToDate').on('changeDate', function(ev){
        $(this).datepicker('hide');
    });

<!-- How to drag and drop some items from a list into another element -->

$(document).ready(function() {
    $('li').draggable({ containment: 'document', revert: true,
    start: function()
    {
        //the name of the currently being dragged element
        contents = $(this).text();
        // alert()
    }

});

    //only "accept" the "li" elements or "class=item" element
    $('#list').droppable({hoverClass: 'border', accept: '.item',
    drop: function()
    {
        //pick the element that is picked , and drop it inside the box
        $('#list').append(contents + '<br>');
    }
 });
});

<!-- How to check if the username that the person is trying to register is available or already used in a database -->

<!-- .js file -->

$('#username').keyup(function()
{
    //getting the value of what is typed inside the input field
    var username = $(this).val();

    $('#username_status').text('Searching....');

    if(username!='')
    {
        $.post('php/username_check.php', { username: username}, function(data)
        {
            $('#username_status').text(data);
        }
    );
    }
    else
    {
        $('#username_status').text('');
    }
}
);

<!-- the query -->

<?php

require 'init.php';

if(isset($_POST['username']))
{
    $username = $_POST['username'];
    // echo $username;
    if(!empty($username))
    {
        $query = "SELECT `user_id` FROM `users` WHERE `name`=:username";

        $result = $conn->prepare($query); //helps avoid sql injection
        $result->bindParam(':username', $username, PDO::PARAM_STR); //putting parameters in place of actual data
        $result->execute();

        // echo $result->execute();
        $num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
        //which are returned after executing the sql statement

        if($num_of_rows ==1)
        {
            echo "Sorry the username is taken";
        }
        else if($num_of_rows == 0)
        {
            echo "The username is available";
        }
        // var_dump($num_of_rows);

    }
}

?>

<!-- How to show a slide down message when a buton is clicked giving some information about the action performed -->

$('#save').click(function()
{
//update user settings
//call slideNotice

    slideNotice('Your settings have been saved');
}
);

$('#delete_account').click(function()
{
//update user settings
//call slideNotice

    slideNotice('Your account has been deleted');
}
);

<!-- function -->

function slideNotice(text)
{
    $('#slideNotice').html('<h3>' + text  + '</h3>').slideDown().delay(1500).slideUp();
}

<!-- How to redirect a user to a url after the countdown timer reaches a particular point -->

function counter(time, url)
{
    //after every 1 second, we are going to append "a" to our counter span
    var interval = setInterval(function()
    {
        $('#counter').text(time);
        time = time -1;

        if(time==0)
        {
            //we wish to stop the interval as soon as time =0
            clearInterval(interval);
        window.location = url;
        }
    }, 1000);

}

$(document).ready(function() {
    counter(5, 'http://www.google.com');
});

<!-- How to load a link on the same page without redirecting to the PHP file -->


$(document).ready(function() {
        //load the first links content by default
        $('#content_area').load($('.menu_top:first').attr('href'));
});

$('.menu_top').click(function()
{
    //take the attribute associated with the link
    var href = $(this).attr('href');

    //first hide the previous href content and then fade in the one that is clicked
    $('#content_area').hide().load(href).fadeIn('normal');

    //this will not redirect the user to the page for which the link is clicked
    return false;
}
);

<!-- How to create an instant search engine and display the results -->

$('#search').keyup(function()
{

    var search_term = $(this).val();

    $.post('php/search.php', { search_term: search_term }, function(data)
    {
        //display the results
        $('#search_results').html(data);
    }
  );
}
);

<!-- php file code -->

<?php

require 'init.php';

if(isset($_POST['search_term']))
{
    $search_term = $_POST['search_term'];


    //only if the field is not empty , run this
    if(!empty($search_term))
    {
        $query = "SELECT `place` , `description` FROM `places` WHERE `place` LIKE ?  ";

        $result = $conn->prepare($query); //helps avoid sql injection
        $result->execute(array("%$search_term%"));

        // echo $result->execute();
        $num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
        //which are returned after executing the sql statement

        //depending on the number of rows, append the plural or singular form
        $suffix = ($num_of_rows!=1) ? 's' : '';
        echo '<p>Your search for <strong> '.$search_term.' </strong> returned <strong> '.$num_of_rows.' </strong> result'.$suffix.'</p>';

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $a = $result->fetchAll();

        foreach($a as $row)
        {
            echo '<strong>'.$row['place'].'</strong><br /><br />';
        }
    }
}
?>

<!-- How to add "Multiple" upload buttons on a page -->

// here we are trying to add multiple upload buttons

$(document).ready(function() {
    $('#add_more').click(function()
    {
        //select all elements with "input type = file"
        var current_count = $('input[type="file"]').length;
        var next_count = current_count + 1;

        $('#file_upload').prepend('<p><input type="file" name="file_' + next_count +' " /></p>');
    }
);
});

<!-- How to allow an image/div to scroll over a page of text -->


$(document).ready(function() {

    //to take away the "px" part of the attribute value
    var current_top = parseInt($('#follow').css('top'));

    var speed = 1000;

    $('#follow').fadeIn(speed).click(function()
    {
        $(this).fadeOut(speed);
    }

);



    $(window).scroll(function()
    {
        var top = $(window).scrollTop();

        $('#follow').css('top', top + current_top);
    }
);
});

<!-- How to add emoticons to text in a textarea -->

$(document).ready(function() {
    $('.emoticon').click(function()
    {
        //get the value of the textarea content

        //this is the scenario when the person doesn't type anything and puts an emoticon
        var textarea_val = jQuery.trim($('#comment').val());

        //get the value of the emoticon button that is clicked
        var emoticon_val = $(this).attr('value');

        //if there is no content, then do no add a space before the emoticon
        if(textarea_val == '')
        {
            var sp = '';
        }else
        {
            var sp = ' ';
        }

        //remove all content and append it along with the emoticon
        //focus ensures that after clicking on the emoticon, the person doesn't have to click
        // inside the textarea to get the cursor
        $('#comment').focus().val(textarea_val + sp + emoticon_val + sp);
    }
);
});

<!-- How to show password by the conventional method -->

$(document).ready(function() {

    //append the checkbox to the password input type
    $('input[type="password"]').after('<input type="checkbox" class="sp_checkbox" /> Show password');

    //check if the status of the checkbox has been changed or not
    $('.sp_checkbox').change(function()
    {
            // this variable represents every input "password" field on the page
            var prev = $(this).prev();

            var value = prev.val();

            var type = prev.attr('type');

            var name = prev.attr('name');

            var id = prev.attr('id');

            var class1 = prev.attr('class');

            //if type is already password make it text else vice versa
            var new_type = (type== 'password') ? 'text' : 'password';

            //this will remove the input type = "text" field
            prev.remove();

            $(this).before('<input type="' + new_type + '" value="' + value +  '" name="' + name + '" id = "' + id +'" class = "' + class1 +'"/>');


    }
);
});

<!-- How to submit a form without a submit button -->

$(document).ready(function() {
    $('input[type="file"]').change(function()
    {
        //whenever input type is changed, the parent is the form and it will be submitted
        $(this).parent().submit();
    }
);
});
