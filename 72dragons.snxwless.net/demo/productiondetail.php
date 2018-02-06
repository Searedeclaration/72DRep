<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
session_start();
// Store Session Data
$_SESSION['login_ID'] = '0';
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
  margin: 0;
  padding: 0;
  background: black;
  font-family: "Spectral SC", serif;
}

#container {
  margin: auto;
  width: 1000px;
}
#mainTitle {
  text-align: center;
  color: #ad9440;
  font-size: 70px;
}
#mainContent {
  width: 100%;
  height: auto;
  display: grid;
  padding: 50px;
  grid-template-columns:310px 310px 310px;
}
.box:first-child {
  margin-top: 0;
}
.box {
  border: 5px #1b1b1b solid;
  margin: 20px 0px;
  width: 600px;
  height: 200px;
}
.small {
  width: 290px !important;
}
.large {
  width: 910px !important;
}
.box-title {
  background: #161616;
    font-size: 24px;
    text-align: center;
  color: #ad9440;
}
.box-content {
  background: black;
padding: 10px;
    height: 144px;
    overflow: auto;
  text-align: justify;
}

#desc {
  border: 0;
  background: black;
  resize: none;
  color: white;
  width: 100%;
  height: 100%;
  font-size: 16px;
  font-family: "Spectral SC", serif;
}
#desc:focus, input[type=text]:focus, .list textarea:focus {
  outline: none;
    border-color: maroon;
}
.inputLine {
  display: flex;
  width: 100%;
}
.addInput {
    background: #343436;
    width: 35px;
    height: 29px;
    text-align: center;
    /* margin-left: 6px; */
    font-size: 24px;
    padding-top: 6px;
    cursor: pointer;
    transition: background 0.25s;
}
.addInput:hover {
	background: #800000;
}
input[type=text] {
    /*
    margin: 0;
    padding: 0;
    margin-bottom: 5px;
    padding-left: 5px;
    border: 0;
    color: white;
    font-size: 16px;
    height: 24px;
    border-bottom: 1px #ad9440 solid;
    background: black;
    */
  display: block;
  margin: auto;
  margin-bottom: 5px;
  height: 35px;
  width: calc(100% - 30px);
  border: 0;
  border-left: 5px #343436 solid;
  background-color: #1b1b1b;
  color: #FFF;
  padding: 0 5px;
  font-size: 16px;
  transition: border-color 0.5s;
font-family: "Spectral SC", serif;
}
 .button {
  background: #161616;
  width: 100%;
  margin: 5px 0px;
  text-align: center;
  color: #565656;
  cursor: pointer;
  transition: filter 0.25s;
}
.button:hover {
  filter: brightness(120%);
}
.doc {
  background: #565656;
  width: 100%;
  margin: 5px 0px;
  text-align: center;
  color: #161616;
}
.doc-controls {
  float: right;
  padding: 4px 5px;
  display: flex;
}
.doc-controls .control {
  margin: 0px 4px;
  transition: color 0.25s;
  cursor: pointer;
}
.doc-controls .control:hover {
  color: #ad9440;
}
.doc-controls-accept {
  color: #ad9440;
}

/*List*/
.list .box-content {
	padding: 0;
	height: 164px;
	display: flex;
}
.list-column {
	display: flex;
	width: 300px;
	border-right: 5px #161616 solid;
	background: black;
    	overflow: auto;
    	height: 100%;
	transition: width 0.5s;
}
.active {
	width: 100% !important;
}
.list-column:last-child {
	border-right: 0;
}
.list-hidden {
	width: 0 !important;
	border-right: 0 !important;
}
.list-itemList {
    width: 300px;
}
.active .list-itemList {
    overflow: auto;
}
.list-item {
    text-align: center;
    color: #ad9440;
    border-bottom: 2px black solid;
    cursor: pointer;
    display: flex;
}
.list-item:last {
    border-bottom: 0;
}
.list-item-title {
    width: 276px;
    background: #0e0e0e;
    transition: filter 0.25s;
}
.list-item-title:hover {
    filter: brightness(150%);
}
.list-column-title {
	position: sticky;
	top: 0;
	z-index: 5;
	cursor: default;
}
.addItem {
	float: right;
	margin: 4px;
        width: 16px;
        cursor: pointer;
}
.column-title {
 	width: 300px;
 	background: #1f1f1f;
}

