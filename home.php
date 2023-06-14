<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Harari Nasheed</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

  

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#artist" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Artist</a>
    <a href="php-contact-form/contact-view.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <a href="lyrics1.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LYRICS</a>
    <a href="user-registration.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>
   
    <div class="w3-dropdown-hover w3-hide-small">
      
    </div>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">    LOGOUT  </a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#home" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="php-contact-form/contact-view.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#artist" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ARTIST</a>
  <a href="#lyrics" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LYRICS</a>
  <a href="user-registration.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LOGIN</a>

</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="45207504405_9ae1e62fa5_b.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h4 style="color:rgb(24, 6, 2);">  Harar</h4><br>
      <p style="color:rgb(0, 3, 6);"  style="font-size:50px;"></p> </p>
        
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="7cc8e98f818b7ea894211d4577a9b45f.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Jogol</h3>
      <p><b>Wellcome</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="Harar-Jugol.jpg"style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Harar </h3>
      <p><b>MUSIAM</b></p>    
    </div>
  </div>

  <!-- The artist Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="artist">
    <h2 class="w3-wide">بِسْمِ ٱللّٰهِ ٱلرَّحْمٰنِ ٱلرَّحِيم</h2>
    <p class="w3-opacity"><b>الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ</b></p>
    <center> <b>አላሁ ሱምቤ ኦር ኩት ራህመተኛ ፊዝቤ በረህቲ ዛልባቤ አግላኽ። አላሁ ገደረመ ተቤጀዋ ሉከኽዞው ኡሱእ ወልዲሌ የቡረዱ ኩት ዚትመለሁማ ዚትላኹዋ ኢንሌ ኑር ቀልቢሌ ደውዋ ዚኻኑ ነቢዚኛ ሙሐመድቤ ﷺ ሠላት ዋ ሰላመት የንበርበዩ ኢላኽ። ኢቆት በሪው ዚከፈተሌነ አላሁሌ ሐምዲዋ ሹክሪ ኪለገበእኹ ቁርኣንዋ ሐዲስ ኡሱእ ወልዲ ቁኑእ ዳንዲው ዪሊጥባ ኩት ዚትሰጤው ዚአላሁ ኒዕመት ነትዞው አትቂጥባኽ።</b></center>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Remedan Tewfik</p>
        <img src="photo_2023-06-11_12-01-34.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Munib Mahammed</p>
        <img src="photo_2023-06-11_12-01-33.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Ishaq Eidris </p>
        <img src="photo_2023-06-11_12-01-31.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Reyhan Nesheed Group</h2>
      <p class="w3-opacity w3-center"><i></i></p><br>
    
<!--yi ataybe reyhan nasheda group zatu 1 3 mosha-->
      <ul class="w3-ul w3-border w3-white w3-text-grey">

      </ul>
<!--image of the  3 country of ethioppia adis,harar and dire-->
      
          
          <div class="w3-container w3-white">
            <p><b></b></p>
            <p class="w3-opacity"></p>
            <p></p>
            <ol>
              <!--track 1-->
              <p>Uhibuka Ya Rasullah</p>
              <li><audio controls>
               
                <source src="C:\xampp\htdocs\user_\REYHAN\09 Track 09 Uhibuka.mp3" type="">
                         <source src="horse.mp3" type="audio/mpeg">
                      
                       </audio></li>
                       <p>Nur Muhammadow </p>
              <li><audio controls>
                <!--track 2 -->
                <source src="C:\xampp\htdocs\user_\REYHAN\02 Track 2.mp3" type="">
                         <source src="horse.mp3" type="audio/mpeg">
                      
                       </audio></li>
                       <p>Haya Alasalah</p>
                  <!--track 3 -->     
              <li><audio controls>
                <source src="C:\xampp\htdocs\user_\REYHAN\03 Track 3.mp3" type="">
                         <source src="horse.mp3" type="audio/mpeg">

                       </audio></li>
                       <p>Salatullah</p>
                      <li><audio controls>
                        <!--track 4-->
                        <source src="C:\xampp\htdocs\user_\REYHAN\04 Track 4.mp3" type="">
                                 <source src="horse.mp3" type="audio/mpeg">
                               
                               </audio></li>
                               <p>Nitrahamikuta:</p>
                          <!--track 5 -->     
                      <li><audio controls>
                        <source src="C:\xampp\htdocs\user_\REYHAN\01 Track 1.mp3" type="">
                                 <source src="horse.mp3" type="audio/mpeg">
                               
                               </audio></li>
                               <p>Islaminta Dine</p>
                                <!--track 6-->
              <li><audio controls>
                <source src="C:\xampp\htdocs\user_\REYHAN\06 Track 06.mp3" type="">
                         <source src="horse.mp3" type="audio/mpeg">
                       
                       </audio></li>
                       <p>Alfsalat</p>
              <li><audio controls>
                <!--track 7-->
                <source src="C:\xampp\htdocs\user_\REYHAN\07 Track 7.mp3" type="">
                         <source src="horse.mp3" type="audio/mpeg">
                        
                       </audio></li>
                       <p>Fidaka</p>
                  <!--track 8 -->     
              <li><audio controls>
                <source src="C:\xampp\htdocs\user_\REYHAN\08 Track 8.mp3" type="">
                         <source src="horse.mp3" type="audio/mpeg">
                       Your browser does not support the audio element.
                       </audio></li>
                       <p>Click on the play button to play a sound:</p>
                       <li><audio controls>
                        <source src="REYHAN\06 Track 6.mp3" type="">
                                 <source src="horse.mp3" type="audio/mpeg">
                               
                               </audio></li>
                               <p>Wadaj</p>
                      <li><audio controls>
                        <!--track 9-->
                        <source src="C:\xampp\htdocs\user_\REYHAN\10 Track 10.mp3" type="">
                                 <source src="horse.mp3" type="audio/mpeg">
                              
                               </audio></li>
                               <p>Megal Baytizina</p>
                          <!--track 10 -->        
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>




 
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<img src="Harer Neshida 2 cd.jpg"class="w3-image w3-greyscale-min" style="width:100%">

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class=""><a href="https://www.instagram.com/remedan_tewfik5" class="fa fa-instagram"></a></i>
  <i class="fa fa-telegram w3-hover-opacity"> <a target = "" href='https://t.me/ramitewfik'><i class="fa-telegram w3-hover-opacity"></i></a></i>
  <p class="w3-medium">By Remedan Tewfik </p>

  <!-- Social Links Container -->
<div class="row social" align="center">
  
  
 </div>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>