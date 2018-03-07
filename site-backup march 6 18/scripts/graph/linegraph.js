function createGraph(id, title, data, dates) {
  var graph = $('#' + id);
  
  graph.append('<div class="graph-title"></div><div class="graph-yaxis"><ul><li>100</li><li>75</li><li>50</li><li>25</li><li>0</li></ul></div><canvas class="graph-data" height="450px" width="408px"></canvas><div class="graph-xaxis"><ul></ul></div>');
  
  graph.find('.graph-title').text(title);
  for (var d = dates.length - 1; d > -1; d--) {
  graph.find('.graph-xaxis ul').append('<li>' + dates[d] + '</li>')
  }
  
  for (var i = 0; i < data.length; i++) {
    for (var j = 0; j < data[i].length; j++) {
      drawGraph(graph, data[i]);
    }
  }
  
  
}

function drawGraph(graph, points) {
  var context = graph.find('canvas')[0].getContext('2d');
  var color = getRandomColor(), spacingX = 450 / points.length;
  for (var i = 0; i < points.length; i++) {
      context.beginPath();
    if (i != 0)
      context.moveTo((points[i-1] * 408) / 100, i*spacingX - 50);
      context.lineTo((points[i] * 408) / 100, (i+1)*spacingX - 50);
      context.lineWidth = 1;

      // set line color
      context.strokeStyle = color;
      context.stroke();
      
      context.arc((points[i] * 408) / 100, (i+1)*spacingX - 50, 3, 0, 2 * Math.PI);
      context.strokeStyle = color;
      context.stroke();
  }
}


function getRandomColor() {
                var letters = '6789ABCDEF'.split('');
                var color = '#';
                for (var i = 0; i < 6; i++ ) {
                    color += letters[Math.floor(Math.random() * letters.length)];
                }
                return color;
}