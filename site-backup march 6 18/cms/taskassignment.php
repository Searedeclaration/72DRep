<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body {
  padding: 0;
  margin: 0;
  background: black;
  font-family: "Spectral SC", serif;
  overflow: hidden;
}
#rec-container {
  position: relative;
  width: 500px;
  height: 350px;
  margin: 50px auto;
  border: 2px #ad9440 solid;
  transition: width 0.5s, margin 0.5s;
}
.out {
  width: 1000px !important;
}
.largeEditor {
	right: calc(50% - 500px) !important;
	width: 1000px !important;
}
#toggleEdit {
  width: 100px;
  height: 100px;
  position: absolute;
  background-position: center;
  background-size: cover;
  z-index: 10;
  right: 0;
  bottom: 0;
  opacity: 0.5;
  cursor: pointer;
  transition: opacity 0.25s;
}
#toggleEdit:hover {
  opacity: 1;
}
.addTask, .editTask:hover {
  background-image: url(http://72dragons.snxwless.net/images/dragons/dragonscrollpre.png);
}
.editTask, .addTask:hover {
  background-image: url(http://72dragons.snxwless.net/images/dragons/dragonscrollpost.png);
}
.buttonAdd {
    float: right;
  color: #1b1b1b;
    background: #ad9440;
    width: 30px;
    margin: -3px;
    border-left: 1px #ad9440 solid;
    font-size: 20px;
    margin-right: -5px;
    cursor: pointer;
    height: 30px;
}

#taskEditor {
    position: absolute;
    z-index: 2;
    width: 500px;
    border: 2px #ad9440 solid;
    right: -2px;
    top: -2px;
    background: #1b1b1b;
    transition: right 0.5s, width 0.5s;
}

#taskListContainer {
  position: relative;
  width: 500px;
  height: 100%;
  background: #161616;
}
#taskListBar {
    height: 50px;
}
#taskListBar > div{
    display: flex;
}
#taskList {
    position: relative;
    width: 500px;
    height: 244px;
    overflow: auto;
}
#taskListTitle {
  text-align: center;
  color: #ad9440;
  font-size: 36px;
  border-top: 2px #ad9440 solid;
}
.notCurrent {
  display: none !important;
}
.searchUsers input {
  height: 46px !important;
  border: 0 !important;
  border-bottom: 2px #ad9440 solid !important;
  width: 100% !important;
  font-size: 24px !important;
}
.memberAssigned {
    text-align: center;
    padding: 1px 0px;
    border-bottom: 1px #ad9440 solid;
}
.memberAssigned:last-child {
    border-bottom: 0;
}




/*DropDown*/
.choicebar-dropDown {
    width: 50%;
    border-right: 3px #580000 solid;
  border-bottom: 3px #580000 solid;
    position: relative;
  color: #ad9440;
}
.choicebar-dropDown:last-child {
    border-right: 0;
}
.choicebar-dropDown:hover .dropDown-Container {
	height: 200px;
	overflow: auto;
}
.dropDown-option:hover {
     filter: brightness(125%);
}
.dropDown-Face {
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    padding-left: 5px;
    background: #800000;
}
.dropDown-Face:after {
    content: '';
    position: absolute;
    top: 20px;
    right: 5px;
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 10px solid #330000;
}
.dropDown-Container {
    width: 100%;
    height: 0;
    position: absolute;
    transition: height 0.5s;
    overflow: hidden;
    z-index: 100;
}
.dropDown-option {
    background: #800000;
    border-bottom: 2px #580000 solid;
    padding-left: 10px;
    font-size: 13px;
    height: 30px;
    line-height: 30px;
    transition: filter 0.5s;
    cursor: pointer;
}
.dropDown-option:first-child {
    border-top: 3px #580000 solid;
}





