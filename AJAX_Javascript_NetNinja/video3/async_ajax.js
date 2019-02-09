window.onload = function()
{
  $.ajax(
    {
      type: "GET",
      url: "../data/tweets.json",
      success: function(data)
      {
        console.log("data returned");
      },
      error: function(jqXHR, textStatus, error)
      {
        console.log(error);
      }

    }
  );
};

console.log("test");