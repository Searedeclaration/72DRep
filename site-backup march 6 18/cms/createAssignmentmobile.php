<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<link href="/scripts/graph.v2/graph.css" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/scripts/graph.v2/graph.js"></script>
<style>
body {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
}
.row {
  display: flex;
  width: 100%;
}
.row-noflex {
  display: block;
}
.cms-title {
    color: black;
    text-align: center;
    width: 100%;
    background: #ad9440;
    font-size: 9vw;
    margin-bottom: -10px !important;
    margin: 10px 0;
}
.cms-hr {
    background: #ad9440;
    width: 100%;
    height: 50px;
    margin: auto;
    text-align: center;
}
.cms-hr img {
    height: 100%;
    filter: brightness(0%);
}
.hr-text {
    background: #1b1b1b;
    color: #ad9440;
    border-top: 3px #800 solid;
    border-bottom: 3px #800 solid;
    font-size: 24px;
    line-height: 50px;
}

input[type=submit] {
    background: #000;
    border: 3px #ad9440 solid;
    color: #ad9440;
    font-size: 5vw;
    padding: 10px;
    font-family: "Spectral SC", serif;
    margin: 30px auto;
    border-radius: 10px;
}

.edit {
  display: none !important;
}

/*mb - Mobile Box*/
.mb {
  font-size: 24px;
  margin: 20px auto;
  border: 3px #ad9440 solid;
  background: #0e0e0e;
  position: relative;
  transition: background 1s;
}
.mb:active {
  background: #1b1b1b;
}
.mb-single {
  width: 90vw;
  min-height: 100px;
}
.mb-double {
  width: 40vw;
  display: inline-block;
}
.mb-triple {
  
}
.mb textarea {
    border: 0;
    width: calc(100% - 6px);
    padding: 0 3px;
    height: 100%;
    resize: none;
    font-family: "Spectral SC", serif;
    background: black;
    font-size: 7vw;
    text-align: center;
    color: white;
}
.mb svg {
    margin-top: 5vw;
}
/*mb basics done*/
/*mb select bar*/
.mb-select {
  background: #1b1b1b;
  height: 100px;
  text-align: center;
  border: 3px #800000 solid !important;
  overflow: hidden;
  transition: height 0.25s;
}
/*.mb-select:before {
content: '';
    position: absolute;
    top: 42%;
    right: 5vw;
    border-left: 3vw solid transparent;
    border-right: 3vw solid transparent;
    border-top: 3vw solid #800;
}
.mb-select:after {
content: '';
    position: absolute;
    top: 42%;
    left: 5vw;
    border-left: 3vw solid transparent;
    border-right: 3vw solid transparent;
    border-bottom: 3vw solid #800;
}*/
.mb-select span {
  color: #ad9440;
  font-size: 10vw;
  line-height: 100px;
}
.mb-select select {
  display: none;
}
.mb-select-window {
    display: inline-block;
    height: 100px;
    width: 100%;
    line-height: 100px;
    color: #ad9440;
    position: relative;
    top: 0;
    transition: top 0.1s;
}
.mb-select-window small {
  line-height: 50px !important;
}
.mb-select-selected {
  height: 500px;
  overflow: auto;
}
/*mb double box*/
.mb-icon-name, .mb-icon-name-select, .mb-icon-name-checkbox {
  height: 40vw;
  color: #ad9440;
  text-align: center;
}
.mb-in-icon {
  height: 31vw;
  font-size: 19vw;
  transition: transform 0.5s, color 0.5s;
}
.mb-in-name {
  font-size: 6vw;
  background: #ad9440;
  color: black;
}
.mb .checked {
    transform: rotateX(180deg);
    color: #ad9440 !important;
}
.mb-icon-name-checkbox .mb-in-icon {
  color: #800000;
}

#popout {
  position: fixed;
  width: 100%;
  height: calc(100% - 51px);
  background: #0e0e0e;
  z-index: 5;
  top: 51px;
  right: -100%;
  overflow: auto;
  transition: right 0.25s;
}
.popout-toggled {
  right: 0 !important;
}
.po-assignee, .po-division {
  margin: 20px 15px;
}
.po-assignee .mb-in-icon {
    background-size: cover;
    background-position: center;
}