/*Input*/
.edit-group {
    color: #ab9440;
    margin: 20px;
    display: flex;
}
.edit-group span {
    background: #1b1b1b;
    border: 1px #ab9440 solid;
    border-right: 0;
    padding: 3px 5px;
    width: 120px;
    text-align: center;
}
input[type=text], input[type=number], input[type=date], textarea {
    border: 1px #ab9440 solid;
    height: 30px;
    background: #161616;
    color: white;
    padding-left: 5px;
    font-family: "Spectral SC", serif;
    width: 150px;
    font-size: 15px;
    resize: none;
    transition: width 0.5s, height 0.5s;
}
input[type=checkbox] {
display: none;
}
.checkbox {
height: 24px;
    width: 24px;
    font-size: 24px;
    padding: 3px;
    background: #1b1b1b;
    border: 1px #ab9440 solid;
    cursor: pointer;
}
.notchecked svg {
    padding-left: 3px;
}
input[type=text]:hover, input[type=number]:hover {
	width: 175px;
}
textarea:hover {
	width: 175px;
	height: 50px;
}
input[type=text]:focus, input[type=number]:focus {
	width: 300px;
	outline: none;
}
input[type=date]:focus {
  outline: none;
}
textarea:focus {
	width: 300px;
	height: 200px;
	outline: none;
}
input[type=submit] {
    border: none;
    background: #161616;
    color: white;
    margin: 10px 20px;
    padding: 10px;
    font-size: 14px;
    transition: background 0.5s;
    cursor: pointer;
    font-family: "Spectral SC", serif;
}
input[type=submit]:hover {
    background: maroon;
}
input[type=submit]:focus {
    outline: none;
}
/*v2*/
.edit-title {
  display: grid;
}
.edit-title span {
    border-right: 1px #ab9440 solid;
    width: 278px;
}
.edit-group .edit-list {
  height: 100px;
  width: 288px;
  background: #161616;
  border: 1px #ab9440 solid;
  border-top: 0;
  overflow: auto;
}






/*Member Search*/
.member-bar {
    width: 450px;
    margin: auto;
    display: flex;
    margin-bottom: 10px;
    padding: 10px;
    height: 100px;
    background: #1b1b1b;
    border: 2px #800000 solid;
    cursor: pointer;
    transition: border-color 0.5s, border-width 0.5s;
}
.member-bar:hover {
	border-color: #ad9440;
}
.member-bar-photo {
    height: 100%;
    width: 100px;
    background-position: center;
    background-size: cover;
}
.member-bar-name {
    font-size: 24px;
    padding: 3px 10px;
    color: #ad9440;
}






#hold {
border: 0;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div id="rec-container">
  <div id="taskEditor" class="largeEditor">
      <div id="toggleEdit" class="addTask"></div>
    <form id="taskForm">
      <div class="edit-group"><span>Task</span><input type="text" class="edit-input" name="taskName"></div>
      <!--bar here -->
      <div class="edit-group"><span>Description</span><textarea class="edit-input" name="taskDesc"></textarea></div>
      <div class="edit-group edit-title"><span>User(s) Assigned <div id="addUser" class="buttonAdd">+</div></span>
        <div class="edit-list">
          
        </div>
      </div>
      <div class="edit-group edit-title"><span><span id="hold">Choose Story</span><div id="chooseStory" class="buttonAdd">+</div></span>
      </div>
      <div class="edit-group"><span>Task Due</span><input type="date" name="taskDue"></div>
      <input id="taskType" type='hidden' name="type" value="add">
      <input type="submit" id="editSubmit" value="Add Task">
    </form>
  </div>
  <div id="taskListContainer">
    <div id="taskListBar">
      <div class="editTasks taskItem notCurrent">
      <div class="choicebar-dropDown" id="saga"><div class="dropDown-Face">Saga</div><div class="dropDown-Container"></div></div>
      <div class="choicebar-dropDown" id="epic"><div class="dropDown-Face">Epic</div><div class="dropDown-Container"></div></div>
      </div>
      
      <div class="searchUsers taskItem notCurrent">
        <input type="text" name="member" placeholder="Enter the User's name here">
      </div>
    </div>
    <div id="taskList">
    </div>
    <div id="taskListTitle">Edit Tasks</div>
  </div>
</div>

<script type="text/javascript">
function reset(clicked, type) {
	$('#taskEditor').removeClass('largeEditor');
	$('#rec-container').removeClass('out');
	  setTimeout(function(){
	$('.taskItem').addClass('notCurrent');
	$('#taskList').empty();
	if(!clicked.hasClass('active'))
		$('.active').removeClass('active');
		  }, 500);
}

