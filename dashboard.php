<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
           *{
    margin: 00;
    padding: 00;
}
body{
            background-color:orangered;
            
        }
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 350px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 350px) {
  .text {font-size: 11px}
}
.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.main_body{
    background-color: orangered;
}
#hearder{
    width: 100px;
    display: flex;
}
#logo{
    margin-top: 20px;
    width: 1000px;
    height: 150px;
    color:yellow;
    display: flex;
    gap:5px;
    margin-left: 50px;
}
p{
    margin-top: 80px;
    width: 400px;
    font-size: larger;
}
h1{
    
    font-style: italic;
    font-size: 100px;
}
#sign{

color: yellow;
margin-top: 100px;
margin-left: 350px;
font-size: 30px;
width: 1500px;
}
#cont{
  display: flex;
  margin-top: 50px;

}
#open{
  width: 600px;
  height: 350px;
  margin-left: 15px;
  padding-top: 70px;
  padding-left: 70px;
}
.slideshow-container{
  width: 600px;
  height: 400px;
  text-align: center;
  font-size: large;
  margin-left: 50px;


}
#dot{
  margin-left: 150px;
}
h3{
  font-size: 30px;
  margin-top: 20px;
}
#ord{
  margin-top: 30px;
}
#open a{
  background-color: white;
  font-size: 20px;
}
*a{
text-decoration: none;

}
#pic{
  margin-top: 15px;
  margin-left: 200px;
  display: flex;
  gap: 15px;}
#nam{
  font-size: 20px;
  margin-top: 70px;
  display:flex;
}

</style>



        
     

    
</head>
<body>
    <div class="main_body">
      <div id="hearder">
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776;</button>
         </div>
          <div id="logo">
          <h1>G</h1>
            <p>GOLD CHEF</p>
          </div> 
          <div id="pic">
            <div><img src="images/n1.jpg" style="width: 150px;height: 120px; border-radius: 15px;"></div>
            <div id="nam">
             Welcome <?php echo $_SESSION["uname"] ;?> 
            </div>
          </div>
          
          <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="menu_list.php">Menu</a>
            <a href=""> my acctant<a/>
          </div>
          
          
        </div>
 
      <div id="cont">
        <div id="open">
            <div>
              <h3>GREAT NEIGHBORS</h3>
             <h3> DESERVE GREAT FOOD</h3>
            </div>
            <a href="drct.html ">ORDER ONLINE NOW</a>
            
        </div>
          <div class="slideshow-container">

            <div class="mySlides fade">
             
              <img src="images/images-1.jpg" style="width: 600px; height: 350px;">
          
             </div>
            
             <div class="mySlides fade">
             
              <img src="images/images-3.jpg" style="width: 600px; height: 350px;">
              
             </div>
            
             <div class="mySlides fade">
              
              <img src="images/images-4.jpg" style="width: 600px; height: 350px;">
              
            </div>
            <div class="mySlides fade">
              
              <img src="images/images.jpg" style="width: 600px; height: 350px;">
            
            </div>
            <div class="mySlides fade">
             
              <img src="images/images-5.jpg" style="width: 600px; height: 350px;">
          
            </div>
            <div style="text-align:center" id="dot">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
          
        </div> 
            <br>
            
            </div>    
    
        
            
    </div></div>
        
    
   
    

        <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
            </script>
</body>

    
</div>
</html>
