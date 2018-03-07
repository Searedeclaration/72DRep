function setUpGraphs() {
  $(".graph").each(function() {
      $(this).append('<div class="y-axis"></div><div class="graph-right-side"><canvas class="graph-canvas"></canvas><div class="x-axis"></div></div>');
    var can = $(this).find('.graph-canvas')[0], ctx = can.getContext('2d');
    
    can.width = $(this).find('.graph-right-side').width(); //no of points * 200 
    can.height = $(this).find('.graph-right-side').height() - $(this).find('.x-axis').height();
  });
}

function setUpGraph(id, points, xaxis, yaxis) {
  $('#' + id).append('<div class="y-axis"></div><div class="graph-right-side"><canvas class="graph-canvas"></canvas><div class="x-axis"></div></div>');
  
  
    var can = $('#' + id).find('.graph-canvas')[0], ctx = can.getContext('2d');
    can.width = points.length * 200;
    can.height = $('#' + id).find('.graph-right-side').height() - $('#' + id).find('.x-axis').height();
    $('#' + id).find('.x-axis').css('width', can.width + 'px');
   
  setXAxis(id, xaxis);
  
  setYAxis(id, yaxis);
  
  plotGraph(id, points, '#800000');
    
  return can;
}

function setYAxis(graphID, yAxisData) {
  for (var i = yAxisData[0]; i <= yAxisData[1]; i += yAxisData[2])
    $('#' + graphID).find('.y-axis').prepend('<div class="graph-y-block">' + i + '</div>');
  
  $('#' + graphID).find('.graph-y-block').css('margin-bottom', ($('#' + graphID).find('.graph-canvas')[0].height - 11 )/ ((yAxisData[1] - yAxisData[0]) / yAxisData[2]) -  $('#' + graphID).find('.graph-y-block').height() + "px");
}
function setXAxis(graphID, xAxisData) {
  for (var i = 0; i < xAxisData.length; i++)
    $('#' + graphID).find('.x-axis').append('<div class="graph-x-block">' + xAxisData[i] + '</div>');
}

function plotGraph(graphID, yPoints, color) {
  for (var i = 0; i < yPoints.length; i++)
    drawPoint(graphID, i, yPoints[i], color);
}
  
function drawPoint(graphID, x, y, color) {
  var can = $('#' + graphID).find('.graph-canvas')[0], ctx = can.getContext('2d');
  ctx.beginPath();
  ctx.arc(x * 200 + 100,y * (can.height / 100),10,0,2*Math.PI);
  ctx.lineWidth = 5;
  ctx.strokeStyle = color;
  ctx.stroke();
}