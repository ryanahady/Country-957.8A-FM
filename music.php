<?php
  include("xmlreader.php");
?> <!-- include php file -->

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Ryan Ahadizad - ryan.zad@gmail.com">
    <title>Country radio 957.8A FM | Listen to the most latest and exciting country music in Sydney!</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> 
    <link rel="icon" href="images/favicon.png" type="images/png" sizes="16x16">
    
    <!--   w3 stylesheet css -->  
    <link href="css/cloudflarefontawesome.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/w3css.css" rel="stylesheet" type="text/css" media="screen">
      
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/navFunction.js"></script>
    <script src="js/musicpagejs.js"></script>
    <script src="js/audio.js"></script> <!-- this audio file will go after jquery because we need to call jquery first -->
    
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
</head>

<body>
<!-- container -->
    <div class="container">
    <!-- header -->
            <header>
                <a href="index.php">
                <img src="images/banner.jpg" alt="banner" width="1145" height="192" title="Country Radio Station : located in innerwest Sydney Australia"/>
                </a>
            </header>
<!--   navigation  -->
      <nav>
        <ul class="topnav">
              <li><a href="index.php">Home</a></li>
              <li><a class="active" href="music.php">Music</a></li>
              <li><a href="pictures.php">Pictures</a></li>
              <li><a href="contactUs.php">Contact Us</a></li>
              <li class="icon">
                <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()"><i class="fa fa-bars"></i></a>
              </li>
        </ul>
      </nav>
    <!-- slider -->
        <div class="w3-content w3-display-container" style="max-width:1145px" id="slider">
          <img class="mySlides" src="images/slider1.jpg" alt="slider1" style="width:100%">
          <img class="mySlides" src="images/slider2.jpg" alt="slider2" style="width:100%">
          <img class="mySlides" src="images/slider3.jpg" alt="slider3" style="width:100%">
          <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
            <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          </div>
        </div>
            
         <script src="js/slider.js"></script>

      <div>
        <h1 id="thumb_title" style="text-align: center;margin-top: 2%;"><!-- music player title -->
          Somewhere On A Beach
        </h1>
      </div>
<!-- music player -->
      <div class="musicplayer">
        <img src="thumbnail/img1large.jpg" id="thumbnail_placeholder" alt="playerimg">
        <audio controls class="audiocontrol" id="mediaplayer">
            <source id="audio_location" src="mp3/DierksBentley.mp3" type="audio/mpeg"> <!-- songs in mp3 folder -->
        </audio>
        <?php getPlaylist('playlist.xml'); ?><!--  php xml data -->
      </div>

       <div class="musicpage-text">
          <p class="music-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <p class="music-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
       </div>


<!-- footer -->
         <footer>
          <section>
              <h2>Footer-heading</h2>
              <ul class="footerul">
                <li><a href="#">listitem1</a></li>
                <li><a href="#">listitem2</a></li>
                <li><a href="#">listitem3</a></li>
              </ul>
          </section>

          <section>
             <h2>Footer-heading</h2>
              <ul class="footerul">
                <li><a href="#">listitem1</a></li>
                <li><a href="#">listitem2</a></li>
                <li><a href="#">listitem3</a></li>
              </ul>
          </section>

          <section>
            <h2>Footer-heading</h2>
              <ul class="footerul">
                <li><a href="#">listitem1</a></li>
                <li><a href="#">listitem2</a></li>
                <li><a href="#">listitem3</a></li>
              </ul>
          </section>
        </footer>
      <div class="clear"></div>
        <div class="footerCopyright">
           <p class="footerP"><span id="demo"></span>
                <span> 
                  © All rights reserved, work by Ryan Ahadizad
                </span>
            </p>

            <script>
            var d = new Date();
            var n = d.getFullYear();
            document.getElementById("demo").innerHTML = d;
            document.getElementById("demo").innerHTML = n;
            </script>
        </div>
    </div> <!-- end of container -->
  <script src="js/lightbox-plus-jquery.min.js"></script>
</body>

</html>
