//this is for making a list sortable: by default the list will also be draggable
//containment ensures that the list item doesn't go outside the list
//tolerance ensures that the list gets sorted as soon as the pointer of the second element reaches the first
//cursor changes the pointer type

//connectWith is used for adding items from one list to another
$('#names, #places').sortable({ containment: 'parent', tolerance: 'pointer',cursor: 'pointer',revert: true, opacity:0.6, connectWith: '#names, #places'});
