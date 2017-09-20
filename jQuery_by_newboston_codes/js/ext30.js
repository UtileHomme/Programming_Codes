$(document).ready(function() {
    $('input[type="file"]').change(function()
    {
        //whenever input type is changed, the parent is the form and it will be submitted
        $(this).parent().submit();
    }
);
});
