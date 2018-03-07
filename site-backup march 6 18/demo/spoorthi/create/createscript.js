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
      color: "#ad9440"
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
    $('footer').css({
      opacity: "1"
    });
    $('header').css({
      'border-bottom': "1px rgb(173, 148, 64) solid"
    });
  }, 1500);