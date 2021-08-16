<?php

  session_start();
  if (!isset($_SESSION['uname'])) {
    echo "You are logged out";
    header("location:login.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Attractions</title>
  <style type="text/css">


*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
  <link rel="stylesheet" href="historical.css">
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
	<style type="text/css">
	<title>Login</title>
	body
{
	background-color: #EDEDED;
}
.main-menu {
    display: flex;
    list-style: none;
    margin: auto 0;
    padding: 0.6em 0 0 0;
    font-family: 'Roboto Slab', serif;
}

.main-menu > li {
    box-sizing: border-box;
    height: 50px;
    width: calc(3.5 * 100px);  
    line-height: 50px;
    padding: 0 2em;
    margin: 1px;
    transition: 0.5s linear all;
    background: #396385;
    color: #8AF7EE;
    cursor: pointer;
    font-size: 16px;
    user-select: none;
}

.main-menu > li:not(.with-submenu) {
    clip-path: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
    shape-outside: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
}

.main-menu > li:nth-child(2) {
    transform: translateX(-5%);
}

.main-menu > li:nth-child(3) {
    transform: translateX(-12%)
}

.main-menu > li:nth-child(4) {
    transform: translateX(-10%)
}
.main-menu > li:nth-child(5) {
    transform: translateX(-15%)
}
.main-menu > li:nth-child(6) {
    transform: translateX(-20%)
}
.main-menu > li:nth-child(7) {
    transform: translateX(-25%)
}
.main-menu > li:hover:not(.active) {
    background: linear-gradient(to right, #396385, #099c95);
    color: #FFF;
}

.main-menu > li:active:not(.active),
.main-menu > li:active:not(.with-submenu){
    background: #099c95;
    color: #FFF;
}

.main-menu > li:hover i:not(li.active) {
    color: #175c58;
}

.main-menu .active {
    color: #FFF;
    background: #099c95;
    cursor: default;
    font-size: 18px;
}
.submenu {
    display: none;
    position: absolute;
    z-index: 10;
    list-style: none;
    left: 0;
    margin: 0;
    padding: 0;
    min-width: calc(3.5 * 50px - 5%);
    box-shadow: 5px 5px 5px #CCC;
}

.with-submenu {
    position: relative;
    display: inline-block;
    clip-path: polygon(10% 0%, 0% 100%, 0% 500%, 95% 500%, 95% 100%, 100% 50%, 95% 0%);
    shape-outside: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
}

.with-submenu:hover .submenu {
    display: block;
}

.submenu > li {
    background: #dedede;
    border-bottom: 1px solid var(--gray-color); 
    color: #777;
    padding: 1.2em 1em;
    transition: 0.3s all linear;
    display: block;
    line-height: 0%;
}

.submenu > li:hover {
    background: #EDEDED;
}

.submenu > li:active {
    background: #FFF;
}
.h
{
	background-color: #AEECED;
}
.page-wrapper
{
    position: bottom;
    bottom: 0;
    width: 100%;
    z-index: 11111;
    top: 35px;
}

footer p, footer strong, footer b, footer {
    color: #b0b0b0;
}

.footer-top {
    background: #396385;
    background-size: cover;
    background-position: center;
    padding: 0 0 20px;
    font-family: rubik;
  padding-top:30px;
  
}

.footer-top{
    background-color: #1c1f2f;
}

#waterdrop {
    height: 30px;
}

#waterdrop canvas {
    bottom: -70px !important;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  float: right;
}

.button1 {
  background-color: #0B88A6; 
  color: white; 
  border-radius: 12px;
  font-family: 'Roboto Slab', serif;
}

.button1:hover {
  background-color: #6EDAB7;
  color: black;
}
a:link {
  text-decoration: none;
  color: #8AF7EE;
}

a:visited {
  text-decoration: none;
    color: #8AF7EE;

}

a:hover {
  text-decoration: none;
}

a:active {
  text-decoration: underline;
}
	</style>
</head>
<header class="h">
    <table>
      <tr>
        <th colspan="3"><img src="logo2.png" width="70%" height="135px" class="img-responsive"></th>
        <th colspan="10"></th>
        <th colspan="10"></th>
        <th colspan="20"> Welcome <?php  echo  $_SESSION['uname'];?></th>
        <th colspan="10"></th>
        <th colspan="10"></th>
        <th colspan="70"></th>
        <th colspan="10"></th>
        <th colspan="10">
          <a href="logout.php" class="button button1">Log Out</a>
          <a href="profile.php" class="button button1">Profile</a>
        </th>
      </tr>
    </table>
      

    </header>
<body>
  <nav class="menu">
            <ul class="main-menu">
                <li ><i class="fa fa-home"></i> Home</li>
                <li><i class="fa fa-briefcase"></i><a href="trainschedule.php"> Train Schedule</li>
                <li><i class="fa fa-user"></i> <a href="stays.php"> Stays</a></li>
                <li class="active"><i class="fa fa-user"></i> <a href="historical.php"> Attractions</a></li>
                <li><i class="fa fa-search"></i> <a href="pnrcheck.php"> PNR Enquiry</a></li>
                <li><i class="fa fa-search"></i> <a href="Contact us.php"> Contact Us</a></li>
            </ul>
        </nav>
        
       <div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="goa.jpg">
</div>
<div class="title">
 <h1>
GOA</h1>
</div>
<div class="des">
 <p>Goa is a  state on the southwestern coast of  India within the region known as the Konkan, and geographically separated from the Deccan highlands by the Western Ghats. It is surrounded by the Indian states of Maharashtra to the north and Karnataka to the east and south, with the Arabian Sea forming its western coast.</p>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="tajmahal.jpg">
</div>
<div class="title">
 <h1>
AGRA</h1>
</div>
<div class="des">
 <p>Agra is a city on the banks of the Yamuna river in the Agra district of the Indian state of Uttar Pradesh. It is 206 kilometres south of the national capital New Delhi. Agra is the fourth-most populous city in Uttar Pradesh and 24th in India.It is a major tourist destination because of its many Mughal-era buildings, most notably the Taj Mahal.</p>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="manali2.jpg">
</div>
<div class="title">
 <h1>
MANALI</h1>
</div>
<div class="des">
 <p>Manali is a resort and tourist town nestled in the mountains of the Indian state of Himachal Pradesh near the northern end of the Kullu Valley in the Beas River Valley.The small town is the beginning of an ancient trade route to Ladakh and from there over the Karakoram Pass on to Yarkand and Khotan in the Tarim Basin.</p>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="jaipur1.jpg">
</div>
<div class="title">
 <h1>
JAIPUR</h1>
</div>
<div class="des">
 <p>Jaipur is the capital and the largest city of the Indian state of Rajasthan.Jaipur is also known as the Pink City, due to the dominant color scheme of its buildings. It is a popular tourist destination in India and forms a part of the west Golden Triangle tourist circuit along with Delhi and Agra. It also serves as a gateway to other tourist destinations in Rajasthan. </p>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="udaipur1.jpg">
</div>
<div class="title">
 <h1>
UDAIPUR</h1>
</div>
<div class="des">
 <p>Udaipur, also known as the "City of Lakes", is a city in the state of Rajasthan, India.It is the historic capital of the kingdom of Mewar in the former Rajputana Agency.The city is located in the southernmost part of Rajasthan, near the Gujarat border. It is surrounded by the Aravali Range, which separates it from the Thar Desert.  </p>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="varanasi.jfif">
</div>
<div class="title">
 <h1>
VARANASI</h1>
</div>
<div class="des">
 <p>Varanasi, also known as Benares,is a city on the banks of the river Ganges in Uttar Pradesh, India..Varanasi grew as an important industrial centre famous for its muslin and silk fabrics, perfumes, ivory works, and sculpture.It also has been a cultural centre of northern India for several thousand years.</p>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="jaisalmer.jpg">
</div>
<div class="title">
 <h1>
JAISALMER</h1>
</div>
<div class="des">
 <p>Jaisalmer "The Golden city", is a city  stands on a ridge of yellowish sandstone and is crowned by the ancient Jaisalmer Fort. This fort contains a royal palace and several ornate Jain temples. Many of the houses and temples of both the fort and of the town below are built of finely sculptured sandstone. </p>

</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="rishikesh.jpg">
</div>
<div class="title">
 <h1>
RISHIKESH</h1>
</div>
<div class="des">
 <p>Rishikesh is a tehsil in Dehradun district of the Indian state Uttarakhand. Located in the foothills of the Himalayas in northern India, it is known as the "Gateway to the Garhwal Himalayas" and "Yoga Capital of the World".It is known as the pilgrimage town and regarded as one of the holiest places to Hindus.</p>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="allepey.jpg">
</div>
<div class="title">
 <h1>
ALLEPEY</h1>
</div>
<div class="des">
 <p>Alleppey, is the administrative headquarters of Alappuzha District in the Indian State of Kerala.It is considered to be the oldest planned city in this region and the lighthouse built on the coast of the city is the first of its kind along the Laccadive Sea coast.It is alsoknown as the "Venetian Capital" of Kerala.</p>
</div>
</div>

<!--cards -->


<div class="card">

<div class="image">
   <img src="varkala.jpg">
</div>
<div class="title">
 <h1>
VARKALA</h1>
</div>
<div class="des">
 <p>Varkala, also known as The Pearl of the Arabian Sea, is a municipality in the Thiruvananthapuram district, situated in the Indian state of Kerala. It is the second largest coastal city in the district.Varkala is the only town in Kerala where cliffs are found adjacent to the Arabian Sea.These Cenozoic sedimentary formation cliffs are a unique geological feature and known among geologists as Varkala Formation. </p>
</div>
</div>

<!--cards -->


<div class="card">

<div class="image">
   <img src="bangalore.webp">
</div>
<div class="title">
 <h1>
BANGALORE</h1>
</div>
<div class="des">
 <p>Bangalore is the capital and the largest city of the Indian state of Karnataka. It is the third most populous city and fifth most populous urban agglomeration in India.  Its elevation is the highest among the major cities of India.Bangalore is the "Silicon Valley of India" because of its leadingrole in information technology exporter.</p>
</div>
</div>

<!--cards -->


<div class="card">

<div class="image">
   <img src="jodhpur.jpg">
</div>
<div class="title">
 <h1>
JODHPUR</h1>
</div>
<div class="des">
 <p>Jodhpur is the second-largest city in the Indian state of Rajasthan.Jodhpur was historically the capital of the Kingdom of Marwar, which is now part of Rajasthan. Jodhpur is a popular tourist destination, featuring many palaces, forts, and temples, set in the stark landscape of the Thar Desert. It is popularly known as the "Blue City"among people of Rajasthan and all over India.</p>
</div>
</div>
</div>
</body>
</html>

</body>

<footer>
<div class="page-wrapper">
    <div id="waterdrop"></div>
    <footer>
      <div class="footer-top">
        	<table>
	<tr><td align="center">   			
        <p style="float: center"> &nbsp
          <a href="home.php">Home</a>
          |
          <a href="trainschedule.php">Train Schedule</a>
          |
          <a href="stays.php">Stays</a>
          |
          <a href="historical.php">Attractions</a>
          |
          <a href="pnrcheck.php">PNR Enquiry</a>
          |
          <a href="Contact us.php">Contact Us</a>
        </p>
 	</td>
 	<td>
        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp © IRBMS</p>
    </td>
</tr>
<tr>
         <td> <p>&nbsp &nbsp+91 888-888-8888</p></td>
         <td>
          <p><a href="mailto:support@irbms.com">support@irbms.com</a></p></td>
      </tr>
  </table>
      </div>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://daniellaharel.com/raindrops/js/raindrops.js"></script>

 <script> jQuery('#waterdrop').raindrops({color:'#1c1f2f', canvasHeight:150, density: 0.1, frequency: 20});
</script>
</footer>
</html>