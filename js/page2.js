 $('#menu-toggle').click(function(e){
      e.preventDefault();
      $('#wrapper').toggleClass('menuDisplayed');
    });

$(document).ready(function(e){
    $('.hassub').click(function () {
      $(this).toggleClass("tap");
    });
  });