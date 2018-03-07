function startCarousel(type, speed) {
  switch (type) {
    case 'instagram':
        setInterval(function () {
          $('#insta .insta').css('left', '-=1px');
          if ($('#insta .insta').first().offset().left < -520) {
            $('#insta .insta').first().appendTo($('#insta'));
            $('#insta .insta').css('left', "+=520px");
          }
        }, speed);
      break;
    case 'facebook':
      break;
    case 'youtube':
         setInterval(function () {
          $('#youtube .insta').css('left', '-=1px');
          if ($('#youtube .insta').first().offset().left < -520) {
            $('#youtube .insta').first().appendTo($('#youtube'));
            $('#youtube .insta').css('left', "+=520px");
          }
        }, speed);
      break;
    default:
      break;
  }
}

$(document).ready(function () {


var staff = [["https://cinando.com/en/People/Image/57735", "https://cinando.com/en/People/Image/371753", "https://cinando.com/en/People/Image/77874", "https://cinando.com/en/People/Image/371150", "https://cinando.com/en/People/Image/371152", "https://cinando.com/en/People/Image/268015", "https://cinando.com/en/People/Image/374059", "https://cinando.com/en/People/Image/57734", "https://cinando.com/en/People/Image/363105", "https://cinando.com/en/People/Image/357359", "https://cinando.com/en/People/Image/387068"], ["Brad MILLER", "Antonio HO", "Jose Pietro APARICIO", "Alice MILLAR", "Jason WIEDER", "Hilda APARICIO SIERRA", "Walter NOBLES", "Allen WOLF", "Nick D'ONOFRIO", "Sander APARICIO", "Rachel CADDEN"], ["CEO", "Head of Acquisitions & Legal", "Exec. Producer", "Director - Producer", "Producer", "Writer - Director", "Assistant Director", "Writer - Director - Producer", "Writer - Producer", "Production Assistant", "-"], ["Management, Production, Legal/Finance", "Management, Legal/Finance", "Production, Legal/Finance", "Production", "Management, Production, Sales", "Production", "-", "Production", "Production", "Production Assistant", "-"], ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11"]];


for (var s = 0; s < staff[0].length; s++) {
	$('#movieList').append('<div class="staffProfileContainer" style="background-image: url(\'' + staff[0][s] + '\');"><div class="staffdetails"><h3>' + staff[1][s] + '</h3><h4><u>' + staff[2][s] + '</u><br>' + staff[3][s] + '</h4><div class="viewdetails"><a href="/about/staff?id=' + staff[4][s] + '">View More</a></div></div></div>');	
}

$.ajax ({
  url: 'https://api.instagram.com/v1/users/3988007185/media/recent/?access_token=3988007185.9b4898d.7a8ffcfd39324eca80042fed4035d69b',
    success: function(data){
      
      for (var i = 0; i < 15; i++) {
                $("#insta").append('<div class="insta panel"><div class="instaImage"><a target="blank_" href="' + data.data[i].link + '"><img src="' + data.data[i].images.low_resolution.url + '"></a></div><div class="instaDetails"><div class="instaTop"><a href="https://www.instagram.com/' + data.data[i].user.username + '/" target="blank_"><div class="instaUser"><div class="instaUserProfile"><img src="' + data.data[i].user.profile_picture + '"></div><div class="instaUserName">' + data.data[i].user.full_name + '<br>@' + data.data[i].user.username + '</div></div></a><div class="instaLikes"><span class="instaHeart">♡</span><br><span class="instaLikesCount">' + data.data[i].likes.count + '</span></div></div><div class="instaDescription">' + data.data[i].caption.text + '</div></div></div>');
      }
       $('.instaLikes').click(function () {
  $(this).contents().eq(0).css('color', 'red');
});
      
      startCarousel("instagram", "50");
    }
});


$.ajax ({
  url: 'https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UC9zmUnMUiuVyYv-9gnl4T_w&maxResults=50&order=date&key=AIzaSyBEmYpoxm3z6jj9UqJcjc5crbj8j_e6CJ4',
    success: function(data){
      
      for (var i = 0; i < 30; i++) {
                $("#youtube").append('<div class="insta panel"><div class="instaImage"><a target="blank_" href="https://www.youtube.com/watch?v=' + data.items[i].id.videoId + '"><img src="' + data.items[i].snippet.thumbnails.high.url + '"></a></div><div class="instaDetails"><div class="instaTop"><a href="https://www.youtube.com/channel/' + data.items[i].snippet.channelId + '/" target="blank_"><div class="instaUser"><div class="instaUserProfile"><img src="https://yt3.ggpht.com/-t96fqQLq5X4/AAAAAAAAAAI/AAAAAAAAAAA/jrqMAy0Rje0/s288-c-k-no-mo-rj-c0xffffff/photo.jpg"></div><div class="instaUserName">' + data.items[i].snippet.channelTitle + '</div></div></a></div><div class="instaDescription">' + data.items[i].snippet.title + '<br><i>' + data.items[i].snippet.description + '</i></div></div></div>');
      }
       $('.instaLikes').click(function () {
  $(this).contents().eq(0).css('color', 'red');
});
      
      startCarousel("youtube", "100");
    }
});

  setTimeout(function () {
    $('.hack').css({
      opacity: "1"
    });
        $('#movieList').css({
      opacity: "1"
    });
  }, 1500);
  
});