/*Table Section*/
#assignmentTable {
    height: calc(100% - 51px);
    position: fixed;
    width: 100%;
    top: 51px;
    background: black;
    left: 100%;
    transition: left 0.25s;
}
.activeTable {
  left: 0 !important;
}
/*Table*/
#at-Table {
    height: calc(100% - 15vw);
    width: 100%;
    overflow: auto;
}
table {
  border-collapse: collapse;
}
th {
    color: #ad9440;
    background: #1b1b1b;
    position: sticky;
    top: -2px;
}
td {
  color: white;
  text-align: center;
  background: black;
  cursor: pointer;
  transition: color 0.25s;
}
th, td {
  border: 1px solid #ad9440;
  padding: 2vw;
  font-size: 4vw;
}
/*Graph*/
.at-graph {
	background: black;
    width: 100%;
    position: absolute;
    height: 149vw;
    top: 0;
}
/*Table Options*/
#at-Options {
    height: 14vw;
    position: absolute;
    bottom: 0;
    width: 100%;
    border-top: 1vw #ad9440 solid;
}
#at-Options ul {
    display: flex;
    padding: 0;
    margin: 0;
    background: #565656;
    height: 100%;
    list-style: none;
}
#at-Options li {
    border-right: 2px #ad9440 solid;
    font-size: 10vw;
    padding: 0 3vw;
}
#closeTable {
  background: maroon;
}
#openTable {
    position: absolute;
    left: -16vw;
    font-size: 7vw;
    top: -2vw;
    background: #1b1b1b;
    color: #ad9440;
    width: 12vw;
    height: 12vw;
    border-radius: 100%;
    border: 3px #800000 solid;
    text-align: center;
}
#openTable svg {
    margin-top: 2vw;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/mobileheader.html';?>
