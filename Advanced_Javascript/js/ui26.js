
$('#tabs').tabs({ ajaxOptions: {error: function(xhr, index, status, anchor)
{
    $(anchor.hash).text('Could not load page')
}
//to set the expiry time (in days)
}, cookie: { expires: 2 }});
