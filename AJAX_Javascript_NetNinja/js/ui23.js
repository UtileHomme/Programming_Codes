$('#tabs').tabs({ ajaxOptions: {error: function(xhr, index, status, anchor)
{
    $(anchor.hash).text('Could not load page')
}
// Hovering over the tab displays its content
}, event:'mouseover'});