.list-item-settings {
    float: right;
    background: #1e1e1e;
    padding: 4px;
    transition: filter 0.25s;
}
.list-item-settings:hover {
    filter: brightness(150%);
}
.list-settings {
	width: 0px;
	background: #0e0e0e !important;
	display: flex;
	overflow: hidden;
	transition: width 0.5s;
}
.active .list-settings {
	    width: 605px;
}
.list-settings-tabs {
    width: 35px;
    height: 100%;
        background: #1b1b1b;
        border-left: 1px #ad9440 solid;
        
}
.list-tab, .list-settings-back, .list-settings-save {
    height: 23px;
    width: 25px;
    font-size: 23px;
    padding: 5px;
    cursor: pointer;
    text-align: center;
    color: #565656;
    transition: color 0.25s;
}
.list-tab:hover {
	color: #ad9440;
}
.list-settings-back:hover {
	color: #800000;
}
.list-settings-save {
	color: black;
}
.unsaved {
	color: #800000 !important;
}
.list-tabCon {
	display: none;
	position: relative;
}
.list-settings-tabContents {
	width: 100%;
	height: 100%;
}
.tab-active {
	background: #0e0e0e;
	color: #ad9440;
}
.tabCon-active {
	display: block;
}
.list-tabCon textarea{
    width: calc(100% - 30px);
    margin: 7.5px;
    border: 0;
    border-left: 5px #343436 solid;
    padding: 0 5px;
    height: 110px;
    background: #1b1b1b;
    resize: none;
    color: white;
    font-family: "Spectral SC", serif;
    font-size: 14px;
}
.upload-button {
    background: #1f1f1f;
    color: #ad9440;
    text-align: center;
    width: 100%;
    height: 24px;
}
#tabCon-upload input[type=file] {
    width: 100%;
    height: 25px;
    position: absolute;
    opacity: 0;
    top: 0;
    left: 0;
    cursor: pointer;
}
.uploaded-file {
    text-align: center;
    border-bottom: 1px black solid;
    background: #565656;
    position: relative;
}
#tabCon-upload {
	overflow: auto;
}


/*Grid Columns*/
.description {
  grid-column: 1 / 3;
  grid-row: 1;
}
.status {
  grid-column: 3;
  grid-row: 2;
}
.requirements {
  grid-column: 1;
  grid-row: 2;
}
.documents {
  grid-column: 2;
  grid-row: 2;
}
.list {
  grid-column: 1;
  grid-row: 3;
}


/*Button*/
button {
    width: 100px;
    margin: 31px auto;
    display: block;
    height: 25px;
    border: 3px #ad9440 solid;
    background: none;
    color: #ad9440;
    cursor: pointer;
    font-family: "Spectral SC", serif;
    transition: filter 0.25s;
}
button:hover {
	filter: brightness(125%);
}
button:focus {
	outline: none;
}
.btn-danger {
    border-color: #800000;
}

/*Random*/
#dragonFire {
  width: 300px;
  height: 100px;
  opacity: 0.05;
  z-index: -1;
  position: absolute;
  top: 0;
}
#randomDragon {
    left: calc(50% - 75px);
    width: 150px;
    height: 100px;
    position: relative;
}
#randomDragon img {
  width: 150px;
}


/*Other*/
.hidden {
display: none;
}
</style>
</head>
<body>

