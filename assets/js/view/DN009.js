$(document).ready(function(){
  $('.modal-trigger').leanModal();

  $(document).on("click", ".colitem", function(){
    $(".colitem").removeClass("yellow");
    $(this).toggleClass("yellow");
  });

  $(document).on("click", ".planitem", function(){
    $(".planitem").removeClass("yellow");
    $(this).toggleClass("yellow");
  });
});
