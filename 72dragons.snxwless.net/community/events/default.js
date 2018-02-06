function createBubble(title, established, date, city, country, type, desc) {
  $('#globe').append('<div class="bubble"><div class="bubble-preview"></div><div class="bubble-details">' + date + '</div></div>');
  $('.bubble:last').css({
    'top': ((Math.random() * 100)) + "%",
    'left': ((Math.random() * 100)) + "%"
  });
  //$('.bubble-preview:last').css('background-image', 'url("' + image + '")')
  if (Math.floor(Math.random() * 2)) $('.bubble:last').toggleClass('back');
  var time = calcTime($('.bubble:last')), position;
  position = getPositions($('.bubble:last'));
  
  $('.bubble:last').click(function () {
  	$('#eventInfo').css('left', '-300px');
  	setTimeout(function() {
  	$('#eventTitle').html(title);
  	if (established)
  		 $('#eventTitle').append('<br><small>Est.' + established + '</small>');
  	$('#eventDate').html(date + '<br>' + city + ", " + country + '<br>Type: ' + type);
  	$('#eventDescription').html(desc);
  	$('#eventInfo').css('left', '0px');
  	}, 250);
  });
  
  
  animateBubble($('.bubble:last'), position, time);
  
}

function calcTime(bubble) {
  return ((Math.random() * 30000));
}

function getPositions(bubble) {
  var position = [], width = calcPosition(bubble);
  position.min = 400 - ((width) / 2), position.max = 400 + (( width) / 2);
  //bubble.text("min:" + position.min + " \ max:" + position.max + " \ width:" + width);
  return position;
}

function calcPosition(bubble) {
  var height = Math.abs(parseInt(bubble.css('top')));
  return Math.sqrt(height * (2 * 400 - height )) * 2;
}

function animateBubble(bubble, position, time) {
      if (bubble.hasClass('back'))
      position.left = position.max;
    else
      position.left = position.min;
      $(bubble).animate({ left: position.left + 'px'},{
     easing: 'linear',
     duration: time,
     complete: function(){
        animateBubble(bubble, position, 30000);
         bubble.toggleClass('back');
     }
    });
  
}

function clearBubbles() {
	$('#globe').empty();
}


function search(type, value) {
	clearBubbles();
	$.ajax({
		type: 'post',
		url: '/s140630php/select.php',
		data: {"type":type, "city":value},
		success: function(data) {
		console.log(data);
		
		var data = JSON.parse(data);
			for (var i = 0; i < data.length; i++) {
				console.log(data[i].FESTIVAL, data[i].ESTABLISHED, data[i].DATES, data[i].CITY, data[i].COUNTRY, data[i].TYPE, data[i].NOTES);
				createBubble(data[i].FESTIVAL, data[i].ESTABLISHED, data[i].DATES, data[i].CITY, data[i].COUNTRY, data[i].TYPE, data[i].NOTES);					
				if (i == 16)
					break;		
			}
			
		}
	});
}


$(document).ready(function () {
  
  $('#close').click(function () {
    $('#eventInfo').css('left', '-300px')
  });
  
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
  
});















