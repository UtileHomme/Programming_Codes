//ghost will show a shadow for the resizing
//animateDuration gives the speed
//animateEasing decides whether the speed is uniform or distributed
//use aspectRatio without animate attributes
//use grid alone
//handles ensures that we can only resize from specific directions - default is "all" - allows resizing from end of document too

$('#box').resizable({handles: 'e,se', maxHeight: 200, minHeight: 100, maxWidth: 200, minWidth: 100});
