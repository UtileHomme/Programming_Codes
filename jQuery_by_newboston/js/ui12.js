//this is for making a list sortable: by default the list will also be draggable
//containment ensures that the list item doesn't go outside the list
//tolerance ensures that the list gets sorted as soon as the pointer of the second element reaches the first
//cursor changes the pointer type
//revert moves the element to original state
//connectWith ensures that we can sort from one list to another
//update allows us to raise an event once we try to sort some list

//connectWith is used for adding items from one list to another
$('#names, #places').sortable({ containment: 'document', tolerance: 'pointer',cursor: 'pointer',revert: true, opacity:0.6, connectWith: "#names, #places", update: function()
    {
        content = $(this).text();
        $('#sort_status').text(content);
    }

});
