$('#tabs').tabs({ ajaxOptions: {error: function(xhr, index, status, anchor)
{
    $(anchor.hash).text('Could not load page')
}
}, collapsible: true });
