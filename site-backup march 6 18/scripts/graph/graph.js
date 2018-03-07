function createGraph(id, title, pointsArray, dates, titleList) {
  var graph = $('#' + id);
  
  graph.html('<div class="graph-title"></div><div class="graph-yaxis"><ul><li>100</li><li>75</li><li>50</li><li>25</li><li>0</li></ul></div><canvas class="graph-data" id="myCanvas" height="450px" width="408px"></canvas><div class="graph-xaxis"><ul></ul></div><div class="graph-dropDown"></div>');
  
  graph.find('.graph-title').text(title);
  for (var d = dates.length - 1; d > -1; d--) {
  graph.find('.graph-xaxis ul').append('<li>' + dates[d] + '</li>')
  }
  var pos = 0;
  for (var i = 0; i < pointsArray.length; i++) {
    for (var j = 0; j < pointsArray[i].length; j++) {
      if (graph.hasClass('graph-bar'))
        drawBarGraph(graph, pointsArray[i], pos, pointsArray, titleList);
      else if (graph.hasClass('graph-line'))
        drawLineGraph(graph, pointsArray[i], pos, pointsArray, titleList);
    }
    pos++;
  }
  
  
}

function drawBarGraph(graph, points, position, graphData, titleList) {
  var context = graph.find('canvas')[0].getContext('2d');
  var spacingX = 450 / points.length;
  for (var i = 0; i < points.length; i++) {
      context.beginPath();
          if (position) 
      context.fillStyle = '#ad9440';
    else
      context.fillStyle = '#800000';
      context.fillRect(0, (i+1)*spacingX - 50, (points[i] * 408) / 100, 20);
    console.log(position);

  context.stroke();
  }
  
  
  
  graph.find('canvas')[0].onmousemove = function(e) {
      graph.find('.graph-dropDown').show();
      var pos = this.getBoundingClientRect(),
      x = (points.length + 1) - Math.ceil((e.clientX - pos.left) / (450 / points.length)),
      y = 100 - (((e.clientY - pos.top) * 100) / 408),
      i = 0, r;
          graph.find('.graph-dropDown').empty();
      for (var i = 0; i < graphData.length; i++) {
        for (var j = 0; j < graphData[i].length; j++) {
          if (j+1 == x) {
              graph.find('.graph-dropDown').append(titleList[i] + ' - ' + graphData[i][j] + '<br>');
          }
        }
      }
  }
  graph.find('canvas')[0].onmouseout = function (e) {
    graph.find('.graph-dropDown').hide();
  }
}

function drawLineGraph(graph, points, position, graphData, titleList) {
  var context = graph.find('canvas')[0].getContext('2d');
  var spacingX = 450 / points.length;
  for (var i = 0; i < points.length; i++) {
      context.beginPath();
    if (i != 0)
      context.moveTo((points[i-1] * 408) / 100, i*spacingX - 50);
      context.lineTo((points[i] * 408) / 100, (i+1)*spacingX - 50);
      context.lineWidth = 1;

      if (position)
      context.strokeStyle = '#ad9440';
    else
      context.strokeStyle = '#800000';
      context.stroke();
    
    context.arc((points[i] * 408) / 100, (i+1)*spacingX - 50, 3, 0, 2 * Math.PI);
    if (position)
      context.strokeStyle = '#ad9440';
    else
      context.strokeStyle = '#800000';
      context.stroke();
  }
  
  
  
  
  graph.find('canvas')[0].onmousemove = function(e) {
      graph.find('.graph-dropDown').show();
      var pos = this.getBoundingClientRect(),
      x = (points.length + 1) - Math.ceil((e.clientX - pos.left) / (450 / points.length)),
      y = 100 - (((e.clientY - pos.top) * 100) / 408),
      i = 0, r;
          graph.find('.graph-dropDown').empty();
      for (var i = 0; i < graphData.length; i++) {
        for (var j = 0; j < graphData[i].length; j++) {
          if (j+1 == x) {
              graph.find('.graph-dropDown').append(titleList[i] + ' - ' + graphData[i][j] + '<br>');
          }
        }
      }
  }
  graph.find('canvas')[0].onmouseout = function (e) {
    graph.find('.graph-dropDown').hide();
  }
}