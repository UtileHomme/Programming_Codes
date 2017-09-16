$(document).ready(function()
{
  $('.duplicate').click(function()
{
  alert('You have clicked');
  $(this).after('<input type="button" value="Click" class="duplicate" />');
}
);
}
);
