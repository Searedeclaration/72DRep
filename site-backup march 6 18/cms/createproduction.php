<?php
   include($_SERVER['DOCUMENT_ROOT']."/s140630php/config.php");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$test = $_GET['test'];
echo $test;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>72 Dragons</title>
<meta name="viewport" content="width=device-width, height=device-height">
<link href="https://fonts.googleapis.com/css?family=Spectral+SC:300" rel="stylesheet">
<link type="text/css" href="/scripts/graph/barchart.css" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/scripts/graph/barchart.js"></script>
<style>
body {
  margin: 0;
  padding: 0;
  background-color: black;
  font-family: "Spectral SC", serif;
  overflow-x: hidden;
}

button, input[type=submit] {
    border: none;
    background: #1b1b1b;
    color: white;
    margin-right: 5px;
    padding: 10px;
    font-size: 12px;
    transition: background 0.5s;
    cursor: pointer;
      font-family: "Spectral SC", serif;
}
input[type=submit] {
width: 200px;
margin: auto !important;
font-size: 16px;
height: 44px;
}
button:hover, input[type=submit]:hover {
  background: maroon;
}
button:active, input[type=submit]:active {
  background: #A21616;
}

#container {
  position: relative;
  width: 1000px;
  height: auto;
  margin: auto;
  border-right: 5px #343436 solid;
  border-left: 5px #343436 solid;
}

#dropDown {
  display: none;
  position: fixed;
  left: calc(50% - 300px);
  top: 110px;
  width: 600px;
  height: 550px;
  z-index: 100000000;
  background-color: black;
  transition: top 0.5s;
}
#photoCon {
    width: 100%;
    padding: 10px 0;
    overflow: auto;
    height: 325px;
    background: #161616;
    border-bottom: 5px #343436 solid;
    transition: padding 0.5s, height 0.5s;
}
.member-bar {
    width: 560px;
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
#member-active {
	border-color: #ad9440 !important;
	border-width: 5px !important;
}
#photo {
  display: block;
  margin: 0 auto;
  height: 100%;
  max-width: 100%;
}
#infoCon {
  width: 100%;
  height: 150px;
}
#member {
  padding: 10px;
  display: flex;
}
#left {
  width: 80%;
}
#right {
  width: 20%;
  position: relative;
}
#member input {
  width: 400px;
  margin: 5px 0;
}
#memberButtons {
	display: flex;
}
.addMember {
  position: relative;
  width: 100px !important;
  height: 100px;
  border: 1px #343436 dashed;
  color: #343436;
  cursor: pointer;
}
.addMember span {
  position: absolute;
  width: 100%;
  bottom: 5px;
  text-align: center;
}
.addMember:before {
  content: '';
  position: absolute;
  width: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 26px);
  top: 35px;
  transition: border-color 0.5s;
}
.addMember:after {
  content: '';
  position: absolute;
  height: 50px;
  border: 2px #343436 solid;
  left: calc(50% - 1px);
  top: 10px;
  transition: border-color 0.5s, transform 0.25s;
}
.addMember:hover:before, .addMember:hover:after {
  border-color: maroon;
}

.photoList {
	    display: -webkit-box;
    overflow: auto;
    width: 910px;
}
.preview {
    background-position: center;
    background-size: cover;
    border: 1px #ad9440 solid;
    margin: 0px 10px;
    width: 100px;
    position: relative;
}
.member-drop {
    height: 90px;
    width: 90px;
    position: absolute;
    background: #1b1b1b;
    color: #ad9440;
    padding: 5px;
    text-align: center;
    margin: auto;
    opacity: 0;
    top: -1px;
    border: 1px #ad9440 solid;
    border-left: 0;
    z-index: 100000;
    transition: opacity 0.5s, left 0.5s;
    left: 0;
}
.preview:hover .member-drop {
	left: 100px;
	opacity: 1;
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
#memberAddPhoto {
  display: none;
  margin-bottom: 10px;
}

#dropDownCover {
  top: 0;
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  background: black;
  opacity: 0.9;
  z-index: 10000000;
}

.section {
  padding: 10px 0;
}



.title {
  display: block;
  margin: 10px 45px;
  color: rgb(173, 148, 64);
  font-size: 36px;
  display: flex;
}
.dragon {
  position: relative;
  margin-left: 10px;
  width: 50px;
  height: 50px;
  background-image: url(/images/dragon2.gif);
  background-size: cover;
  background-position: center;
  cursor: help;
  animation: hover 2s linear infinite;
}
.dragon:hover .dragon-help {
	display: block;
}
.dragon-help {
position: absolute;
    background: #1b1b1b;
    border: 2px maroon solid;
    width: 300px;
    height: auto;
    text-align: justify;
    font-size: 16px;
    top: 60px;
    right: calc(50% - 166px);
    padding: 10px;
    z-index: 100;
        display: none;
}
.dragon-help:after {
content: '';
    position: absolute;
    width: 0;
    height: 0;
    top: -7px;
    left: 150px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid #800000;
}
@keyframes hover {
	25%{margin-top: 5px}
	75%{margin-top: -5px}
}

