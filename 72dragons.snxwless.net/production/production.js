$(document).ready(function () {
var production = [["DEMONS WITHIN", "VIDA NUEVA VILLA NUEVA", "THE SEARCH FOR DOCTOR PEPE", "ASCALON AND THE SACRED SWORD", "ALL I NEED", "HAVE YOU TRIED _____?", "BIG IN ASIA", "THE DRAGON, THE DWARVES, AND A DARK MONSTER", "SUMMER IN THE SHADE", "THE MAGIC MAN", "MAN VERSUS LIFE", "HOUSE OF SHADOWS", "HOOKED", "IN MY SLEEP"], ["Nick D'ONOFRIO", "Sander APARICIO", "Brad MILLER", "Hilda APARICIO", "Alice MILLAR", "Antonio HO", "Marek STEENKAMP", "Hilda APARICIO", "Alice MILLAR", "Allen WOLF", "Allen WOLF", "Allen WOLF", "Allen WOLF", "Allen WOLF"], ["Development 2021", "Development 2018", "Development 2020", "Development 2020", "Development 2019", "Development 2019", "Production 2017", "Production 2017", "Production 2017", "Pre-Production 2020", "Development 2020", "Pre-Production 2019", "Development 2018", "Completed 2010"], ["https://cinando.com/img/film/Poster_274507.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/Content/images/noimg_film_poster.png?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/Content/images/noimg_film_poster.png?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_274441.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_274412.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_273574.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_273571.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_261966.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_261939.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_261894.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_261877.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_261853.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/Poster_183745.jpg?width=270&height=378&404=noimg_film_landscape.png", "https://cinando.com/img/film/546324.jpg?width=270&height=378&404=noimg_film_landscape.png"]]; //title, creator, stadge & year, image

for (var i = 0; i < production[0].length; i++) {
if (i == 1 || i == 2)
	console.log('d');
else
$('#movieList').append('<a href="http://72dragons.snxwless.net/production/movie.php"><div class="movieContainer" style="background-image: url(\'' + production[3][i] + '\');"><div class="moviedetails"><h3>' + production[0][i] + '</h3><h5>by ' + production[1][i] + '<br>' + production[2][i] + '</h5></div></div></a>');
}
  setTimeout(function () {
 $('#movieList').css({
      opacity: "1"
    });
      }, 1500);
});