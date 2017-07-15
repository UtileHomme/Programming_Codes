$.ajax({
  url: 'users.php'+'&callback=?',
  type: 'get',
  dataType: 'json',
  data:
  {
    bla:1
  },
  success: function(data)
  {
    if(data.success==true)
    {
      console.log(data);
    }
  }
});
