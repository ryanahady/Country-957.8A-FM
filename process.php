  <?php 
  //Create variable for our posted values 
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $gender = $_REQUEST['gender'];
  $city = $_REQUEST['city'];
  //$newsletter = $_REQUEST['newsletter'];
  $comments = $_REQUEST['comments'];
  //print the received data:
  echo 
  "<p>Your name is '$name'</p>
   <p>Your email is '$email'</p>
   <p>Your gender is '$gender'</p>
   <p>Your city is '$city'</p>
   <p>You commented: '$comments'</p>";

  if(isset($_POST['newsletter']))
    echo "Subscribed";
  else
    echo "Not Subscribed";

   //DATA PROCESSING
   $to="ryan.zad@gmail.com";
   $headers = "From: " . $email;
   $msg = $comments;
   $subject = "Site Enquiry";

   //send email through php
   $result = true; 
   // mail($to,$subject,$msg,$headers);

   if($result==true)
    echo"<p>Sent</p>";
  else
    echo"<p>Not Sent</p>";
  ?>