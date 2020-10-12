<?php

if(isset($_REQUEST["trackid"]) && $_REQUEST["trackid"] !=""){
//capture trackid sent by ajax
$trackId = $_REQUEST["trackid"];

//get details on specific track by trackid
include("xmlreader.php");
getTrackInfo("playlist.xml", $trackId);
}
else{
	echo "no data supplied";
}


?>