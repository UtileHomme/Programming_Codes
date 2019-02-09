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
