$(document).ready(function() {
});


function changeSongDetails(song_name) 
{
	var artist_name = {"Uyire":"Benny Dayal", "Mizhikalil": "Prasanth, Arunimalekshmi", "Azhage Va":"Jishnu Sudarsan"};
	
	var composer_name = {"Uyire":"Jishnu Sudarsan", "Mizhikalil": "Vivek Prabhakar", "Azhage Va":"Jishnu Sudarsan"};
	
	var genre = {"Uyire":"Pop", "Mizhikalil":"Indi Fusion", "Azhage Va":"R&B"};
	var song_path = {"Uyire":"mp3songs/Uyire - Benny Dayal", "Mizhikalil": "mp3songs/Mizhikalil - Arunimalekshmi, Prashanth Prabhakar", "Azhage Va":"mp3songs/Azhage Va - Jishnu Sudarshan"};
	var song_images={"Uyire":"img/Kerala/Uyire/song.png","Mizhikalil": "img/Kerala/Mizhikalil/song 2_00000.jpg","Azhage Va":"img/Kerala/Azhage-Va/song_00000.jpg"};
	$('#song_name').html(song_name);
	$('#artist_name').html(artist_name[song_name]);
	$('#genre').html(genre[song_name]);
	$('#composer').html(composer_name[song_name]);
	$('#img_name').attr('src',song_images[song_name]);
	$('#song_file').attr('data',song_path[song_name]);

}
