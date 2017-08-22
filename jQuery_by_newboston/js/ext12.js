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
