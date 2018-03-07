function graph(graphID, x, y, increment, data, labels) {
  graphID = '#' + graphID;
  createGraph(graphID);
  addAxis(graphID, x, y, increment);
  //addLabel(graphID, labels);
  addData(graphID, data, labels, x[1]);
}

function createGraph(graphID) {
  $(graphID).html('<div class="graph-x"></div><div class="graph-y"></div><div class="graph-area"><div class="graph-area-popup"></div></div><div class="graph-labels"><div class="graph-labels-box"><ul></ul></div></div><div class="graph-extra"></div>');
}

function addAxis(graphID, x, y, increment) {
  for (var i = increment; i < x[1]+1; i += increment)
    $(graphID + ' .graph-x').append('<span>' + i + '</span>');
 
    for (var j = 0; j < y.length; j++)
    $(graphID + ' .graph-y').append('<span>' + y[j] + '</span>');
}

function addLabel(graphID, labels) {
  for (var i = 0; i < labels.length; i++) {
    $(graphID + ' .graph-labels-box ul').append('<li><div style="background: ' + labels[i][1] + '"></div>' + labels[i][0] + '</li>');
  }
}

function addData(graphID, data, labels, limit) {
  for (var i = 0; i < data[0].length; i++) {
    $(graphID + ' .graph-area').append('<div class="graph-area-barcontainer"></div>');
    for (var j = 0; j < data.length; j++) {
      $(graphID + ' .graph-area-barcontainer').eq(i).append('<div style="background: ' + labels[j][1] + '; width: ' + (data[j][i] / limit) * 100 + '%" data-city="' + labels[j][0] + '" data-value="' + data[j][i] +'" class="graph-area-bar"></div>');
    }
  }
  
  $(graphID + ' .graph-area-bar').mouseover(function () {
    $(graphID + ' .graph-area-popup').css({
      'left': $(this).width() + $(this).position().left + 10,
      'top': $(this).position().top - 13.5
    }).show().html('<div class="close"></div><div class="popup-title">' + $(this).attr('data-value') + '</div><div class="popup-value">' + $(this).attr('data-city') + '</div><div class="popup-eventlist"></div>');
      $('.close').click(function () { 
  $('.popup-keep').toggleClass('popup-keep');
  });
    for (var i = 0; i < $(this).attr('data-value'); i++) {
      $(graphID + ' .popup-eventlist').append('<div class="event">87 North Lane<br> ' + $(this).attr('data-city') + '<br>' + $(this).attr('data-value') + ' attendees<br>Community Sponser: Nike<br>Date: 01/02/18<br>Additional information about event here</div>');
    }
  }).mouseout(function () {
    $(graphID + ' .graph-area-popup').hide();
  }).click(function () {
    $(graphID + ' .graph-area-popup').toggleClass('popup-keep').find('.popup-value').append(' events');
  });
  
  

}