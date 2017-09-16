$('.link').click(function()
    {
        //everytime we click on a link, it will be filled into the dropdown menu
        var item = $(this).text();
        $('#list').append('<option>' + item + '</option>');
    }
);