<div id="assignmentCMS">
  <div class="row">
    <div class="cms-title">Create Assignment</div>
  </div>
  <form>
    <div class="row">
     <div class="mb mb-single mb-select" id="weekOf">
      <div class='mb-select-window mb-select-title'>Week Of</div>
      <?php
      	$query = "SELECT DISTINCT weekOf FROM webdevTracking ORDER BY ID DESC;";
	$result = mysqli_query($db,$query);
	while($data = mysqli_fetch_array($result)) {
	  echo "<div class='mb-select-window'>".$data[0]."</div>";
	}
      ?>
      <input type="hidden" name="weekOf">
     </div>
    </div>
    
    <div class="row">
     <div class="mb mb-double mb-icon-name-select" id="ch-Division">
       <div class="mb-in-icon"><i class="fas fa-star"></i></div>
       <div class="mb-in-name">Division</div>
       <input type="hidden" name="division">
     </div>
      
     <div class="mb mb-double mb-icon-name-select" id="ch-Assignee">
       <div class="mb-in-icon"><i class="fas fa-user"></i></div>
       <div class="mb-in-name">Assignee</div>
       <input type="hidden" name="assignee">
     </div>
    </div>
    
    <div class="row">
      <div class="mb mb-single">
        <textarea name="assignment" placeholder="Assignment"></textarea>
      </div>
    </div>

    <div class="row row-noflex">
     <div class="mb mb-single mb-select" id="saga">
      <div class='mb-select-window mb-select-title'>Saga</div>
      <input type="hidden" name="saga">
     </div>
     <div class="mb mb-single mb-select" id="epic">
      <div class='mb-select-window mb-select-title'>Epic</div>
      <input type="hidden" name="epic">
     </div>
     <div class="mb mb-single mb-select" id="story">
      <div class='mb-select-window mb-select-title'>Story</div>
      <input type="hidden" name="story">
     </div>
    </div>
    
    <div class="row">
      <div class="cms-hr"><img src="/images/dragon2.gif"></div>
    </div>
    
    <div class="row web">
     <div class="mb mb-single mb-select" id="category">
      <div class='mb-select-window mb-select-title'>Category</div>
      <div class="mb-select-window">Action Plan</div>
      <div class="mb-select-window">Design pages</div>
      <div class="mb-select-window">Content</div>
      <div class="mb-select-window">Work Assignment</div>
      <div class="mb-select-window">Page Mockups</div>
      <div class="mb-select-window">Development</div>
      <div class="mb-select-window">Strategic plan</div>
      <input type="hidden" name="category">
     </div>
    </div>
    
    <div class="row">
     <div class="mb mb-double mb-icon-name-checkbox" id="ch-planned">
       <div class="mb-in-icon"><i class="fas fa-thumbs-down"></i></div>
       <div class="mb-in-name">Planned?</div>
       <input type="hidden" name="planned" value="0">
     </div>
      
     <div class="mb mb-double mb-icon-name-checkbox" id="ch-newAssignment">
       <div class="mb-in-icon"><i class="fas fa-thumbs-down"></i></div>
       <div class="mb-in-name">New?</div>
       <input type="hidden" name="newAssignment" value="0">
     </div>
    </div>
    
    <div class="row">
      <div class="mb mb-single">
        <textarea name="desc" placeholder="Assignment Description"></textarea>
      </div>
    </div>
    
    <div class="row">
      <div class="cms-hr"><img src="/images/dragon2.gif"></div>
    </div>
    
    <div class="row">
     <div class="mb mb-double mb-icon-name-select" id="ch-time">
       <div class="mb-in-icon"><i class="fas fa-clock"></i></div>
       <div class="mb-in-name">Time Given</div>
       <input type="hidden" name="time">
     </div>
      
     <div class="mb mb-double mb-icon-name-select" id="ch-due">
       <div class="mb-in-icon"><i class="fas fa-calendar-alt"></i></div>
       <div class="mb-in-name">Due</div>
       <input type="hidden" name="due">
     </div>
    </div>
    
    <div class="row edit">
     <div class="mb mb-double mb-icon-name-checkbox" id="ch-onTime">
       <div class="mb-in-icon"><i class="fas fa-thumbs-down"></i></div>
       <div class="mb-in-name">On Time?</div>
       <input type="hidden" name="onTime" value="0">
     </div>
      
     <div class="mb mb-double mb-icon-name-select" id="ch-dateSub">
       <div class="mb-in-icon"><i class="fas fa-calendar-alt"></i></div>
       <div class="mb-in-name">Submitted</div>
       <input type="hidden" name="dateSub">
     </div>
    </div>
    
    <div class="row edit">
     <div class="mb mb-double mb-icon-name-checkbox" id="ch-completed">
       <div class="mb-in-icon"><i class="fas fa-thumbs-down"></i></div>
       <div class="mb-in-name">Completed?</div>
       <input type="hidden" name="completed" value="0">
     </div>
      
     <div class="mb mb-double mb-icon-name-checkbox" id="ch-moreWork">
       <div class="mb-in-icon"><i class="fas fa-thumbs-down"></i></div>
       <div class="mb-in-name">Needs Work?</div>
       <input type="hidden" name="moreWork" value="0">
     </div>
    </div>
    
    <div class="row edit">
     <div class="mb mb-double mb-icon-name-checkbox" id="ch-unfinished">
       <div class="mb-in-icon"><i class="fas fa-thumbs-down"></i></div>
       <div class="mb-in-name">Unfinished?</div>
       <input type="hidden" name="unfinished" value="0">
     </div>
    </div>
    
    <div class="row">
      <div class="cms-hr"><img src="/images/dragon2.gif"></div>
    </div>
    
    <div class="row">
     <div class="mb mb-double mb-select" id="estSP">
      <div class='mb-select-window mb-select-title'><small>Estimated Story Points</small></div>
      <?php
        for ($i = 0; $i < 11; $i++) {
          echo "<div class='mb-select-window'>".$i."</div>";
        }
      ?>
      <input type="hidden" name="estSP">
     </div>
      
     <div class="mb mb-double mb-select edit" id="actSP">
      <div class='mb-select-window mb-select-title'><small>Actual Story Points</small></div>
      <?php
        for ($i = 0; $i < 11; $i++) {
          echo "<div class='mb-select-window'>".$i."</div>";
        }
      ?>
      <input type="hidden" name="actSP">
     </div>
    </div>
    
    <div class="row edit">
      <div class="cms-hr hr-text">Completeness Score: <span>-</span>%</div>
    </div>
    
    <div class="row">
      <input type="submit" value="Create Assignment">
    </div>
  </form>
  <div id="popout"></div>
  <div id="timeContainer" style="display: none; position: fixed; top: calc(50% - 50px); left: 12.5%; background: #1b1b1b; height: 100px; width: 75%; border: 3px maroon solid;">
  	<div id="tc-timeGiven">
  	  
  	</div>
  	<div id="tc-due" style="overflow: hidden;color: white;">
  	  <input type="date" name="dateDue" onchange="showDate($(this).val())" style="width: 25px; margin-left: -13px; margin-right: 5px;">< Click On this button to display the calendar
  	</div>
  </div>