<div id="container">
  <div id="mainTitle">Synopsis</div>
  <div id="randomDragon"><img></div>
  <div id="dragonFire"><img src="http://72dragons.snxwless.net/images/dragon3.gif"></div>
  <div id="mainContent">
    
    <div class="box large description">
      <div class="box-title">Description</div>
      <div class="box-content">
        <textarea id="desc" placeholder="Enter your description"></textarea>
      </div>
    </div>
    
    <div class="box small status">
      <div class="box-title">Status Update</div>
      <div class="box-content">
        <textarea id="desc" placeholder="Enter a Status Update"></textarea>
      </div>
    </div>
    
    <div class="box small requirements">
      <div class="box-title">Requirements</div>
      <div class="box-content">
        <div class="inputLine"><input type="text" placeholder="Enter a Requirement Here"><div class="addInput"><i class="fas fa-plus"></i></div></div>
        <div class="reqCon"></div>
      </div>
    </div>
    
    <div class="box documents small">
      <div class="box-title">Documents</div>
      <div class="box-content">
        <div class="button">Add a Document</div>
      </div>
    </div>
    
    <div class="box large list">
      <div class="box-title">Categories</div>
      <div class="box-content">
      	<div class="list-column" id="chapters">
      		<div class="list-itemList">
      			<div class="list-item list-column-title"><div class="column-title">Chapters<div class="addItem"><i class="fas fa-plus"></i></div></div></div>
      		<?php
      			$userID = $_SESSION['login_ID'];
      			$query = "SELECT ID, title FROM prodDetlChapters WHERE type = 'chapters' AND userID = '$userID';";
      			
      			$result = mysqli_query($db,$query);
			while($data = mysqli_fetch_array($result)) {
				echo '<div class="list-item" data-id="'.$data[0].'"><div class="list-item-title">'.$data[1].'</div><div class="list-item-settings"><i class="fa fa-cog" aria-hidden="true"></i></div></div>';
			}
      		?>
      		</div>
      		<div class="list-settings">
      			<div class="list-settings-tabs">
      				<div class="list-settings-save"><i class="fas fa-save"></i></div>
      				<div class="list-tab tab-active" id="tab-info"><i class="fas fa-pencil-alt"></i></div>
      				<div class="list-tab" id="tab-upload"><i class="fas fa-upload"></i></div>
      				<div class="list-tab" id="tab-controls"><i class="fas fa-question"></i></div>
      				<div class="list-settings-back"><i class="fas fa-arrow-right"></i></div>
      			</div>
      			<div class="list-settings-tabContents">
      				<input type="hidden" name="itemID" class="idnumber" value="">
      				<div class="list-tabCon tabCon-active" id="tabCon-info">
      					<input type="text" name="tabName" value="" placeholder="Title" maxlength="50">
      					<textarea name="tabDesc" placeholder="Description"></textarea>
      				</div>
      				<div class="list-tabCon" id="tabCon-upload">
      					<div class="upload-button">Add a Document</div>
      					<input class="uploadfile" name="list-upload[]" type="file" multiple>
      				</div>
      				<div class="list-tabCon" id="tabCon-controls">
      					<button onclick="move($(idnumber).val())">Move To</button>
      					<button class="btn-danger" onclick="deleteItem($('.idnumber').eq(0).val())">Delete</button>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="list-column" id="verses">
      		<input type="hidden" class="parentID" value="">
      		<div class="list-itemList">
      			<div class="list-item list-column-title"><div class="column-title">Verses</div></div>
      		</div>
      		<div class="list-settings">
      			<div class="list-settings-tabs">
      				<div class="list-settings-save"><i class="fas fa-save"></i></div>
      				<div class="list-tab tab-active" id="tab-info"><i class="fas fa-pencil-alt"></i></div>
      				<div class="list-tab" id="tab-upload"><i class="fas fa-upload"></i></div>
      				<div class="list-tab" id="tab-controls"><i class="fas fa-question"></i></div>
      				<div class="list-settings-back"><i class="fas fa-arrow-right"></i></div>
      			</div>
      			<div class="list-settings-tabContents">
      				<input type="hidden" name="itemID" class="idnumber" value="">
      				<div class="list-tabCon tabCon-active" id="tabCon-info">
      					<input type="text" name="tabName" value="" placeholder="Title">
      					<textarea name="tabDesc" placeholder="Description"></textarea>
      				</div>
      				<div class="list-tabCon" id="tabCon-upload">
      					<div class="upload-button">Add a Document</div>
      					<input class="uploadfile" name="list-upload[]" type="file">
      				</div>
      				<div class="list-tabCon" id="tabCon-controls">
      					<button onclick="move($(idnumber).val())">Move To</button>
      					<button class="btn-danger" onclick="deleteItem($('.idnumber').eq(1).val())">Delete</button>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="list-column" id="task">
      		<input type="hidden" class="parentID" value="">
      		<div class="list-itemList">
      			<div class="list-item list-column-title"><div class="column-title">Tasks</div></div>
      		</div>
      		<div class="list-settings">
      			<div class="list-settings-tabs">
      				<div class="list-settings-save"><i class="fas fa-save"></i></div>
      				<div class="list-tab tab-active" id="tab-info"><i class="fas fa-pencil-alt"></i></div>
      				<div class="list-tab" id="tab-upload"><i class="fas fa-upload"></i></div>
      				<div class="list-tab" id="tab-controls"><i class="fas fa-question"></i></div>
      				<div class="list-settings-back"><i class="fas fa-arrow-right"></i></div>
      			</div>
      			<div class="list-settings-tabContents">
      				<input type="hidden" name="itemID" class="idnumber" value="">
      				<div class="list-tabCon tabCon-active" id="tabCon-info">
      					<input type="text" name="tabName" value="" placeholder="Title">
      					<textarea name="tabDesc" placeholder="Description"></textarea>
      				</div>
      				<div class="list-tabCon" id="tabCon-upload">
      					<div class="upload-button">Add a Document</div>
      					<input class="uploadfile" name="list-upload[]" type="file">
      				</div>
      				<div class="list-tabCon" id="tabCon-controls">
      					<button onclick="move($(idnumber).val())">Move To</button>
      					<button class="btn-danger" onclick="deleteItem($('.idnumber').eq(2).val())">Delete</button>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </div>
    
  </div>
