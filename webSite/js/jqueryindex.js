$(document).ready(function(){
    $(".imagen").hide();

    $("#display").click(function(){
      $(".imagen").slideToggle(200);
      $("#message").slideToggle(200);

  });

    $(".imagen").hover(function(){
      $(this).css("background-color", "lightblue");
     }, function(){
      $(this).css("background-color", "white");
    });

});
