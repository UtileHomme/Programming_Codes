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
