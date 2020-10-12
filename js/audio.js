$(document).ready(function(){
    $(".title").click(function(){
        //get rel id of clicked element
        var targetTrackid = $(this).attr("rel");
        var thumbFolder="thumbnail/";
        var audioFolder="mp3/";

        //ajax call to php script
        $.ajax({
              method: "POST",
              url: "trackloader.php",
              data: { trackid : targetTrackid },
              dataType: "json"
            })
        //update media sources
              .done(function( response ) {
               $("#thumbnail_placeholder").attr("src", thumbFolder + response.thumbnail);
               $("#audio_location").attr("src", audioFolder + response.audio);
               $("#thumb_title").html(response.title);

               //var trackId = $(this).attr("rel");
      
                //reload player
                var player = $("#mediaplayer")[0];
                // var player = document.getElementById("audio_player");
                player.pause();
                player.load();
                player.play();
              });
    	
    	  
    });
});

