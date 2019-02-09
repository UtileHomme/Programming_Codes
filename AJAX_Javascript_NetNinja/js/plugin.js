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
