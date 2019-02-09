$('#button').click(function()
{
    var string = $('#string').val();
    // alert(string);
    //we are retrieving the data from the file and displaying it on our page
    //the page that we want to send the data to, list of variables we wish to send, callback function
    $.get('php/reverse.php',{ input: string }, function(data)
    {
        $('#feedback').text(data);
    }
 );
}
);