</div>

<div id="assignmentTable">
  <div id="at-Table">
    <table>
      <tbody>
        <tr>
          <th class="assignmentMode">Week Of</th>
          <th class="assignmentMode">Assignment</th>
          <th class="webHeader">Category</th>
          <th class="webHeader">Assignment Type</th>
          <th class="webHeader">New Project</th>
          <th>Planned for the Week</th>
          <th>Saga</th>
          <th>Epic</th>
          <th>Story</th>
          <th class="assignmentMode">Task</th>
          <th class="assignmentMode">Time Allowed</th>
          <th class="assignmentMode">Assigned Person</th>
          <th class="assignmentMode">Date Due</th>
          <th>Actual Date</th>
          <th>On Time</th>
          <th>Completed</th>
          <th>Needs More Work</th>
          <th>Unfinished?</th>
          <th>Accomplishment</th>
          <th class="webHeader">Key Accomplishment</th>
          <th>Comment</th>
          <th>Estimated Story Points</th>
          <th>Actual Story Points</th>
          <th>Completeness Score (%)</th>
        </tr>
        <?php
          $query = "SELECT * FROM webdevTracking ORDER BY ID DESC;";
	  $result = mysqli_query($db,$query);
	  while($data = mysqli_fetch_array($result)) {
	    echo "<tr>";
	    $i = 0;
	    $skip = 0;
	    foreach ($data as $value) {
	     if ($skip == 2) {
	      if ($i == 0) {
	        echo "<td>".$value."</td>";
	        $i++;
	      } else {
	        $i = 0;
	      }
	     } else {
	      $skip++;
	     }
	    }
	    echo "</tr>";
	  }
        ?>
      </tbody>
    </table>
  </div>
  <div class="at-graph">
    
  </div>
  <div id="at-Options">
    <div id="openTable"><i class="fa fa-table"></i></div>
    <ul>
      <li id="closeTable"><i class="fa fa-arrow-left"></i></li>
      <li id="at-options-add"><i class="fa fa-plus"></i></li>
      <li id="at-options-edit"><i class="fa fa-pencil-alt"></i></li>
      <li id="at-options-filter"><i class="fa fa-filter"></i></li>
      <li id="at-options-csv"><i class="fa fa-file-alt"></i></li>
      <li id="at-options-graph"><i class="fa fa-chart-bar"></i></li>
    </ul>
  </div>
</div>


<script type="text/javascript">
var divisionIcons = ['code', 'film', 'users', 'money-bill-alt', 'video', 'shopping-cart', 'database', 'chart-line', 'mobile', 'building'];

$(document).ready(function () {
  
  $('.mb-select').click(function (e) {
    if (!$(this).hasClass('mb-select-selected')) {
    	$(this).addClass('mb-select-selected');
    	$(this).find('.mb-select-title').hide();
    	$(this).find('.mb-select-window').css('top', '0');
    } else if ($(e.target).hasClass('mb-select-window')) {
    	$(this).scrollTop(0);
    	$(this).find('.mb-select-window').css('top', '-' + ($(e.target).index() - 1) + '00px');
    	$(this).removeClass('mb-select-selected');
    	if ($(e.target).parent().attr('id') == "saga" || $(e.target).parent().attr('id') == "epic")
    		loadStorySelect($(e.target).attr('data-id'), $(e.target).parent().attr('id'));
    	
    	if ($(e.target).parent().attr('id') == "saga" || $(e.target).parent().attr('id') == "epic" || $(e.target).parent().attr('id') == "story")
    		$(e.target).parent().find('input').val($(e.target).attr('data-id'));
    	else
    		$(e.target).parent().find('input').val($(e.target).text());
    }
  });
  
  $('.mb-icon-name-select').click(function () {
    $('#popout').addClass('popout-toggled');
    loadPopout($(this).attr('id'));
  });
  
  $('.mb-icon-name-checkbox').click(function () {
    $(this).find('.mb-in-icon').toggleClass('checked');
    $(this).find('input').val(1 - $(this).find('input').val());
  });
  
  $('#ch-due').click(function () {
  	
  });
  
  
  
  
  
  /*Table*/
  
  $('#openTable').click(function () {
    $('#assignmentTable').addClass('activeTable');
    $('body').css('overflow', 'hidden');
  });
  
  $('#closeTable').click(function () {
    $('#assignmentTable').removeClass('activeTable');
    $('body').css('overflow', 'auto');
  });
  
  $('#at-options-add').click(function () {
    $('#assignmentTable').removeClass('activeTable');
    $('body').css('overflow', 'auto');
    $('.edit-mode').addClass('edit').removeClass('edit-mode');
    $('.cms-title').text('Create Assignment');
    $('#assignmentCMS input[type=submit]').val('Create Assignment');
  });
  
  $('#at-options-edit').click(function () {
    $('#assignmentTable').removeClass('activeTable');
    $('body').css('overflow', 'auto');
    $('.edit').addClass('edit-mode').removeClass('edit');
    $('.cms-title').text('Edit Assignment');
    $('#assignmentCMS input[type=submit]').val('Update Assignment');
  });
  
  
  
  $('#at-options-graph').click(function () {
  	
  });
  
});

