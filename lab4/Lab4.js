$('#coverart').click(function(e) {
var i=0;
	$.ajax({
		type: "GET",
		url: "Lab4.json",
		dataType: "json",
		success: function(responseData, status) {
			var title = '';
			var album = '';
			var artist = '';
			var date = '';
			var genre = '';
			$.each(responseData.song, function(i, item) {
				// body...
				title += '<li>' + item.songname + "</li>";
				album += '<li>' + item.albumname + "</li>";
				artist += '<li>' + item.artistname + "</li>";
				date += '<li>' + item.releasedate + "</li>";
				// genre += '<ul class='genrecontainer'>';
				genre += '<ul class="genrecontainer">';
				$(item.Genres).each(function(i, gen) {
					// alert(i+')' + gen.Genre);
					genre += '<li>' + gen.Genre + "</li>";
				});
				genre += '</ul>';
				// alert(genre);
				// we want to replace the first a and img tags with real data, then want to clone and update the rest.
				// We want 1 item for each entry in the json file, not each entry plos the one that was already there
				// to show the nocover image.
				if(i==0) {
					$("a").last().attr("href", item.artistsite).text(item.artistsite);
					$("img").last().attr("src", item.albumURL);
				}
				else {
					$(".siteli").last().clone().appendTo("#site");
					$("a").last().attr("href",item.artistsite).text(item.artistsite);
					$(".coverli").last().clone().appendTo("#coverart");
					$("img").last().attr("src",item.albumURL);
				}
			});
			$("#title").html(title);
			$("#album").html(album);
			$("#artist").html(artist);
			$("#date").html(date);
			$("#genres").html(genre);
			$(".footer").html('<li>End of List</li>');
		}, 
		error: function(msg) {
		alert("There was a problem: " + msg.status + " " + msg.statusText);
		}
	});
});

