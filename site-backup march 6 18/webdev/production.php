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
<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
<link href="/scripts/graph/graph.css" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script type="text/javascript" src="/scripts/graph/graph.js"></script>
<style>
body {
  overflow-x: hidden;
}
/*Layer and Layer Header*/
.layer {
  width: 100%;
  height: auto;
  position: relative;
  border-bottom: 1px #ad9440 solid;
}
.layer-header {
  height: 75px;
  text-align: center;
  background: #1b1b1b;
}
.layer-header span {
    line-height: 75px;
    color: #ad9440;
    font-size: 37px;
    text-align: center;
}

/*Show Code*/
.showCode {
  position: absolute;
  right: 10px;
  top: 22px;
  z-index: 99;
}
.showCode-toggle {
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 32px;
  background: #ad9440;
  border-radius: 100%;
  cursor: pointer;
  position: absolute;
  right: 0;
  top: 0;
}
.showCode-toggle svg {
  margin-top: 7px;
}
.codeContainer {
  border: 4px #ad9440 solid;
  border-radius: 5px;
  width: 0px;
  height: 0px;
  background: #1b1b1b;
  margin-top: 13px;
  margin-right: 13px;
  overflow: hidden;
  transition: width 0.25s, height 0.25s;
}
.codeToggled {
  width: 400px !important;
  height: 200px !important;
}
.codeContainer textarea {
  width: 380px;
  height: 180px;
  border: 0;
  margin: 10px 8px;
  padding: 0 1px;
  resize: none;
  font-family: 'Cutive Mono', monospace !important;
}


/*Layer Content*/
.layer-content {
  position: relative;
  background: black;
  width: 100%;
  height: auto;
  padding: 10px 0;
}
.layer-content > * {
  margin: 10px auto !important;
}
.flexThis {
  display: flex;
}
.flexThis > * {
  margin: 10px auto !important;
}

/*Colors*/
#colors {
  list-style: none;
  display: flex;
}
#colors li {
  margin: auto;
  color: white;
  background: red;
  padding: 10px;
}

/*Boxes*/
.box {
    border: 5px #1b1b1b solid;
    margin: 20px 8px;
    width: 475px;
    height: 200px;
    position: relative;
}
.box-title {
    background: #161616;
    font-size: 24px;
    text-align: center;
    color: #ad9440;
}
.large {
    width: 1000px !important;
    margin: 20px 0;
}
.small {
    width: 200px !important;
    margin: 20px;
}

/*Input*/
input[type=text] {
    display: block;
    margin: 5px auto;
    height: 35px;
    width: 300px;
    border: 0;
    border-left: 5px #343436 solid;
    background-color: #1b1b1b;
    color: #FFF;
    padding: 0 5px;
    font-size: 16px;
    transition: border-color 0.5s;
    font-family: "Spectral SC", serif;
}
input[type=text]:focus {
    border-color: maroon;
    outline: none;
}
.shortText {
    width: 100px !important;
}
.longText {
    width: 895px !important;
}


input:focus, button:focus, textarea:focus {
  outline: none;
}




