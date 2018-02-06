$(document).ready(function () {
  setTimeout(function () {
      $('#uncover').animate({
    width: "100%"
  }, 1000);
  }, 500);
  setTimeout(function () {
    $('#fontred').css({
      color: "maroon"
    });
    $('#title').css({
      color: "white"
    });
    $('#uncover').css({
      opacity: "0"
    });
    $('nav ul li').css({
      opacity: "1"
    });
    $('#icon').css({
      opacity: "1"
    });
    $('#movieList').css({
      opacity: "1"
    });
    $('footer').css({
      opacity: "1"
    });
    $('header').css({
      'border-bottom': "1px gold solid"
    });
  }, 1500);
});