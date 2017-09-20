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
