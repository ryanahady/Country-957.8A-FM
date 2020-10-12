<?php
	function getTrackInfo($filename, $trackId){

		$doc = new DOMDocument;

		// We need to validate our document before refering to the id
		// Validate our XML document
		$doc->validateOnParse = true;

		// Load external XML file
		$doc->Load($filename);

		//Target specific element by ID
		$targetTrack = $doc->getElementById($trackId);

		//Output node values based on selected tags
		$targetTitle = $targetTrack->getElementsByTagName('title')->item(0);
		$targetAlbum = $targetTrack->getElementsByTagName('album')->item(0);
		$targetArtist = $targetTrack->getElementsByTagName('artist')->item(0);
		$targetGenre = $targetTrack->getElementsByTagName('genre')->item(0);
		$targetAudio = $targetTrack->getElementsByTagName('audio')->item(0);
		$targetThumbnail = $targetTrack->getElementsByTagName('thumbnail')->item(0);

		//json array
		$data = array();
		$data["title"] = $targetTitle->nodeValue;
		$data["album"] = $targetAlbum->nodeValue;
		$data["artist"] = $targetArtist->nodeValue;
		$data["genre"] = $targetGenre->nodeValue;
		$data["audio"] = $targetAudio->nodeValue;
		$data["thumbnail"] = $targetThumbnail->nodeValue;

		//output json values of the target track
		echo json_encode($data);

	}


	function getPlaylist($filename){
		$doc = new DOMDocument;

		// We need to validate our document before refering to the id
		// Validate our XML document
		$doc->validateOnParse = true;

		// Load external XML file
		$doc->Load($filename);

		//Target specific element by ID
		$tracks = $doc->getElementsByTagName("track");

		foreach($tracks as $temp){
			$title = $temp->getElementsByTagName('title')->item(0);
			$album = $temp->getElementsByTagName('album')->item(0);
			$artist = $temp->getElementsByTagName('artist')->item(0);
			$genre = $temp->getElementsByTagName('genre')->item(0);
			$audio = $temp->getElementsByTagName('audio')->item(0);
			$thumbnail = $temp->getElementsByTagName('thumbnail')->item(0);
			$trackId = $temp->getAttribute("xml:id");
			
			echo "<div class='title' rel='".$trackId."'>".$title->nodeValue." ( ".$album->nodeValue." ) ".
				 "<img src='images/arrowbutton.png' alt='arrow' title='click here!' class='playbtn'>".
				 "</div>";
			echo "<div class='album' >Album: ".$album->nodeValue."</div>";
			echo "<div class='artist' >Artist: ".$artist->nodeValue."</div>";
			echo "<div class='genre' >Genre: ".$genre->nodeValue."</div>";
			
		}
	}
	// call function
	// getPlaylist('playlist.xml');
?>