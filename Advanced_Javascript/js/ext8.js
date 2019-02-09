$(document).ready(function()
{
  $('.duplicate').on('click','.duplicate',function()
       {
         $(this).after('<input class="duplicate" type="button" value="Click" />');
       }
      );
}
);
