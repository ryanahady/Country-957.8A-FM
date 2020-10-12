<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Ryan Ahadizad - ryan.zad@gmail.com">
    <title>Country radio 95.3 FM | Listen to the most latest and exciting country music in Sydney!</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="icon" href="images/favicon.png" type="images/png" sizes="16x16">
    
<!--   w3 stylesheet css -->  
    <link href="css/cloudflarefontawesome.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/w3css.css" rel="stylesheet" type="text/css" media="screen">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> 

      
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/contact-page.js"></script>
    <script src="js/navFunction.js"></script>
    <script src="js/ajaxform.js"></script>
    
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
<!--     navigation  -->
      <nav>
        <ul class="topnav">
              <li><a href="index.php">Home</a></li>
              <li><a href="music.php">Music</a></li>
              <li><a href="pictures.php">Pictures</a></li>
              <li><a class="active" href="contactUs.php">Contact Us</a></li>
              <li class="icon">
                <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()"><i class="fa fa-bars"></i></a>
              </li>
        </ul>
      </nav>

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

<!-- contact form -->
        <div class="col1 form-contact"> <!-- gets data from process.php and displays on contactus page -->
         <form action="process.php" method="post" id="myForm">  <!--  post method is more secure -->
                <h1 id="contacth1-contact">Contact Us</h1>
                
                <p>Username:<input name="name" type="text" value="" size="25" maxlength="40" id="username-input" placeholder="Enter Username" required/></p>
                <p>User Email:<input name="email" type="email" size="25" placeholder="Enter Email" required/></p>
                
                <p>Gender</p>
                  <p><input type="radio" name="gender" value="male" > Male</p>  
                  <p><input type="radio" name="gender" value="female" > Female</p> 
                
                <p>Choose your city:
                <select name="city">
                 <option value="">select</option>
                    <option value="Sydney">Sydney</option>
                    <option value="Melbourne">Melbourne</option>
                    <option value="Canberra">Canberra</option>
                </select>
                </p>
                
<!--                <p>Want to be contacted by</p>
                
                <input type="checkbox"  value="phone" name="source" /> Phone<br/>
                <input type="checkbox" value="email" name="source" /> Email<br/>
                <input type="checkbox" value="appointment" name="source" /> Appointment<br/>-->
                
                <p><input type="checkbox"  checked="checked" value="" name="newsletter" />Would you like to receive a newsletter
                </p>
                

                Comments
                <p><textarea name="comments" cols="35" rows="5">Enter your comments</textarea></p>
                
                <p><input class="buttoncontact" type="submit" value="Send it" name="submit" />
                   <input class="buttoncontact" type="reset" value="Reset all!" />
                </p>
          </form>
          <!-- making contact page with ajax so it doesn't redirect you to php page but displays onscreen -->
          <div id="formresult"></div>  
        </div>

      
       


<!-- map -->
        
        <div class="col2 col-map">
          <iframe id="addressmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.425314732185!2d151.21142951521045!3d-33.87869858065345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae17a88ba3c9%3A0xf017d68f9efa0d0!2sOxford+Square%2C+63+Oxford+St%2C+Darlinghurst+NSW+2010!5e0!3m2!1sen!2sau!4v1462428144604"  style="border:0; width:100%; height:600px;" allowfullscreen></iframe>
        </div>
       
<!--   footer  -->
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

</body>

</html>