input {
  display: block;
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
  font-family: 'Lato', sans-serif;
}

.addMember input[type=file] {
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
.hidden {
display: none;
}

textarea {
  display: block;
  margin: auto;
  width: 895px;
  height: 200px;
  border: 0;
  border-left: 5px #343436 solid;
  background-color: #1b1b1b;
  color: #FFF;
  padding: 5px;
  resize: none;
  font-size: 16px;
  transition: border-color 0.5s;
  font-family: 'Lato', sans-serif;
}

textarea:focus, input:focus, button:focus{
  outline: none;
  border-color: maroon;
}

.choices {
  margin: 10px 45px;
}
.stagesOfDevCon {
  width: 100%;
  height: auto;
  min-height: 100px;
}
.hoverStage {
 width: 100%;
  height: 30px;
  position: relative;
  background: #1b1b1b;
}
.stage-bar {
  position: absolute;
  background: #800000;
  width: 0%;
  height: 100%;
  transition: width 0.5s;
}
.stageCon {
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 5;
  display: flex;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
}
.stage {
  width: 20%;
  text-align: center;
  color: #ad9440;
  font-size: 18px;
  line-height: 30px;
  border-right: 3px black solid;
  cursor: pointer;
}
.stage:last-child {
  border-right: 0;
}
.stage span {
  opacity: 0;
  transition: 0.5s;
}
.stage:hover span {
  opacity: 1;
}
.activeStage {
  opacity: 1 !important;
}
.milestones{
  display: flex;
  height: auto;
}
.dropped {
  height: 501px !important;
}
.dropDownStage {
  height: 0;
  width: 20%;
  border-right: 3px black solid;
  overflow-x: hidden;
  overflow-y: auto;
  transition: height 0.5s;
}
.dropDownStage:last-child {
  border-right: 3px black solid;
}
/*.addAnother {
  text-align: center;
    width: 18px;
    height: 18px;
    background: #800000;
    line-height: 18px;
    left: calc(50% - 10px);
    cursor: pointer;
    position: relative;
    border: 1px #ad9440 solid;
}*/


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
    /* background-color: #1b1b1b; */
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
    visibility: hidden;
}
.stageFile {
    background: black;
    height: 50px;
    width: calc(100% - 11px);
  border: 3px #565656 solid;
    position: relative;
    font-size: 14px;
    overflow: hidden;
    text-align: center;
  display: none;
}
.showStageFile {
  display: table;
}
.stageFile input{
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  height: 100%;
  opacity: 0;
    cursor: pointer;
}
.stageFile span {
    width: 100%;
    display: table-cell;
    vertical-align: middle;
  color: #ad9440;
}

</style>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header.html';?>
  <div id="dropDown">
    <div id="photoCon"></div>
    <div id="infoCon">
      <div id="member">
        <div id="left">
        <input type="text" name="member" placeholder="Name">
        <input type="text" name="role" placeholder="Role">
        <input type="text" name="character" placeholder="Character">
        <div id="memberButtons">
                  <button id="btnAdd">Add to Production</button>
                  <button id="btnFind">Can't Find the Person You're Looking For?</button>
        </div>
        </div>
        <div id="right">
          <div class="addMember" id="memberAddPhoto"><span>Member Photo</span></div>
          <div class="addMember" id="characterAddPhoto"><span>Character Photo</span></div>
        </div>
      </div>
    </div>
  </div>
<div id="dropDownCover"></div>
    