/*Checkbox*/
/*Dragon*/
.choice {
    position: relative;
    z-index: 2;
    min-width: 140px;
    margin: 10px 0;
    margin-left: 5px;
    display: inline-flex;
    color: white;
    font-size: 18px;
    cursor: pointer;
}
.checkbox {
    min-width: 60px;
    max-width: 60px;
    height: 60px;
    position: relative;
    cursor: pointer;
    margin-right: 5px;
    background-image: url(http://72dragons.snxwless.net/images/dragon1pre.png);
    background-position: center;
    background-size: 150%;
    filter: brightness(50%);
    transition: filter 0.5s;
}
.choice:hover .checkbox {
    background-image: url(http://72dragons.snxwless.net/images/dragon1peek.png);
    filter: brightness(75%);
}
.choice .checked {
    background-image: url(http://72dragons.snxwless.net/images/dragon1post.png) !important;
    filter: brightness(100%) !important;
}
.choice .check, input[type=checkbox], input[type=radio] {
    display: none;
}
/*Tri Checkbox*/
.triCheckBox {
    border: 5px #1b1b1b solid;
    width: 150px;
    height: 86px;
    line-height: 43px;
    cursor: pointer;
    background: black;
    display: inline-block;
    color: #ad9440;
    text-align: center;
    margin: 15px 22px;
    vertical-align: top;
    transition: background 0.25s, border-color 0.25s;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.checkedYes {
    border-color: #ad9440 !important;
    background: #1b1b1b !important;
}
.checkedNo {
    background: #0e0e0e !important;
    border-color: maroon !important;
}
/*File and comment checkbox*/
.story-options-box {
    background: #0e0e0e;
    border: 5px #1b1b1b solid;
    width: 200px;
    height: 110px;
    color: #ad9440;
    margin: 0 10px;
    overflow: hidden;
    display: inline-block;
    line-height: 50px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    position: relative;
    transition: border-color 0.25s, background 0.25s;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.checkedYes {
    border-color: #ad9440 !important;
    background: #1b1b1b !important;
}
.options-upload {
    left: 20px;
}
.options-comment {
    right: 20px;
}
.options-icon {
    position: absolute;
    bottom: -50px;
    font-size: 36px;
    overflow: hidden;
    color: #0e0e0e;
    transition: color 0.25s, bottom 0.25s;
}
.options-icon-show {
    color: #ad9440 !important;
    bottom: 10px !important;
}
.storyCMS-outbox {
    display: none;
}

/*Textarea*/
textarea {
    display: block;
    margin: 10px auto;
    width: 700px;
    height: 200px;
    border: 0;
    border-left: 5px #343436 solid;
    background-color: #1b1b1b;
    color: #FFF;
    padding: 5px;
    resize: none;
    font-size: 16px;
    transition: border-color 0.5s;
    font-family: "Spectral SC", serif;
}
.mini {
    width: 350px !important;
    height: 150px !important;
}
textarea:focus {
    border-color: maroon;
    outline: none;
}

/*Multiple Photo Upload*/
.photoList {
    display: -webkit-box;
    overflow: auto;
    width: 910px;
}
.addPhoto {
  position: relative;
  width: 100px !important;
  height: 100px;
  border: 1px #343436 dashed;
  color: #343436;
  cursor: pointer;
}
.addPhoto span {
  position: absolute;
  width: 100%;
  bottom: 5px;
  text-align: center;
}
.addPhoto:before {
  content: '';
  position: absolute;
  width: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 26px);
  top: 35px;
  transition: border-color 0.5s;
}
.addPhoto:after {
  content: '';
  position: absolute;
  height: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 1px);
  top: 10px;
  transition: border-color 0.5s, transform 0.25s;
}
.addPhoto:hover:before, .addPhoto:hover:after {
  border-color: maroon;
}
.addPhoto input[type=file] {
    width: 102px;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0;
    margin: 0;
    border: 0;
    opacity: 0;
    cursor: pointer;
    height: 100%;
    z-index: 10;
}
.poster input[type=file] {
    margin: auto;
    height: 35px;
    width: 895px;
    border: 0;
    border-left: 5px #343436 solid;
    background-color: #1b1b1b;
    color: #FFF;
    padding: 0 5px;
    font-size: 16px;
    transition: border-color 0.5s;
}
.preview {
    background-position: center;
    background-size: cover;
    border: 1px #ad9440 solid;
    margin: 0px 10px;
    width: 100px;
    position: relative;
}
.poster {
    display: table;
    color: #ad9440;
    text-align: center;
}
.poster-view {
    height: 76px;
    display: table-cell;
    vertical-align: middle;
    background: rgba(27, 27, 27, 0.85);
    opacity: 0;
    transition: opacity 0.5s, background 0.5s;
}
.poster-remove {
    display: table-row-group;
    background: rgba(128, 0, 0, 0.85);
    opacity: 0;
    transition: opacity 0.5s, background 0.5s;
}
.preview:hover .poster-view, .preview:hover .poster-remove {
	opacity: 1;
	    cursor: pointer;
}
.poster-view:hover {
    background: rgba(27, 27, 27, 1);
}
.poster-remove:hover {
    background: rgba(128, 0, 0, 1);
}
.hidden {
  display: none !important;
}

/*Button*/
button {
    border: none;
    background: #1b1b1b;
    color: white;
    width: 150px;
    margin: auto !important;
    font-size: 16px;
    height: 44px;
    padding: 10px;
    transition: background 0.5s;
    cursor: pointer;
      font-family: "Spectral SC", serif;
}
button:hover, input[type=submit]:hover {
  background: maroon;
}
button:active, input[type=submit]:active {
  background: #A21616;
}
button:focus{
  outline: none;
  border-color: maroon;
}

/*Drop Down*/
.choicebar-dropDown {
    min-width: 250px;
    border-right: 3px #580000 solid;
    background: #800000;
    cursor: pointer;
    position: relative;
}
.choicebar-dropDown:hover .dropDown-Container {
	height: auto;
	overflow: auto;
}
.dropDown-Face{
    width: 100%;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    padding-left: 5px;
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
.dropDown-option:hover {
     filter: brightness(125%);
}

/*Table*/
table {
	border-collapse: collapse;
}
th {
    color: #ad9440;
    background: #1b1b1b;
    position: sticky;
    top: -1px;
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
    padding: 5px;
    width: 150px;
}
</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
<!--COLORS-->
<div class="layer">
	<div class="layer-header">
		<span>Colors</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
background: #ad9440;
background: #800000;
background: #000000;
background: #0e0e0e;
background: #161616;
background: #1b1b1b;
background: #ffffff;</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
		<ul id="colors">
			<li><span>#ad9440</span></li>
			<li><span>#800000</span></li>
			<li><span>#000000</span></li>
			<li><span>#0e0e0e</span></li>
			<li><span>#161616</span></li>
			<li><span>#1b1b1b</span></li>
			<li><span style="color: black;">#ffffff</span></li>
		</ul>
	</div>
</div>

<!--HEADERS-->
<!--<div class="layer">
	<div class="layer-header">
		<span>Headers</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea></textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
	
	</div>
</div>-->

<!--BOXES-->
<div class="layer">
	<div class="layer-header">
		<span>Boxes</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
/////////////////HTML//////////////////
\<div class="box small">
	\<div class="box-title">Small Box\</div>
\</div>
\<div class="box">
	\<div class="box-title">Box\</div>
\</div>
\<div class="box large">
	\<div class="box-title">Large Box\</div>
\</div>

/////////////////CSS///////////////////
.box {
    border: 5px #1b1b1b solid;
    margin: 20px 8px;
    width: 475px;
    height: 200px;
    position: relative;
}
.box-title {
    background: #161616;
    font-size: 24px;
    text-align: center;
    color: #ad9440;
}
.large {
    width: 1000px !important;
    margin: 20px 0;
}
.small {
    width: 200px !important;
    margin: 20px;
}</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
	    <div class="flexThis">
		<div class="box small">
			<div class="box-title">Small Box</div>
		</div>
		<div class="box">
			<div class="box-title">Box</div>
		</div>
	    </div>
		<div class="box large">
			<div class="box-title">Large Box</div>
		</div>
	</div>
</div>

<!--TEXT INPUT-->
<div class="layer">
	<div class="layer-header">
		<span>Text Input</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
/////////////////HTML//////////////////
\<input class="shortText" type="text" placeholder="Small Text">
\<input type="text" placeholder="Text Input">
\<input class="longText" type="text" placeholder="Long Text">

/////////////////CSS///////////////////
input[type=text] {
    display: block;
    margin: 5px auto;
    height: 35px;
    width: 300px;
    border: 0;
    border-left: 5px #343436 solid;
    background-color: #1b1b1b;
    color: #FFF;
    padding: 0 5px;
    font-size: 16px;
    transition: border-color 0.5s;
    font-family: "Spectral SC", serif;
}
input[type=text]:focus {
    border-color: maroon;
    outline: none;
}
.shortText {
    width: 100px !important;
}
.longText {
    width: 895px !important;
}</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
	    <div class="flexThis">
		<input class="shortText" type="text" placeholder="Small Text">
		<input type="text" placeholder="Text Input">
	    </div>
		<input class="longText" type="text" placeholder="Long Text">
	</div>
</div>

<!--CHECKBOXES-->
<div class="layer">
	<div class="layer-header">
		<span>Checkboxes</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
----------------DRAGON-----------------


/////////////////HTML//////////////////
\<div class="choice stageCheck">
	\<div class="checkbox">
		\<input type="checkbox" name="check[]" class="check" value="Action">
	\</div>
	Action
\</div>

/////////////////CSS///////////////////
.choice {
    position: relative;
    z-index: 2;
    min-width: 140px;
    margin: 10px 0;
    margin-left: 5px;
    display: inline-flex;
    color: white;
    font-size: 18px;
    cursor: pointer;
}
.checkbox {
    min-width: 60px;
    max-width: 60px;
    height: 60px;
    position: relative;
    cursor: pointer;
    margin-right: 5px;
    background-image: url(http://72dragons.snxwless.net/images/dragon1pre.png);
    background-position: center;
    background-size: 150%;
    filter: brightness(50%);
    transition: filter 0.5s;
}
.choice:hover .checkbox {
    background-image: url(http://72dragons.snxwless.net/images/dragon1peek.png);
    filter: brightness(75%);
}
.checked {
    background-image: url(http://72dragons.snxwless.net/images/dragon1post.png) !important;
    filter: brightness(100%) !important;
}
.check {
    display: none;
}

//////////////////JS///////////////////
$('.stageCheck').click( function () {
    $(this).find('.checkbox').toggleClass('checked');
  	if ($('.check').eq($('.stageCheck').index(this)).prop('checked')) {
  	    $('.check').eq($('.stageCheck').index(this)).prop('checked', false);
  	    if($(this).next().hasClass('stageFile')) {
     	    $(this).next().find('input').val('');
     		$(this).next().find('span').text('Upload ' + $(this).text());
     	}
    } else {
  	    $('.check').eq($('.stageCheck').index(this)).prop('checked', true);
    }
  
    if($(this).next().hasClass('stageFile'))
       $(this).next().toggleClass('showStageFile');
});

-------------TRI CHECKBOX--------------


/////////////////HTML//////////////////
\<div class="triCheckBox">
    Title
    \<br>
    \<span>
        \<i class="fas fa-minus"></i>
    \</span>
    \<input type="radio" name="ftr-hm" value="1">
    \<input type="radio" name="ftr-hm" value="0">
    \<input type="radio" name="ftr-hm" value="All" checked="checked">
\</div>

/////////////////CSS///////////////////
.triCheckBox {
    border: 5px #1b1b1b solid;
    width: 150px;
    height: 86px;
    line-height: 43px;
    cursor: pointer;
    background: black;
    display: inline-block;
    color: #ad9440;
    text-align: center;
    margin: 15px 22px;
    vertical-align: top;
    transition: background 0.25s, border-color 0.25s;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.checked {
    border-color: #ad9440 !important;
    background: #1b1b1b !important;
}
.checkedNo {
    background: #0e0e0e !important;
    border-color: maroon !important;
}

//////////////////JS///////////////////
$('.triCheckBox').click(function () {
    var id = $(this).attr('id');
    if ($(this).hasClass('checked')) {
      $(this).removeClass('checked').addClass('checkedNo');
      $(this).find('span').html('<i class="fas fa-times"></i>');
      $('input[name=' + id + ']')[2].click();
    } else if ($(this).hasClass('checkedNo')) {
      $(this).removeClass('checkedNo');
      $(this).find('span').html('<i class="fas fa-minus"></i>');
      $('input[name=' + id + ']')[0].click();4
    } else {
      $(this).addClass('checked');
      $(this).find('span').html('<i class="fas fa-check"></i>');
      $('input[name=' + id + ']')[1].click();
    }
});

--------FILE & COMMENT CHECKBOX--------


/////////////////HTML//////////////////
<div id="opt-mockup" class="story-options-box">
          Title
          <br>
          <span><i class="fas fa-times"></i></span>
          <div class="options-icon options-upload"><i class="fas fa-file-alt"></i></div>
          <div class="options-icon options-comment"><i class="fas fa-plus" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-comment"></i></div>
          <input type="checkbox" name="crt-hm">
          <div class="storyCMS-outbox"></div>
</div>

/////////////////CSS///////////////////
.story-options-box {
    background: #0e0e0e;
    border: 5px #1b1b1b solid;
    width: 200px;
    height: 110px;
    color: #ad9440;
    margin: 0 10px;
    overflow: hidden;
    display: inline-block;
    line-height: 50px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    position: relative;
    transition: border-color 0.25s, background 0.25s;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.checkedYes {
    border-color: #ad9440 !important;
    background: #1b1b1b !important;
}
.options-upload {
    left: 20px;
}
.options-comment {
    right: 20px;
}
.options-icon {
    position: absolute;
    bottom: -50px;
    font-size: 36px;
    overflow: hidden;
    color: #0e0e0e;
    transition: color 0.25s, bottom 0.25s;
}
.options-icon-show {
    color: #ad9440 !important;
    bottom: 10px !important;
}
.storyCMS-outbox {
    display: none;
}

//////////////////JS///////////////////
$('.story-options-box').click(function (e) {
   if(e.target == e.currentTarget) {
      $(this).toggleClass('checkedYes');
    if ($(this).hasClass('checkedYes')) {
      $(this).find('span').html('<i class="fas fa-check"></i>');
      $(this).find('input').prop('checked', true);
      $(this).find('.options-icon').addClass('options-icon-show');
    } else {
      $(this).find('span').html('<i class="fas fa-times"></i>');
      $(this).find('input').prop('checked', false);
      $(this).find('.options-icon').removeClass('options-icon-show');
    }
   } else {
   	 if($(e.target).closest('.options-icon').hasClass('options-icon-show')) {
   	     var sectionTitle = $(e.target).closest('.story-options-box').contents().eq(0).text(), sectionOption;
   	     
   	     if ($(e.target).closest('.options-icon').hasClass('options-upload')) { //Upload
   			sectionOption = 'File Manager';
   		 } else { //Comment
   			sectionOption = 'Comment Manager';
   		 }
   	 }
   }
});
</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content flexThis">
		<div class="choice stageCheck">
			<div class="checkbox">
				<input type="checkbox" name="check[]" class="check" value="Action">
			</div>
			Title
		</div>
		
		<div class="triCheckBox" id="example">
			Title
    			<br>
    			<span>
    			    <i class="fas fa-minus"></i>
    			</span>
    			<input type="radio" name="example" value="1">
    			<input type="radio" name="example" value="0">
    			<input type="radio" name="example" value="All" checked="checked">
		</div>
		
		<div id="opt-mockup" class="story-options-box">
          		Title
          		<br>
          		<span><i class="fas fa-times"></i></span>
          		<div class="options-icon options-upload"><i class="fas fa-file-alt"></i></div>
          		<div class="options-icon options-comment"><i class="fas fa-plus" data-fa-transform="shrink-10 up-.5" data-fa-mask="fas fa-comment"></i></div>
          		<input type="checkbox" name="crt-hm">
          		<div class="storyCMS-outbox"></div>
		</div>
	  </div>
        </div>
	<!--TEXT AREA-->
	<div class="layer">
	<div class="layer-header">
		<span>Text Area</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
/////////////////HTML//////////////////
\<textarea class="mini" name="storyDesc" placeholder="Mini Textarea"><!--CLOSE THE TEXTAREA HERE-->
\<textarea name="storyDesc" placeholder="Textarea"><!--CLOSE THE TEXTAREA HERE-->

/////////////////CSS///////////////////
textarea {
    display: block;
    margin: 10px auto;
    width: 700px;
    height: 200px;
    border: 0;
    border-left: 5px #343436 solid;
    background-color: #1b1b1b;
    color: #FFF;
    padding: 5px;
    resize: none;
    font-size: 16px;
    transition: border-color 0.5s;
    font-family: "Spectral SC", serif;
}
.mini {
    width: 350px !important;
    height: 150px !important;
}
textarea:focus {
    border-color: maroon;
    outline: none;
}</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
		<textarea class="mini" name="storyDesc" placeholder="Mini Textarea"></textarea>
		<textarea name="storyDesc" placeholder="Textarea"></textarea>
	</div>
    </div>

    
    <!--MULTIPLE IMAGE UPLOAD-->
    <div class="layer">
	<div class="layer-header">
		<span>Multiple Image Upload</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
/////////////////HTML//////////////////
\<div class="photoList" id="postList">
    \<div class="addPhoto">
        \<input class="input-file" type="file" name="photo[]" accept="image/*">
        \<span>Title</span>
    \</div>
\</div>

/////////////////CSS///////////////////
.photoList {
    display: -webkit-box;
    overflow: auto;
    width: 910px;
}
.addPhoto {
  position: relative;
  width: 100px !important;
  height: 100px;
  border: 1px #343436 dashed;
  color: #343436;
  cursor: pointer;
}
.addPhoto span {
  position: absolute;
  width: 100%;
  bottom: 5px;
  text-align: center;
}
.addPhoto:before {
  content: '';
  position: absolute;
  width: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 26px);
  top: 35px;
  transition: border-color 0.5s;
}
.addPhoto:after {
  content: '';
  position: absolute;
  height: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 1px);
  top: 10px;
  transition: border-color 0.5s, transform 0.25s;
}
.addPhoto:hover:before, .addPhoto:hover:after {
  border-color: maroon;
}
.addPhoto input[type=file] {
    width: 102px;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0;
    margin: 0;
    border: 0;
    opacity: 0;
    cursor: pointer;
    height: 100%;
    z-index: 10;
}
.poster input[type=file] {
    margin: auto;
    height: 35px;
    width: 895px;
    border: 0;
    border-left: 5px #343436 solid;
    background-color: #1b1b1b;
    color: #FFF;
    padding: 0 5px;
    font-size: 16px;
    transition: border-color 0.5s;
}
.preview {
    background-position: center;
    background-size: cover;
    border: 1px #ad9440 solid;
    margin: 0px 10px;
    width: 100px;
    position: relative;
}
.poster {
    display: table;
    color: #ad9440;
    text-align: center;
}
.poster-view {
    height: 76px;
    display: table-cell;
    vertical-align: middle;
    background: rgba(27, 27, 27, 0.85);
    opacity: 0;
    transition: opacity 0.5s, background 0.5s;
}
.poster-remove {
    display: table-row-group;
    background: rgba(128, 0, 0, 0.85);
    opacity: 0;
    transition: opacity 0.5s, background 0.5s;
}
.preview:hover .poster-view, .preview:hover .poster-remove {
	opacity: 1;
	    cursor: pointer;
}
.poster-view:hover {
    background: rgba(27, 27, 27, 1);
}
.poster-remove:hover {
    background: rgba(128, 0, 0, 1);
}
.hidden {
  display: none !important;
}
//////////////////JS///////////////////
$(".input-file").change(function(){
	setPreview(this);
});

function setPreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
            	$('#postList').append('<div class="preview poster"><div class="poster-view">View</div><div class="poster-remove">Remove</div></div>');/*<input type="file" class="bannerImage" name="prodPoster[]"/>*/
                $('.poster').last().css('background-image', 'url(' + e.target.result + ')');//.find('input'valal(e.target.result);
                $('.poster-remove').last().click(function () {
                	$('.poster').last().remove();
                });
                        	var $this = $(input), $clone = $this.clone();
  $this.after($clone).addClass('hidden').appendTo($('.poster:last'));
  		$clone.change(function(){
	setPreview(this);
    	});
            }
            
            reader.readAsDataURL(input.files[0]);
        }
}</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
		<div class="photoList" id="postList">
    			<div class="addPhoto">
        			<input class="input-file" type="file" name="photo[]" accept="image/*">
        			<span>Title</span>
    			</div>
		</div>
	</div>
    </div>
    
    <!--BUTTONS-->
    <div class="layer">
	<div class="layer-header">
		<span>Buttons</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
/////////////////HTML//////////////////
<button>Title</button>

/////////////////CSS///////////////////
button {
    border: none;
    background: #1b1b1b;
    color: white;
    width: 150px;
    margin: auto !important;
    font-size: 16px;
    height: 44px;
    padding: 10px;
    transition: background 0.5s;
    cursor: pointer;
    font-family: "Spectral SC", serif;
}
button:hover, input[type=submit]:hover {
  background: maroon;
}
button:active, input[type=submit]:active {
  background: #A21616;
}
button:focus{
  outline: none;
  border-color: maroon;
}</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content flexThis">
		<button>Title</button>
	</div>
    </div>
    
    <!--DROP DOWN-->
    <div class="layer">
	<div class="layer-header">
		<span>Drop Down</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
/////////////////HTML//////////////////
\<div class="choicebar-dropDown">
    \<div class="dropDown-Face">Title\</div>
    \<div class="dropDown-Container">
        \<div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">All\</div>
    \</div>
    \<input class="dropDown-Choice" name="exampleName" type="hidden">
\</div>

/////////////////CSS///////////////////
.choicebar-dropDown {
    min-width: 250px;
    border-right: 3px #580000 solid;
    background: #800000;
    cursor: pointer;
    position: relative;
}
.choicebar-dropDown:hover .dropDown-Container {
	height: auto;
	overflow: auto;
}
.dropDown-Face{
    width: 100%;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    padding-left: 5px;
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
.dropDown-option:hover {
     filter: brightness(125%);
}

//////////////////JS///////////////////
function dropDownClick(dropDown, choice) {
	dropDown.find('.dropDown-Face').text(choice);
	dropDown.find('input').val(choice);
}</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
		<div class="choicebar-dropDown">
    			<div class="dropDown-Face">Title</div>
    			<div class="dropDown-Container">
    			    <div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Example 1</div>
    			    <div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Example 2</div>
    			    <div onclick="dropDownClick($(this).parent().parent(), $(this).text())" class="dropDown-option">Example 3</div>
    			</div>
    			<input class="dropDown-Choice" name="exampleName" type="hidden">
		</div>
	</div>
    </div>
    
    <!--TABLE-->
    <div class="layer">
	<div class="layer-header">
		<span>Table</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea>
/////////////////HTML//////////////////
\<table>
	\<tbody>
		\<tr>
			\<th>Header\</th>
			\<th>Header\</th>
			\<th>Header\</th>
		\</tr>
		\<tr>
			\<td>Cell\</td>
			\<td>Cell\</td>
			\<td>Cell\</td>
		\</tr>
		\<tr>
			\<td>Cell\</td>
			\<td>Cell\</td>
			\<td>Cell\</td>
		\</tr>
	\</tbody>
\</table>

/////////////////CSS///////////////////
table {
	border-collapse: collapse;
}
th {
    color: #ad9440;
    background: #1b1b1b;
    position: sticky;
    top: -1px;
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
    padding: 5px;
    width: 150px;
}</textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
		<table class="72D-table">
			<tbody>
				<tr>
					<th>Header</th>
					<th>Header</th>
					<th>Header</th>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>Cell</td>
					<td>Cell</td>
				</tr>
			</tbody>
		</table>
	</div>
    </div>
    
    <!--GRAPHS-->
    <div class="layer">
	<div class="layer-header">
		<span>Graphs</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea></textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
		<textarea>To include graphs on your page, add to the page header:
<link href="/scripts/graph/graph.css" rel="stylesheet">
<script type="text/javascript" src="/scripts/graph/graph.js"></script>

Set up your div with the class 'graph' and 'graph-bar' for a bar graph or 'graph-line' for a line graph

Then call the graph function 'createGraph(idOfLocation, title, dataArray, xValueArray, dataCaptionsArray)' and your graph will be created</textarea>
	</div>
    </div>

<div class="layer">
	<div class="layer-header">
		<span>Images</span>
		<div class="showCode">
  			<div class="showCode-toggle"><i class="fas fa-code"></i></div>
  			<div class="codeContainer">
    			<textarea></textarea>
  			</div>
		</div>
	</div>
	<div class="layer-content">
		<textarea class="mini">Will add when I ( David) have a chance to decrease their size at home</textarea>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function() {
  $('.showCode-toggle').click(function () {
  	$(this).siblings('.codeContainer').toggleClass('codeToggled');
  });
  $('.showCode textarea').each(function () {
  	$(this).text($(this).text().replace(/\\/g,''));
  });
  
  $('#colors li').each(function () {
  	$(this).css('background', $(this).children('span').text());
  });
  
  $('.stageCheck').click( function () {
    $(this).find('.checkbox').toggleClass('checked');
  	if ($('.check').eq($('.stageCheck').index(this)).prop('checked')) {
  	    $('.check').eq($('.stageCheck').index(this)).prop('checked', false);
  	    if($(this).next().hasClass('stageFile')) {
     	    $(this).next().find('input').val('');
     		$(this).next().find('span').text('Upload ' + $(this).text());
     	}
    } else {
  	    $('.check').eq($('.stageCheck').index(this)).prop('checked', true);
    }
  
    if($(this).next().hasClass('stageFile'))
       $(this).next().toggleClass('showStageFile');
  });
  $('.triCheckBox').click(function () {
    var id = $(this).attr('id');
    if ($(this).hasClass('checkedYes')) {
      $(this).removeClass('checkedYes').addClass('checkedNo');
      $(this).find('span').html('<i class="fas fa-times"></i>');
      $('input[name=' + id + ']')[2].click();
    } else if ($(this).hasClass('checkedNo')) {
      $(this).removeClass('checkedNo');
      $(this).find('span').html('<i class="fas fa-minus"></i>');
      $('input[name=' + id + ']')[0].click();
    } else {
      $(this).addClass('checkedYes');
      $(this).find('span').html('<i class="fas fa-check"></i>');
      $('input[name=' + id + ']')[1].click();
    }
  });
  
  $('.story-options-box').click(function (e) {
   if(e.target == e.currentTarget) {
      $(this).toggleClass('checkedYes');
    if ($(this).hasClass('checkedYes')) {
      $(this).find('span').html('<i class="fas fa-check"></i>');
      $(this).find('input').prop('checked', true);
      $(this).find('.options-icon').addClass('options-icon-show');
    } else {
      $(this).find('span').html('<i class="fas fa-times"></i>');
      $(this).find('input').prop('checked', false);
      $(this).find('.options-icon').removeClass('options-icon-show');
    }
   } else {
   	 if($(e.target).closest('.options-icon').hasClass('options-icon-show')) {
   	     var sectionTitle = $(e.target).closest('.story-options-box').contents().eq(0).text(), sectionOption;
   	     
   	     if ($(e.target).closest('.options-icon').hasClass('options-upload')) { //Upload
   			sectionOption = 'File Manager';
   		 } else { //Comment
   			sectionOption = 'Comment Manager';
   		 }
   	 }
   }
  });
  
  $(".input-file").change(function(){
	setPreview(this);
  });
  
  
});

function setPreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
            	$('#postList').append('<div class="preview poster"><div class="poster-view">View</div><div class="poster-remove">Remove</div></div>');/*<input type="file" class="bannerImage" name="prodPoster[]"/>*/
                $('.poster').last().css('background-image', 'url(' + e.target.result + ')');//.find('input'valal(e.target.result);
                $('.poster-remove').last().click(function () {
                	$('.poster').last().remove();
                });
                        	var $this = $(input), $clone = $this.clone();
  $this.after($clone).addClass('hidden').appendTo($('.poster:last'));
  		$clone.change(function(){
	setPreview(this);
    	});
            }
            
            reader.readAsDataURL(input.files[0]);
        }
}

function dropDownClick(dropDown, choice) {
	dropDown.find('.dropDown-Face').text(choice);
	dropDown.find('input').val(choice);
}
</script>
</body>
</html>