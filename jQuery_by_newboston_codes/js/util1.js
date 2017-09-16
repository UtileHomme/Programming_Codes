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
