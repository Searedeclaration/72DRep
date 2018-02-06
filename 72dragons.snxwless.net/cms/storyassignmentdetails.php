<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if ($_POST['type'] == 'update') {
$checkboxfix = array($_POST['editMockup'], $_POST['editWebPage'], $_POST['editProgress'], $_POST['editDatabase'], $_POST['editCompleted']);
$count = 0;
foreach ($checkboxfix as $check) {
	if ($check == 'on') {
		$checkboxfix[$count++] = 1;
	} else {
		$checkboxfix[$count++] = 0;
	}
}

$storyUpdate = array($_POST['id'], $_POST['editTitle'], $_POST['editDesc'], $_POST['editPercent'], $checkboxfix[0], $checkboxfix[1], $checkboxfix[2], $checkboxfix[3], $checkboxfix[4]);

        $query = "UPDATE webdevPage SET page = '$storyUpdate[1]', description = '$storyUpdate[2]', hasMockup = '$storyUpdate[7]', hasWeb = '$storyUpdate[4]', inProgress = '$storyUpdate[5]', isComplete = '$storyUpdate[6]', percentComplete = '$storyUpdate[3]', inDatabase = '$storyUpdate[8]' WHERE pageID = '$storyUpdate[0]';";
} else if ($_POST['type'] == 'comment') {
$id = $_POST['id'];
$date = date("Y-m-d");
$comment = $_POST['addComment'];

$query = "INSERT webdevComments(pageID, date, comment) VALUES ('$id', '$date', '$comment');";
} else if ($_POST['type'] == 'accomplishment') {
$id = $_POST['id'];
$date = date("Y-m-d");
$accomplishment = $_POST['addAccomplishment'];
if ($_POST['keyAccomplishment'] == 'on') {
$keyAccomplishment = 'Y';
} else {
$keyAccomplishment = 'N';
}

$query = "INSERT webdevAccomplishments(pageID, date, accomplishment, keyAccomplishment) VALUES ('$id', '$date', '$accomplishment', '$keyAccomplishment');";
}


        if($db->query($query)) {
        echo 'updatesuccessful';
        } else {
        echo 'updatefailed';
        }
        
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<style>
body {
  padding: 0;
  margin: 0;
  background: black;
  font-family: "Spectral SC", serif;
}

#content {
	position: absolute;
	width: 100%;
	z-index: -2;
	height: calc(100% - 101px);
	overflow: hidden;
}

.container {
    position: absolute;
    width: 100%;
    margin: auto;
    display: flex;
    transition: top 0.5s;
    color: white;
    z-index: 10;
}

.legendContainer {
	top: -100%;
}
.prevContainer {
	top: -100% !important;
}
.sagaContainer, .epicContainer {
	top: 100%;
}
.barContainer {
top: 0 !important;
}
.currentContainer {
    top: calc(50% - 100px);
}
.legend {
	position: relative;
    border: 3px #ad9440 solid;
    text-align: center;
    width: 200px;
    height: 200px;
    margin: auto;
    background: #161616;
  border-radius: 100%;
  margin-top: 0;
  cursor: pointer;
  transition: width 0.25s, height 0.25s, margin-top 0.25s;
}
.legend:hover, .legend-active {
  width: 250px;
  height: 250px;
  margin-top: -25px;
}
.legend-edit {
	border-radius: 0 !important;
	width: inherit !important;
	height: 50px !important;
	margin-top: 0 !important;	
	overflow: hidden !important;
}
.legend-edit span {
	line-height: 50px !important;
}
.legend-edit .legend-Add-Control {
	transform: rotate(45deg);
	color: #800000 !important;
}
.hiddenLegend {
	width: 0 !important;
	border: 0 !important;
}
.legend-title {
    height: 100%;
    border-radius: 100%;
    width: 100%;
    overflow: hidden;
}
.legend span, .legend-Add-Control {
    font-size: 24px;
    color: #ad9440;
    line-height: 200px;
    transition: line-height 0.5s, font-size 0.5s;
}
.legend-active span{
  font-size: 32px;
}
.legend:hover span, .legend-active span {
	line-height: 250px;
}
.controls {
    width: 0;
    height: 0;
    bottom: 0;
    position: absolute;
}
.controls svg {
    margin-top: 6px;
}
.controls div {
  position: absolute;
  border-radius: 100%;
  height: 40px;
  width: 40px;
  border: 2px #800000 solid;
  color: white;
  background: black;
  font-size: 28px;
  z-index: -1;
  top: -100px;
  left: 100px;
  display: block;
  line-height: 40px;
  font-family: 'Open Sans', sans-serif !important;
  transition: top 0.25s, left 0.25s, color 0.5s;
}
.controls div:hover {
	color: #800000;
}
.legend-active .view {
    top: -310px;
    left: 103px;
}
.legend-active .edit {
    top: -295px;
    left: 159px;
}
.legend-active .add {
    top: -265px;
    left: 206px;
}
.remove {
  transform: rotate(45deg);
}
.legend-active .remove {
    top: -295px;
    left: 48px;
}
.legend-active .about {
    left: 1px;
    top: -265px;
}
.legend-active .comment {
    top: -223px;
    left: -34px;
    display: none;
}
.legend-active .accomplishment {
    top: -223px;
    left: 240px;
    display: none;
}
.legend-Add div{
    font-size: 50px !important;
    position: relative;
    top: calc(50% - 25px);
    transition: color 0.5s, transform 0.5s;
}
.legend-close {
	width: 50px !important;
}

