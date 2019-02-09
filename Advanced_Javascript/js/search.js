$('#search').keyup(function()
{

    var search_term = $(this).val();

    $.post('php/search.php', { search_term: search_term }, function(data)
    {
        //display the results
        $('#search_results').html(data);
    }
  );
}
);