<div id="container">
<form action="/s140630php/createproduction.php" method="post" enctype="multipart/form-data">
  <div class="title">Enter Your Project Info</div>
  <div class="section text">
    <input type="text" name="prodTitle" placeholder="Project Title">
  </div>
  
  <div class="section text">
    <input type="text" name="prodRegion" placeholder="Region"></div>
  
    <div class="section text">
      <textarea type="text" name="prodDesc" placeholder="Description"></textarea>
      </div>
  <!--members and poster-->
  
  <div class="section">
      <div class="title">Genres</div>
    <div class="choices">
    <?php
    $query = "SELECT genreName FROM filmGenres ORDER BY genreName ASC";
	  $result = mysqli_query($db,$query);
  while($data = mysqli_fetch_array($result)) {
  echo '<div class="choice stageCheck"><div class="checkbox"><input type="checkbox" name="check[]" class="check" value="'.$data[0].'"></div>'.$data[0].'</div>';
  }
    ?>
  </div>
  </div>
  
  <div class="section" style="padding: 10px 45px;">
     <div class="title" style="margin: 10px 0px !important;">Add Members</div>
     	<div class="photoList" id="memberList">
              <div class="addMember" onclick="dropDown()"><span>Member</span></div>
              

         
    </div>
  </div>
  
    <div class="section" style="padding: 10px 45px;">
     <div class="title" style="margin: 10px 0px !important;">Add Posters</div>
     	<div class="photoList" id="postList">
              <div class="addMember">
              <input class="input-file" type="file" name="poster[]" accept="image/*">
              <span>Poster</span>
              </div>
              
    </div>
  </div>
  
  <div class="section hold">
    <div class="title">Pick the Stages of Development</div>
    
    <div class="stagesOfDevCon">
  <div class="hoverStage">
    <div class="stage-bar"></div>
    <div class="stageCon">
      <div class="stage"><span>Development</span></div>
      <div class="stage"><span>Pre-Production</span></div>
      <div class="stage"><span>Production</span></div>
      <div class="stage"><span>Post-Production</span></div>
      <div class="stage"><span>Sales & Distribution</span></div>
    </div>
  </div>
  <div class="milestones">
    <div class="dropDownStage"></div>
    <div class="dropDownStage"></div>
    <div class="dropDownStage"></div>
    <div class="dropDownStage"></div>
    <div class="dropDownStage"></div>
  </div>
</div>
  </div>
  
    <div class="section">
      <div class="title">What You Need</div>
            <textarea type="text" name="prodNeeds" placeholder="E.g. I need an actor..."></textarea>
  </div>
  
  
  <div class="section" style="text-align: center;">
    <!--<button>Submit</div>-->
    <input type="submit" value="Create Production">
  </div>
  </form>
</div>

<script type="text/javascript">
$(document).ready(function () {

	var dragonHelp = ["Here you can enter the title (ex. Big in Asia), region (ex. Hong Kong), and description of your project.", "Pick and choose different genres that your movie falls under. If you feel a genre is missing, please contact us and we'll review your choice.", "Add your project members here. The recommended photo is of a face or body shot of your member as their character.", "Add posters and photos of your production, which will appear in the slideshow sections of the production page.", "Choose your current stage of development and tick off the tasks that have been completed. These can be updated as the production is put together.", "Are you missing anything from your productions, such as an actor, prop, film location, etc? List what you need to help you create your final piece."];
	for (var sec = 0; sec < 6; sec++)
		$('.title').eq(sec).append('<div class="dragon"><div class="dragon-help">' + dragonHelp[sec] + '</div></div>');


  
  $('#dropDownCover').click(function () {
    $('#dropDown').fadeOut();
    $('#dropDownCover').fadeOut();
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
    		$('#photoCon').empty(); //Had to put this twice because it lags
    	 	for (var img = 0; img < data.length; img++) {
    	 		if (data[img].middleName != null)
    	 		name = data[img].firstName + ' ' + data[img].middleName + ' ' + data[img].lastName;
    	 		else
    	 		name = data[img].firstName + ' ' + data[img].lastName;
    	 		$('#photoCon').append('<div class="member-bar" data-memberID="' + data[img].memberID + '"><div class="member-bar-photo" style="background-image: url(/images/members/' + data[img].memberPhoto + ');"></div><div class="member-bar-name">' + name + '</div></div>');
    	 		if (img == 20)
    	 			break;
    	 	}
    	 	
    	 	$('.member-bar').click(function () {
		$('#member-active').attr('id', '');
		if (!$(this).attr('id'))
			$(this).attr('id', 'member-active');
		});
    	}
    });
    else
        $('#photoCon').empty();
});

	$(".input-file").change(function(){
	setPreview(this);
    	});
	
	$('#btnFind').click(function () {
		if(!$(this).hasClass('memberFind')) {
		$('#photoCon').css({
			'padding': '0',
			'height': '0'
		});
		$('#memberAddPhoto').show();
		$(this).text("Search Existing Members").toggleClass('memberFind');
		} else {
		$('#photoCon').css({
			'padding': '10px 0',
			'height': '325px'
		});
		$('#memberAddPhoto').hide();
		$(this).text("Can't Find the Person You're Looking For?").toggleClass('memberFind');
		}
	});
	
	$('#btnAdd').click( function () {
		var member = [$("#member-active").attr("data-memberID"), $("#member-active .member-bar-photo").css("background-image").replace('"', '\''), $("#member-active .member-bar-name").text(), $("#left input[name=role]").val(), $("#left input[name=character]").val()]
		$('#memberList').append('<div class="preview member" style="background-image: ' + member[1] + ';"><div class="member-drop"><div class="member-drop-name">' + member[2] + '</div><div class="member-drop-role">' + member[3] + '</div><div class="member-drop-character">' + member[4] + '</div></div><input type="hidden" name="member[]" value="' + member[0] + '"><input type="hidden" name="role[]" value="' + member[3] + '"><input type="hidden" name="character[]" value="' + member[4] + '"></div>');
	});
  
  
  //var genres = ["Horror", "Thriller", "Comedy", "Drama", "Romance", "Action", "Adventure", "Fantasy", "Western", "Animation", "Documentary", "Sci-Fi", "Musical", "Mystery", "Family", "Silent"], dev = [["Synopis", "Outline", "Treatment", "Screenplay", "Film Pitch", "Financial backing acquired"], ["Production budget", "Story Boards", "Crew hired", "Shooting schedule created", "Props, costumes, equitment, and makeup are bought"], ["Film shoot"], ["Footage is looked at", "Material is edited", "Music and sound effects added", "Visual effects added"]];
  /*for (var i = 0; i < genres.length; i++)
    $('.choices').append('<div class="choice"><div class="checkbox"><input type="checkbox" class="check"></div>' + genres[i] + '</div>');*/
  
  var dev = [["Synopis", "Outline", "Treatment", "Screenplay", "Film Pitch", "Financial backing acquired"], ["Production budget", "Story Boards", "Crew hired", "Shooting schedule created", "Props, costumes, equitment, and makeup are bought"], ["Film shoot"], ["Footage is looked at", "Material is edited", "Music and sound effects added", "Visual effects added"]], stage = ['development', 'preproduction', 'production', 'postproduction'], file = [[1, 1, 1, 1, 1, 0], [1, 1, 1, 1, 0], [0], [0, 0, 0, 0]];;
