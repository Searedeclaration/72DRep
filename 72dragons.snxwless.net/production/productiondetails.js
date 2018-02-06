var profiles = [["https://cinando.com/en/People/Image/371753", "https://scontent.fhkg3-2.fna.fbcdn.net/v/t1.0-9/18222584_1189433521183755_968363601832947920_n.jpg?oh=7cd6fc50c7fb926a1803041c483b1378&oe=5AB41FF3", "https://scontent.fhkg3-2.fna.fbcdn.net/v/t1.0-9/18194774_1190463797747394_6550297399681380493_n.jpg?oh=736ee1d5078d84ab54dcedc01f2b4daa&oe=5AC4FE36", "https://scontent.fhkg3-2.fna.fbcdn.net/v/t1.0-9/18198722_1189438371183270_1665120169371296316_n.jpg?oh=8e3126a7a0834494a8916ecc19975c41&oe=5AB283C3", "https://scontent.fhkg3-2.fna.fbcdn.net/v/t1.0-9/18221921_1189440091183098_6319418495809268652_n.jpg?oh=c13799b3b96fb73976bcfdae8ddc417e&oe=5AF7F88D", "https://scontent.fhkg3-2.fna.fbcdn.net/v/t1.0-9/18222211_1190463577747416_2652578281329113687_n.jpg?oh=80d8257f79978b70c53b14c34e4b65df&oe=5AB3ADA5", "https://scontent.fhkg3-2.fna.fbcdn.net/v/t1.0-9/18221803_1191238247669949_4793561740525723060_n.jpg?oh=7627674d14eb96fbcee767119d13a205&oe=5AF8E0D5", "https://scontent.fhkg3-2.fna.fbcdn.net/v/t1.0-9/18199239_1191238307669943_8674650333036307895_n.jpg?oh=894048e05701e7bd88dd14807992fccc&oe=5AB9CFB7"], ["Antonio Ho", "Susan Morgan", "Stephen Hogan", "Ivan Idzik", "Kiefer Choi", "Manda Wong", "Jenn Fong", "Emma Herbert"], ["Andy Ho", "Barbara Francesca", "Ethan Hunt", "Adam Butler", "Director", "Kiki Chen", "Christina Yu", "Charlie the bartender"]], banner = ["https://cinando.com/img/film_big/1068858.jpg", /*"https://cinando.com/img/film_big/1058813.jpg", "https://cinando.com/img/film_big/1065234.jpg", "https://cinando.com/img/film_big/1065266.jpg",*/ "https://cinando.com/img/film_big/1018130.jpg", "https://cinando.com/img/film_big/1018132.jpg", "https://cinando.com/img/film_big/1018133.jpg"], bannerCount = 1;



function popup(content, type) {
  $('#dropDownTitle').html("");
  $('#dropDownContent').html("");
  $('#dropDown').css('top', '150px');
  $('#dropDownCover').fadeIn();
  $('body').css('overflow', 'hidden');
  switch(type) {
    case 'cover':
      $('#dropDownTitle').append($('#info h1').text() + " COVER");
      $('#dropDownContent').append("<img src='https://cinando.com/img/film/Poster_273571.jpg?width=267&height=388&404=no-img-product.jpg'>");
      break;
    case 'event':
  $('#dropDownTitle').append($(content).find('h3').text() + " - " + $(content).find('.eventMonth').text() + " " + $(content).find('.eventDay').text());
  $('#dropDownContent').append($(content).find('span').text());
      break;
    case 'news':
  $('#dropDownTitle').append($(content).find('h3').text());
  $('#dropDownContent').append("<img src='" + $(content).find('img').attr('src') + "'><br>" + $(content).find('span').text());
      break;
    default:
      break;
  }
}



$(document).ready(function () {

for (var i = 0; i < profiles[0].length; i++) {
  $('#crewList').append('<div class="crewMember"><div class="memberName">' + profiles[1][i] + '</div><div class="characterName"> As "' + profiles[2][i] + '"</div></div>');
  $('.crewMember').last().css('background-image', 'url(' + profiles[0][i] + ')');
}
  setInterval(function () {
    $('#banner').css('background-image', 'url(' + banner[bannerCount++] + ')');
    if (bannerCount == banner.length)
      bannerCount = 0;
  }, 10000);


  $("#dropDownClose").click(function () {
    $('#dropDown').css('top', '-500px');
    $('#dropDownCover').fadeOut();
    $('body').css('overflow', 'auto');
  });
  $("#dropDownCover").click(function () {
    $('#dropDown').css('top', '-500px');
    $('#dropDownCover').fadeOut();
    $('body').css('overflow', 'auto');
  });
    $('#banner').css('background-image', 'url(' + banner[bannerCount - 1] + ')');
  
setTimeout(function () {
  $('.shadow').fadeIn();
  $('#trailer').fadeIn();
  $('#trailer').get(0).play();
  document.getElementById('trailer').addEventListener('ended',myHandler,false);
    function myHandler(e) {
          $('.shadow').fadeOut();
  $('#trailer').fadeOut();
    }
}, 10000);
  

  
/*Carousel*/
$('.carousel').each(function () {
    $('.carousel').append('<img class="bannerImage" src=' + banner[0] + ' id="carouselActive">');
  for (var i = 1; i < banner.length; i++) {
      $('.carousel').append('<img class="bannerImage" src=' + banner[i] + '>');
  }
  var t = function carousel() {
    if ($('#carouselActive').next().hasClass('bannerImage') == true) {
    $('#carouselActive').fadeOut('500').removeAttr('id').next().fadeIn('500').attr('id', 'carouselActive');     $('#activeTab').removeAttr('id').next().fadeIn('500').attr('id', 'activeTab');
    } else {
  $('#carouselActive').fadeOut('500').removeAttr('id');
  $('.bannerImage').first().fadeIn('500').attr('id', 'carouselActive');
      $('#activeTab').removeAttr('id');
      $('.tab').first().fadeIn('500').attr('id', 'activeTab');
    }
  }

  var runCarousel = setInterval(t, 7500);

  $('.carousel img').each(function () {
    $('.carousel .tabs').append('<div class="tab"></div>');
    $('.tab').first().attr('id', 'activeTab');
  });

  $('.tab').click(function () { 
    $('#carouselActive').fadeOut('500').removeAttr('id');
    $('.bannerImage').eq($(this).index()).fadeIn('500').attr('id', 'carouselActive');
    $('#activeTab').removeAttr('id');
    $(this).fadeIn('500').attr('id', 'activeTab');
    clearInterval(runCarousel);
    runCarousel = setInterval(t, 7500);
  });
});
  });
