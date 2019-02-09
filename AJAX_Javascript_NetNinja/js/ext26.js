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
