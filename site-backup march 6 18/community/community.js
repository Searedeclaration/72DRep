  
//create bubbles *pop pop*
function createBubble(content) {
  $('#bubbleArea').append('<div class="bubble">' + content + '</div>');
    $('.bubble:last').css({
      'top': (Math.random() * 80 + 10) + "%",
      'left': (Math.random() * 80 + 10) + "%"
    });
}

$(document).ready(function () {
  var toEnter = [["Leaders", "Forum", "Events", "Projects", "Actors", "Dragons", "World Map", "", "", ""], ["", "", "events/default.php", "", "actors.php", "dragons.php", "default.php", "", "", ""]];
    for (var i = 0; i < 10; i++) {
     createBubble(toEnter[0][i]); 
     $('.bubble:last').wrap(function () {
      return '<a href="' + toEnter[1][i] + '"></a>'
      });
    }
      $('.small').click(function () {
        $(this).toggleClass('large').toggleClass('small');
      });
      
      
      
      $("#bubbleArea").mousemove(function( event ) {
  var cursorX = event.pageX, cursorY = event.pageY;
  //var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";
  $('.bubble').each(function () {
    var bubble = [], base = [];
    bubble.maxwidth = 300;
    bubble.pageX = $(this).offset().left + $(this).width()/2, bubble.pageY = $(this).offset().top + $(this).height()/2;
    //calc width
    if (bubble.pageX <= cursorX) {
      base.X = ((bubble.pageX / $(window).width()) / (cursorX / $(window).width()))
      bubble.width = (base.X * bubble.maxwidth) / 2;
    } else {
      base.X = ((cursorX / $(window).width()) / (bubble.pageX / $(window).width()))
      bubble.width = (base.X * bubble.maxwidth) / 2;
    }
    
  if (bubble.pageY <= cursorY) {
    base.Y = ((bubble.pageY / $(window).height()) / (cursorY / $(window).height()));
      bubble.height = (base.Y * bubble.maxwidth) / 2;
    } else {
      base.Y = ((cursorY / $(window).height()) / (bubble.pageY / $(window).height()))
      bubble.height = (base.Y * bubble.maxwidth) / 2;
    }
    bubble.fontsize = (36 * (base.Y + base.X) + 16) / 2;
    bubble.size = bubble.height + bubble.width;
    $(this).css({
      'width': bubble.size + "px",
      'height': bubble.size + "px",
      'margin-top': -(bubble.size / 2) + "px",
      'margin-left': -(bubble.size / 2) + "px",
      'font-size': bubble.fontsize + "px",
      'line-height': bubble.size/2 + "px"
    });
  });
});
});