</div>

<script type="text/javascript">

function addItem(column, name, id) {
	$('#' + column + ' .list-itemList').append('<div class="list-item" data-id="'+id+'"><div class="list-item-title">'+name+'</div><div class="list-item-settings"><i class="fa fa-cog" aria-hidden="true"></i></div></div>');
}

function setUpList(id) {
	$('#' + id + ' .list-item').each( function () {
		setSettingsAction($(this));
	});
}
function setSettingsAction(item) {
	item.find('.list-item-settings').click(function () {

		$(this).children('svg').addClass('fa-spin');
		//setup the settings
		$.ajax({
			type: 'post',
			url: '/s140630php/productiondetail/loadSettings.php',
			data: {'itemID':item.attr('data-id')},
			success: function (data) {
				var column = item.closest('.list-column').find('.list-settings-tabContents');
				data = JSON.parse(data);
				$(column).find('input[name=itemID]').val(data[0].ID);
				$(column).find('input[name=tabName]').val(data[0].title);
				$(column).find('textarea').val(data[0].description);
				
				//Animate settings
				$('.list-column').removeClass('active').removeClass('list-hidden');
				item.find('.list-item-settings').closest('.list-column').addClass('active');
				item.find('.list-item-settings').children('svg').removeClass('fa-spin')
				$('.list-column').not('.active').addClass('list-hidden');
			}
		});
	});
	item.find('.list-item-title').click(function () {
		var column;
		if (item.closest('.list-column').attr('id') == 'chapters') {
			column = 'verses';
			$('#verses .parentID').val(item.attr('data-id'));
			loadColumn('verses');
			$('#task .list-itemList').empty();
		} else if (item.closest('.list-column').attr('id') == 'verses') {
			column = 'task';
			$('#task .parentID').val(item.attr('data-id'));
			loadColumn('task');
		}
		
		$.ajax({
			type: 'post',
			url: '/s140630php/productiondetail/loadColumn.php',
			data: {'itemID':item.attr('data-id')},
			success: function (data) {
				data = JSON.parse(data);
				for (var i = 0; i < data.length; i ++) {
					addItem(column, data[i].title, data[i].ID);
				}
				setUpList(column);
			}
		});
	});
}