$(document).ready(function(){
  $('#toggleEdit').click(function(){
    reset($(this), "edit");

    setTimeout(function(){
    if (!$('#toggleEdit').hasClass('active')) {
    $('#toggleEdit').addClass('active');
    $('#rec-container').addClass('out');
      $('#taskType').val('edit');
      $('#editSubmit').val('Update Task');
      $('.editTasks').removeClass('notCurrent');
    } else {
    	$('#toggleEdit').removeClass('active');
            $('#rec-container').removeClass('out');
      $('#taskType').val('add');
      $('#editSubmit').val('Add Task');
      $('#taskEditor').addClass('largeEditor');
    }
  $('#toggleEdit').toggleClass('addTask').toggleClass('editTask');
  }, 750);
  });
  
  $('#addUser').click(function () {

  reset($(this), "user");

    setTimeout(function(){
    if ($('#addUser').hasClass('active')) {
      $('#addUser').removeClass('active');
      $('#rec-container').removeClass('out');
      $('#taskEditor').addClass('largeEditor');
    } else {
      $('#addUser').addClass('active');
      $('#rec-container').addClass('out');
      $('.searchUsers').removeClass('notCurrent');
      
    }
    }, 750);
  });
  
  $('#chooseStory').click(function () {
  reset($(this), "story");
  setTimeout(function(){
    if ($('#chooseStory').hasClass('active')) {
      $('#chooseStory').removeClass('active');
      $('#rec-container').removeClass('out');
      $('#taskEditor').addClass('largeEditor');
    } else {
      $('#chooseStory').addClass('active');
      $('#rec-container').addClass('out');
      $('.editTasks').removeClass('notCurrent');
    }
    }, 750);
  });
  
  
  $('input:text[name=member]').on("input", function() {
    var memberSearch = this.value;

    if (memberSearch != "")
    $.ajax({
    	type: 'post',
    	url: '/s140630php/membersearch.php',
    	data: {'search':memberSearch},
    	success: function (data) {
    	var data = JSON.parse(data);
    		var name;
    		$('#taskList').empty(); //Had to put this twice because it lags
    	 	for (var img = 0; img < data.length; img++) {
    	 		if (data[img].middleName != null)
    	 		name = data[img].firstName + ' ' + data[img].middleName + ' ' + data[img].lastName;
    	 		else
    	 		name = data[img].firstName + ' ' + data[img].lastName;
    	 		$('#taskList').append('<div class="member-bar" data-memberID="' + data[img].memberID + '"><div class="member-bar-photo" style="background-image: url(/images/members/' + data[img].memberPhoto + ');"></div><div class="member-bar-name">' + name + '</div></div>');
    	 		if (img == 20)
    	 			break;
    	 	}
    	 	
    	 	$('.member-bar').click(function () {
			$('.edit-list').append('<div class="memberAssigned">'+$(this).find(".member-bar-name").text()+'<input type="hidden" name="memberAssigned[]" value="'+$(this).attr("data-memberid")+'"></div>');
		});
    	}
    });
    else
        $('#taskList').empty();
  });
  
  
  
  //listeners for dropdown
  $.ajax({
  	type: 'post',
  	url: '/s140630php/loadStories.php',
  	data: {'storyID':193},
  	success: function (data) {
  		data = JSON.parse(data);
  		for (var i = 0; i < data.length; i++) {
  			$('#saga .dropDown-Container').append('<div onclick="dropDownClick(' + data[i].pageID + ', \'saga\')" class="dropDown-option">' + data[i].page + '</div>');
  		}
  	}
  });
  
  
  
});


function dropDownClick(pageID, type) {
	if (type == 'saga') {
		$('#epic .dropDown-Container').empty();
		$.ajax({
  	type: 'post',
  	url: '/s140630php/loadStories.php',
  	data: {'storyID':pageID},
  	success: function (data) {
  		data = JSON.parse(data);
  		for (var i = 0; i < data.length; i++) {
  			$('#epic .dropDown-Container').append('<div onclick="dropDownClick(' + data[i].pageID + ', \'epic\')" class="dropDown-option">' + data[i].page + '</div>');
  		}
  	}
  });
	} else {
	$('#taskList').empty();
		$.ajax({
  	type: 'post',
  	url: '/s140630php/loadStories.php',
  	data: {'storyID':pageID},
  	success: function (data) {
  		data = JSON.parse(data);
  		for (var i = 0; i < data.length; i++) {
  			$('#taskList').append('<div onclick="setStory(' + data[i].pageID + ', \'' + data[i].page + '\')" class="dropDown-option">' + data[i].page + '</div>');
  		}
  	}
  });	
	}
}
function setStory(pageID, page) {
	$('#hold').text(page);
}
</script>
</body>
</html>