#dragon {
	position: absolute;
	width: 300px;
	height: 300px;
	z-index: 100;
	background-image: url(/images/dragon5.gif);
	background-size: cover;
	background-position: center;
	bottom: -350px;
	left: calc(50% + 50px);
	cursor: pointer;
	transition: bottom 0.5s;
}
.dragon-hover {
	animation: hover 2s linear infinite;
	}
@keyframes hover {
	25% {bottom: -10px;}
	75% {bottom: 5px;}
}
#dragon-message {
	position: absolute;
	width: 400px;
	height: 150px;
	background: #1b1b1b;
	left: -400px;
    	border: 1px #ad9440 solid;
    	padding: 10px;
    	color: white;
}
#back {
    left: calc(50% - 15.75px);
    height: 36px;
    width: 31.5px;
    position: absolute;
    color: white;
    top: 0;
    background: black;
    font-size: 36px;
    display: none;
    cursor: pointer;
    transition: color 0.25s;
}
#back:hover {
    color: #800000;
}
#edit {
position: relative;
width: 100%;
    height: calc(100% - 56px);
    top: -100%;
    display: flex;
    border-top: 3px #ad9440 solid;
    transition: top 0.5s;
}
#sideBar {
width: 300px;
    position: relative;
    height: 100%;
    border-right: 3px #ad9440 solid;
    overflow: auto;
}
.sideBar-box {
    border-bottom: 2px #ad9440 solid;
    color: #ad9440;
    background: black;
    font-size: 22px;
    text-align: center;
    padding: 5px;
    cursor: pointer;
    transition: background 0.5s, font-size 0.5s;
}
.sideBar-box:hover {
font-size: 24px;
    background: #1b1b1b;
}
#editContent {
    position: relative;
    display: flex;
    width: calc(100% - 303px);
}
#edit-right {
	width: inherit;
}
#addComment {
    border-bottom: 1px #ad9440 solid;
    padding: 50px;
}
#addAccomplishment {
    padding: 50px;
}
#addAccomplishment span {
	width: 180px !important;
}
#editForm {
width: 500px;
    border-right: 1px #ad9440 solid;
}
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
input[type=text], input[type=number], textarea {
    border: 1px #ab9440 solid;
    height: 28px;
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
textarea:focus {
	width: 300px;
	height: 200px;
	outline: none;
}
input[type=submit] {
    border: none;
    background: #1b1b1b;
    color: white;
    margin-left: 20px;
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
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<div id="content">
  <div id="back"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
  <div class="legendContainer container currentContainer">
    <div class="legend">
      <div class="controls">
        <div class="view"><i class="fa fa-eye"></i></div>
      	<div class="edit"><i class="fa fa-pencil-alt"></i></div>
        <div class="add"><i class="fa fa-plus"></i></div>
        <div class="remove"><i class="fa fa-plus"></i></div>
        <div class="about"><i class="fa fa-question"></i></div>
        <div class="comment"><i class="fa fa-comment" aria-hidden="true"></i></div>
        <div class="accomplishment"><i class="fa fa-trophy" aria-hidden="true"></i></div>
      </div>
      <div class="legend-title" data-id="193"><span>Website</span></div>
      </div>
    <div class="legend">
      <div class="controls">
        <div class="view"><i class="fa fa-eye"></i></div>
      	<div class="edit"><i class="fa fa-pencil-alt"></i></div>
        <div class="add"><i class="fa fa-plus"></i></div>
        <div class="remove"><i class="fa fa-plus"></i></div>
        <div class="about"><i class="fa fa-question"></i></div>
        <div class="comment"><i class="fa fa-comment" aria-hidden="true"></i></div>
        <div class="accomplishment"><i class="fa fa-trophy" aria-hidden="true"></i></div>
      </div>
      <div class="legend-title"><span>Production</span></div>
      </div>
    <div class="legend">
      <div class="controls">
        <div class="view"><i class="fa fa-eye"></i></div>
      	<div class="edit"><i class="fa fa-pencil-alt"></i></div>
        <div class="add"><i class="fa fa-plus"></i></div>
        <div class="remove"><i class="fa fa-plus"></i></div>
        <div class="about"><i class="fa fa-question"></i></div>
        <div class="comment"><i class="fa fa-comment" aria-hidden="true"></i></div>
        <div class="accomplishment"><i class="fa fa-trophy" aria-hidden="true"></i></div>
      </div>
      <div class="legend-title"><span>Gallery</span></div>
      </div>
    <div class="legend legend-Add"><div class="legend-Add-Control"><i class="fa fa-plus"></i></div></div>
  </div>
  <div class="sagaContainer container">
  	<?php
		$loadSampleData = "SELECT pageID, page FROM webdevPage WHERE parent = '193'";
		$result = mysqli_query($db,$loadSampleData);
  		while($data = mysqli_fetch_array($result)) {
  			echo '<div class="legend"><div class="controls"><div class="view"><i class="fa fa-eye"></i></div><div class="edit"><i class="fa fa-pencil-alt"></i></div><div class="add"><i class="fa fa-plus"></i></div><div class="remove"><i class="fa fa-plus"></i></div><div class="about"><i class="fa fa-question"></i></div><div class="comment"><i class="fa fa-comment" aria-hidden="true"></i></div><div class="accomplishment"><i class="fa fa-trophy" aria-hidden="true"></i></div></div><div class="legend-title" data-id="'.$data[0].'"><span>'.$data[1].'</span></div></div>';
  		}
  	?>
  </div>
  <div class="epicContainer container"></div>
  <div id="edit">
  <div id="sideBar"></div>
  <div id="editContent">
  <iframe id="norefresh" name="norefresh" style="display:none;"></iframe>
  	<form id="editForm" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off" target="norefresh">
  	<input type="hidden" name="id" value="">
  	<input type="hidden" name="type" value="update">
  	<div class="edit-group"><span>Title</span><input type="text" class="edit-input" name="editTitle"></div>
  	<div class="edit-group"><span>Description</span><textarea class="edit-input" name="editDesc"></textarea></div>
  	<div class="edit-group"><span>% Complete</span><input type="number" class="edit-input" name="editPercent" min="0" max="100"></div>
  	<div class="edit-group"><span>Has Mockup</span><div class='checkbox'></div><input type="checkbox" class="edit-input" name="editMockup"></div>
  	<div class="edit-group"><span>Has Web Page</span><div class='checkbox'></div><input type="checkbox" class="edit-input" name="editWebPage"></div>
  	<div class="edit-group"><span>In Progress</span><div class='checkbox notchecked'></div><input type="checkbox" class="edit-input" name="editProgress"></div>
  	<div class="edit-group"><span>In Database</span><div class='checkbox'></div><input type="checkbox" class="edit-input" name="editDatabase"></div>
  	<div class="edit-group"><span>Completed</span><div class='checkbox'></div><input type="checkbox" class="edit-input" name="editCompleted"></div>
  	<input type="submit" id="editSubmit" value="Update">
  	</form>
  	
  	<div id="edit-right">
  		<div id="addComment">
  			<form id="editAddComment" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off" target="norefresh">
  			<input type="hidden" name="id" value="">
  			<input type="hidden" name="type" value="comment">
  			 <div class="edit-group"><span>Comment</span><textarea class="edit-input" name="addComment"></textarea></div>
  			 <input type="submit" id="commentSubmit" value="Add Comment">
  			</form>
  		</div>
  		<div id="addAccomplishment">
  			<form id="editAddAccomplishment" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off" target="norefresh">
  			<input type="hidden" name="id" value="">
  			<input type="hidden" name="type" value="accomplishment">
  			 <div class="edit-group"><span>Accomplishment</span><textarea class="edit-input" name="addAccomplishment"></textarea></div>
  			 <div class="edit-group"><span>Key Accomplishment</span><div class='checkbox notchecked'><i class="fa fa-times" aria-hidden="true"></i></div><input type="checkbox" class="edit-input" name="keyAccomplishment"></div>
  			 <input type="submit" id="accomplishmentSubmit" value="Add Accomplishment">
  			</form>
  		</div>
  	</div>
  </div>
  </div>
  <div id="dragon"><div id="dragon-message">This is a test message. The real message will be kept in an array and pulled based off the index of the clicked item.</div></div>
</div>


<script type="text/javascript">
$(document).ready(function () {
	setUp('.legendContainer');
	setUp('.sagaContainer');



	$('#back').click(function(){
	if ($('.currentContainer').hasClass('sagaContainer')) {
			$('.legendContainer').toggleClass('currentContainer').toggleClass('prevContainer');
			$('.sagaContainer').toggleClass('currentContainer');
			$('#back').fadeOut();
	} else if ($('.currentContainer').hasClass('epicContainer')) {
			$('.sagaContainer').toggleClass('currentContainer').toggleClass('prevContainer');
			$('.epicContainer').toggleClass('currentContainer');
	}
	$('.legend-Add').appendTo('.currentContainer');
	$('.legend-active').toggleClass('legend-active');
	});
	
	$('.checkbox').click(function() {
		if($(this).siblings('input[type=checkbox]').prop('checked') == true) {
			$(this).siblings('input[type=checkbox]').prop('checked', false);
			$(this).addClass('notchecked').empty();/*.html('<i class="fa fa-times" aria-hidden="true"></i>');*/
		} else {
			$(this).siblings('input[type=checkbox]').prop('checked', true);
			$(this).removeClass('notchecked').html('<i class="fa fa-check" aria-hidden="true"></i>');
		}
	}); //frame.find('body').text().indexOf("updatesuccessful") >= 0
	
	$('form').submit(function () {
		var timeout = 0;
		var checkSuccess = setInterval(function () {
		try {
			if ($('#norefresh').contents().find('body').text().indexOf("updatesuccessful") >= 0) {
				clearInterval(checkSuccess);
				alert('Update Successful');
			} else if ($('#norefresh').contents().find('body').text().indexOf("updatefailed") >= 0) {
				clearInterval(checkSuccess);
				alert('Update Failed');
			} else if (timeout >= 30) {
				clearInterval(checkSuccess);
				alert('The Update Has Timedout');
			}
					}
		catch(err) {
			alert('Update Failed - No Internet Connection');
			clearInterval(checkSuccess);
		}
			timeout++;
			console.log(timeout);
		}, 1000);
	});
	
});

function setUp(container) {

	//buttons
	$(container + ' .add').click(function(){

	});
	$(container + ' .edit').click(function(){
		$('.currentContainer').toggleClass('barContainer');
		$('.legend:not(.legend-active):not(.legend-Add)').addClass('hiddenLegend');
		$('.legend').addClass('legend-edit');
		$('.legend-Add').addClass('legend-close');
		$('#edit').css('top', '53px');
		$('.legend-close').click(function(){
			$('.barContainer').toggleClass('barContainer');
			$('#edit').css('top', '-100%');
			$('.legend:not(.legend-active):not(.legend-Add)').removeClass('hiddenLegend');
			$('.legend').removeClass('legend-edit');
			$('.legend-Add').removeClass('legend-close');
		});
		
		//Load Data
		var id = $(this).parent().siblings('.legend-title').attr('data-id');
		$.ajax({
			type: 'post',
			url: '/s140630php/getChildren.php',
			data: {'id':id},
			success: function (data) {
				data = JSON.parse(data);
				$('#sideBar').empty();
				for (var i = 0; i < data.length; i++) {
					$('#sideBar').append('<div class="sideBar-box" onclick="loadData(' + data[i][0] + ')" data-id="' + data[i][0] + '">' + data[i][1] + '</div>');
				}
		
			}
		});
	});
	$(container + ' .view').click(function(){
		if ($('.currentContainer').hasClass('legendContainer')) {
			$('.legendContainer').toggleClass('currentContainer').toggleClass('prevContainer');
			$('.sagaContainer').toggleClass('currentContainer');
			$('#back').fadeIn();
			$('.legend-Add').appendTo('.currentContainer');
		} else if ($('.currentContainer').hasClass('sagaContainer')) {
			$('.sagaContainer').toggleClass('currentContainer').toggleClass('prevContainer');
			$('.epicContainer').toggleClass('currentContainer');
			
			var id = $(this).parent().siblings('.legend-title').attr('data-id');
			$.ajax({
			type: 'post',
			url: '/s140630php/getChildren.php',
			data: {'id':id},
			success: function (data) {
			console.log(data);
				data = JSON.parse(data);
				$('.epicContainer').empty();
				for (var i = 0; i < data.length; i++) {
					$('.epicContainer').append('<div class="legend"><div class="controls"><div class="edit"><i class="fa fa-pencil-alt"></i></div><div class="add"><i class="fa fa-plus"></i></div><div class="remove"><i class="fa fa-plus"></i></div><div class="about"><i class="fa fa-question"></i></div><div class="comment"><i class="fa fa-comment" aria-hidden="true"></i></div><div class="accomplishment"><i class="fa fa-trophy" aria-hidden="true"></i></div></div><div class="legend-title" data-id="' + data[i][0] + '"><span>' + data[i][1] + '</span></div></div>');
				}
				setUp('.epicContainer');
				$('.legend-Add').appendTo('.currentContainer');
		
			}
			});
		}
	});
	$(container + ' .remove').click(function(){
		var legend = $(this).closest('.legend');
		$(legend).css('overflow', 'hidden');
		$(legend).animate({
			width: '0',
			height: '0',
			'margin-top': '100px'
		}, 500);
		setTimeout(function () {
			$(legend).remove();
		}, 750);
	});
	$(container + ' .about').click(function(){
		if ($('#dragon').hasClass('dragon-hover')) {
			$('#dragon').toggleClass('dragon-hover');
			setTimeout(function(){
				$('#dragon').css('bottom','-350px');
			}, 1);
		} else {
			var id = $(this).parent().siblings('.legend-title').attr('data-id');
			$.ajax({
				type: 'post',
				url: '/s140630php/loadStoryListData.php',
				data: {'id':id},
				success: function (data) {
					data = JSON.parse(data);
					console.log(data);
					$('#dragon-message').text(data[1]);
				}
			});
			$('#dragon').css('bottom','0');
			setTimeout(function(){
				$('#dragon').toggleClass('dragon-hover');
			}, 500);
		}
		

	});
	$(container + ' .comment').click(function(){
	
	});
	$(container + ' .accomplishment').click(function(){
	
	});
	$(container + ' .legend-title').click(function() {
		if($('.legend-active').index && !$(this).closest('.legend').hasClass('legend-active'))
		$('.legend-active').toggleClass('legend-active');
		$(this).closest('.legend').toggleClass('legend-active');
	});
}

function loadData(id) {
$.ajax({
	type: 'post',
	url: '/s140630php/loadStoryListData.php',
	data: {'id':id},
	success: function (data) {
		data = JSON.parse(data);
		$('input[name=id]').val(id);
		for (var i = 0; i < Object.keys(data).length/2; i++) {
			if (i < 3)
				$('#editContent .edit-input').eq(i).val(data[i]);
			else {
				if (data[i] == 1)
					$('#editContent .edit-input').eq(i).prop('checked', true);
				else
					$('#editContent .edit-input').eq(i).prop('checked',false);
			}
		}
		$('input[type=checkbox]').each(function() {
		if($(this).prop('checked') == false)
			$(this).siblings('.checkbox').addClass('notchecked').empty();/*.html('<i class="fa fa-times" aria-hidden="true"></i>');*/
		else
			$(this).siblings('.checkbox').removeClass('notchecked').html('<i class="fa fa-check" aria-hidden="true"></i>');
		
		});
	}
});
}



</script>
</body>
</html>