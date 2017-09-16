//dateFormat will help us apply the type of format that we want
//minDate helps us choose the point from which we wish to start the date
// "0" starts from the present date
//showButtonPanel shows two buttons "Today" and "Done" to be clicked by the user
//showAnim is for modifying the animation (bounce, fadeIn, empty quotes, show(default))

$('#date').datepicker({dateFormat: 'dd-mm-yy' , minDate: 0, maxDate: '+1m + 2d'
, showButtonPanel: true, showAnim: 'fadeIn'
});