function loadStorySelect(storyID, type) {
 console.log("Loading StoryID: " + storyID);
 if (type == 'legend')
 	type = 'saga';
 else if (type == 'saga')
 	type = 'epic';
 else if (type == 'epic')
 	type = 'story';
  $.ajax({
    type: 'post',
    url: '/s140630php/getChildren.php',
    data: {'id': storyID},
    success: function (data) {
      data = JSON.parse(data);
      $('#' + type).empty();
      $('#' + type).append("<div class='mb-select-window'>" + type.charAt(0).toUpperCase() + type.slice(1) + "</div>");
      for (var i = 0; i < data.length; i++) {
        $('#' + type).append("<div class='mb-select-window' data-id='" + data[i].pageID + "'>" + data[i].page + "</div>");
      }
      $('#' + type).append("<input type='hidden' name='" + type + "'>");
    }
  });
}

function loadPopout(sourceID) {
  switch (sourceID) {
    case 'ch-Division':
     $.ajax({
      type: 'post',
      url: '/s140630php/loadStoryByType.php',
      data: {'type': 'Legend'},
      success: function (data) {
      	data = JSON.parse(data);
       for (var i = 0; i < data.length; i++) {
        $('#popout').append('<div class="mb mb-double mb-icon-name-select po-division" id="ch-Division"><div class="mb-in-icon"><i class="fas fa-' + divisionIcons[i] + '"></i></div><div class="mb-in-name">' + data[i].page + '</div><input type="hidden" name="division" value="' + data[i].pageID + '"></div>').find('.po-division:last').click(function() {
          $('#ch-Division').remove();
          $('#ch-Assignee').closest('.row').prepend($(this));
          $('#popout').removeClass('popout-toggled').empty();
          
          loadStorySelect($(this).find('input').val(), 'legend');
          
          $('.po-division').attr('id', 'ch-Division').css('margin', '20px auto').off().click(function () {
             $('#popout').addClass('popout-toggled');
             loadPopout($(this).attr('id'));
           });
        });
       }
      }
      });
      break;
    case 'ch-Assignee':
      $.ajax({
        type: 'post',
        url: '/s140630php/assignments/loadStaff.php',
        success: function (data) {
        	data = JSON.parse(data);
        	for (var i = 0; i < data.length; i++) {
        		$('#popout').append('<div class="mb mb-double mb-icon-name-select po-assignee"><div class="mb-in-icon"></div><div class="mb-in-name">' + data[i].name.split(" ")[0] + '</div><input type="hidden" name="assignee" value="' + data[i].ID + '"></div>').find('.po-assignee:last .mb-in-icon').css('background-image', 'url(' + data[i].profile + ')').parent().click(function () {
          			$('#ch-Assignee').remove()
          			$('#ch-Division').closest('.row').append($(this));
          			$('#popout').removeClass('popout-toggled').empty();
          			$('.po-assignee').attr('id', 'ch-Assignee').css('margin', '20px auto').off().click(function () {
          				$('#popout').addClass('popout-toggled');
             				loadPopout($(this).attr('id'));
           			});
        		});
        	}
        }
      });
      break;
  }
}

function showDate(val) {
	
}
</script>
</body>
</html>