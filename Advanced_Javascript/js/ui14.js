//ghost will show a shadow for the resizing
//animateDuration gives the speed
//animateEasing decides whether the speed is uniform or distributed
//use aspectRatio without animate attributes
//use grid alone

$('#box').resizable({ animate: true, animateDuration: 'slow', animateEasing: 'swing', aspectRatio: 9/10,ghost: true, grid: [20,20]});