$(document).ready(function () {
$('.documents .button').click(function () {
  $('.documents .box-content').append('<div class="doc">Example_Document.doc<div class="doc-controls"><div class="doc-controls-close control"><i class="fa fa-times" aria-hidden="true"></i></div></div></div>');
    	$('.control').click(function() {
		$(this).parent().parent().remove();	
    	});
});

$('#randomDragon img').attr('src', 'http://72dragons.snxwless.net/images/dragon' + Math.floor(Math.random() * 5 + 1) + '.gif');

$('.requirements .addInput').click(function () {
  if($('.inputLine input').val() != 0) { //add for space as well
  	$('.requirements .box-content').append('<div class="doc"><span>'+$('.inputLine input').val()+'</span><div class="doc-controls"><div class="doc-controls-accept control hidden"><i class="fas fa-check"></i></div><div class="doc-controls-edit control"><i class="fas fa-pencil-alt"></i></div><div class="doc-controls-close control"><i class="fa fa-times" aria-hidden="true"></i></div></div><input type="hidden" value="'+$('.inputLine input').val()+'"></div>');
    	$('.control').click(function() {
		if ($(this).hasClass('doc-controls-close'))
			$(this).parent().parent().remove();
		else if ($(this).hasClass('doc-controls-edit')) {
			$(this).parent().siblings('input').attr('type', 'text');
			$(this).siblings('.doc-controls-accept').toggleClass('hidden');
			$(this).toggleClass('hidden');
		} else if ($(this).hasClass('doc-controls-accept')) {
			$(this).parent().siblings('input').attr('type', 'hidden');
			$(this).siblings('.doc-controls-edit').toggleClass('hidden');
			$(this).toggleClass('hidden');
			$(this).parent().siblings('span').text($(this).parent().siblings('input').val());
		}
    	});
  }
  
	});
	
	//List
	$('.list-tab').click(function(){
		var column = $(this).closest('.list-column').attr('id');
		if(!$(this).hasClass('tab-active')) {
			$('#' + column + ' .tab-active').toggleClass('tab-active');
			$(this).toggleClass('tab-active');
			$('#' + column + ' .tabCon-active').toggleClass('tabCon-active');
			var str = $(this).attr('id');
			var id = str.replace("tab", "tabCon");
			$('#' + column + ' #' + id).toggleClass('tabCon-active');
		}
	});
	$('.list-settings-back').click(function(){
		$('.list-column').removeClass('active').removeClass('list-hidden');
	});
	$('.list-column input').change(function () {
		var column = $(this).closest('.list-column').attr('id');
		if ($(this).hasClass('uploadfile')) {
			$('#' + column + ' #tabCon-upload').append('<div class="uploaded-file"><span></span></div>');
			$(this).clone().appendTo('#' + column + ' .uploaded-file:last');
			var toAdd = $('#' + column + ' .uploaded-file:last').find('input')[0].files;//.val();
 			//var fileToAdd = toAdd.substring(toAdd.lastIndexOf("\\") + 1);
 			$('#' + column + ' .uploaded-file:last').find('span').text('Files Chosen:');
 			for (var x = 0; x < toAdd.length; x++)
 				$('#' + column + ' .uploaded-file:last').find('span').append('<br>' + toAdd[x].name);
			
		}
		$('#' + column).find('.list-settings-save').addClass('unsaved');
	});
	$('.list-column textarea').change(function () {
		var column = $(this).closest('.list-column').attr('id');
		$('#' + column).find('.list-settings-save').addClass('unsaved');
	});
	$('.list-settings-save').click(function () {
		var column = $(this).closest('.list-column').attr('id'), process = 'save';
		if ($('#' + column + ' input[name=tabName]').val() != '') {
			if ($(this).hasClass('list-item-new')) {
				process = 'create';
				$(this).toggleClass('list-item-new');
			}
			
			var parent;
			if (column == 'verses') {
				parent = $('#verses .parentID').val();
			} else if (column == 'task') {
				parent = $('#task .parentID').val();
			} else
				parent = null;
			var inputTitle = $('#' + column + ' input[name=tabName]').val(), itemID = $('#' + column + ' input[name=itemID]').val();
			/*var files = [], form_data = new FormData(); ;
			for (var filePos = 1; filePos < $('#' + column + ' .uploadfile').length; filePos++)
				form_data.append('file', $('#' + column + ' .uploadfile').eq(filePos).prop('files')[0]);
			//Add Item to Database
			console.log(form_data);*/
			$.ajax({
				type: 'post',
				url: '/s140630php/productiondetail/addItem.php',
				data: {'title':inputTitle, 'desc':$('#' + column + ' textarea').val(), 'type':column, 'parent':parent, 'process':process, 'itemID':itemID},
				success: function (data) {
					if (process == 'create') {
						addItem(column, inputTitle, data);
						setSettingsAction($('#' + column + ' .list-item:last'));
						alert('"' + inputTitle + '" was created successfully.');
					} else if (process == 'save') {
						$('#' + column + ' .list-item[data-id=' + itemID + ']').find('.list-item-title').text(inputTitle);
						alert('"' + inputTitle + '" was saved successfully.');
					}
				}
			});
			$(this).removeClass('unsaved');
		}
		else
		alert('Please Include a Title.');
	});
	 $('.addItem').click(function () {
  	
  		$('.list-column').removeClass('active').removeClass('list-hidden');
		$(this).closest('.list-column').addClass('active');
		$(this).closest('.list-column').find('.list-settings-save').addClass('list-item-new');
		$('.list-column').not('.active').addClass('list-hidden');
		$('input[name=tabName]').val('');
  	});
	
	//Demo
	setUpList('chapters');
});



function loadColumn(column) {
  $('#' + column + ' .list-itemList').empty().append('<div class="list-item list-column-title"><div class="column-title">' + column + '<div class="addItem"><i class="fas fa-plus"></i></div></div></div>');
  $('#' + column + ' .addItem').click(function () {
  	
  		$('.list-column').removeClass('active').removeClass('list-hidden');
		$(this).closest('.list-column').addClass('active');
		$(this).closest('.list-column').find('.list-settings-save').addClass('list-item-new');
		$('.list-column').not('.active').addClass('list-hidden');
		$('input[name=tabName]').val('');
  });
}

function deleteItem(toDelete) {
console.log(toDelete);
	if (confirm('Are you sure you want to delete this item?')) {
		$('.list-item[data-id='+toDelete+']').remove();
		//reset settings and hide
		
		//ajax assign to user '-1' aka deleted item
		$.ajax({
			type: 'post',
			url: '/s140630php/productiondetail/deleteItem.php',
			data: {'itemID':toDelete},
			success: function () {
				alert('Item deleted.');
			}
		});
		$('.list-column').removeClass('active').removeClass('list-hidden');
	}
}
</script>
</body>
</html>