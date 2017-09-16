$(document).ready(function()
{
    //find the first "li" in the menu, add class "bold" to it and hide everything after that class
    $('.menu').find('li').first().addClass('bold').click(function()
    {
        $(this).nextAll().toggle();
    }
).nextAll().hide();
});