for (var i = 0; i < dev.length; i++) {
  for (var j = 0; j < dev[i].length; j++) {
  $('.dropDownStage').eq(i).append('<div class="choice stageCheck"><div class="checkbox"><input name="stageitem[]" type="checkbox" class="check" value="' + dev[i][j] + '"></div>' + dev[i][j] + '</div>');
    if (file[i][j])
    $('.dropDownStage').eq(i).append('<div class="choice stageFile"><input type="file" name="stageitem[]" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf"><span>Upload ' + dev[i][j] + '</span></div>');
  }
}
    /*$('.checkbox').click( function () {
  	  $(this).toggleClass('checked');
  	  if ($('.check').eq($('.checkbox').index(this)).prop('checked')) //:)
  	    	$('.check').eq($('.checkbox').index(this)).prop('checked', false);
  	    	else
  	    	$('.check').eq($('.checkbox').index(this)).prop('checked', true);
    });*/
  
  $('.stage').hover(function () {
  if ($('.activeStage').length < 1)
  $('.stage-bar').css('width', ($(".stage").index(this) * 20) + 20 + '%');
}).click(function () {
  if ($(this).children().hasClass('activeStage')) {
  $(this).children().toggleClass('activeStage');
      $('.dropDownStage').removeClass('dropped');
  } else {
  $('.activeStage').toggleClass('activeStage');
  $(this).children().toggleClass('activeStage');
    $('.stage-bar').css('width', ($(".stage").index(this) * 20) + 20 + '%');
    showMilestones($(".stage").index(this));
  }
});
  
  $('.stageCheck').click( function () {
  	  $(this).find('.checkbox').toggleClass('checked');
  	  if ($('.check').eq($('.stageCheck').index(this)).prop('checked')) {
  	    	$('.check').eq($('.stageCheck').index(this)).prop('checked', false);
  	    	  if($(this).next().hasClass('stageFile')) {
     			$(this).next().find('input').val('');
     			$(this).next().find('span').text('Upload ' + $(this).text());
     			}
  

     	  }else{
  	    	$('.check').eq($('.stageCheck').index(this)).prop('checked', true);
      	  }
  
  if($(this).next().hasClass('stageFile'))
     $(this).next().toggleClass('showStageFile');
	});

$(".stageFile input").change(function(){
  var toAdd = $(this).val();
  var fileToAdd = toAdd.substring(toAdd.lastIndexOf("\\") + 1);
  $(this).parent().find('span').text(fileToAdd);
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

function dropDown() {
  $('#dropDown').fadeIn();
    $('#dropDownCover').fadeIn();
}

function showMilestones(index) {
  for (var mile = 4; mile > index; mile--) {
 $('.dropDownStage').eq(mile).removeClass('dropped');
  }
  for (var mile = 0; mile < index + 1; mile++) {
    $('.dropDownStage').eq(mile).addClass('dropped');
  }
}
</script>
</body>
</html>