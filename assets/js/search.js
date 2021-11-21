// Search functionality

$('#query').on("keyup", function(){
    var value=$(this).val().toLowerCase();
    console.log(value)
    $("article").filter(function(){
        second_value=$(this).html()
        console.log(second_value)
      $(this).toggle($(this).find('h3').text().toLowerCase().indexOf(value)>-1)
  })
})

