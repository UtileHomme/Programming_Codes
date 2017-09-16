$(document).ready(function() {
    $('#textarea').scroll(function()
    {
        var scroll_top = $(this).scrollTop();
        $('#feedback').text('Currently at Position: ' + scroll_top);
    }
);
});
