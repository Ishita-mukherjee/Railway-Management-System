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
	<title>Home</title>
	 <meta charset="UTF-8">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
	<style type="text/css">
@import url("https://fonts.googleapis.com/icon?family=Material+Icons");
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
.bg-img {
  background-image: url("t3.jpg");
  min-height: 550px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.reg
{
  height: 320px;
  width: 400px;
  border-radius: 10px;
  display: inline-flex;
  flex-direction: column;
  background-color: white;
  box-shadow: 0 0 10px rgba(0,0,0,0);
  color: black;
  font-family: arial,helvetica,sans-serif;
  padding-top: 10px;
  padding-bottom: 60px;
  padding-left: 30px;
  padding-right: 30px;
  margin-left: 50%;
  text-align: center;
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

.box{
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
  }
  .card{
    position: relative;
    width: 300px;
    height: 350px;
    background: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:-1;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 1;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  .card .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
  }

  .card .details h2{
   margin: 0;
   padding: 0;
   font-weight: 600;
   font-size: 20px;
   color: #777;
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 5px;
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

.services{
  background: #f1f1f1;
  text-align: center;
}
.services h1{
  display: inline-block;
  text-transform: uppercase;
  border-bottom: 4px solid #3498db;
  font-size: 20px;
  padding-bottom: 10px;
  margin-top: 40px;
}
.cen{
  max-width: 1200px;
  margin: auto;
  overflow: hidden;
  padding: 20px;
}
.service{
  display: inline-block;
  width: calc(100% / 3);
  margin: 0 -2px;
  padding: 20px;
  box-sizing: border-box;
  cursor: pointer;
  transition: 0.4s;
}
.service:hover{
  background: #ddd;
}
.service i{
  color: #3498db;
  font-size: 34px;
  margin-bottom: 30px;
}
.service h2{
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 500;
  margin: 0;
}
.service p{
  color: gray;
  font-size: 15px;
  font-weight: 500;
}
@media screen and (max-width: 800px) {
  .service{
    width: 50%;
  }
}
@media screen and (max-width: 500px) {
  .service{
    width: 100%;
  }
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
<body>
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
	<div class="bg-img">
	<nav class="menu">
            <ul class="main-menu">
                <li class="active"><i class="fa fa-home"></i> Home</li>
                <li><i class="fa fa-briefcase"></i><a href="trainschedule.php"> Train Schedule</li>
                <li><i class="fa fa-user"></i> <a href="stays.php"> Stays</a></li>
                <li><i class="fa fa-user"></i> <a href="historical.php"> Attractions</a></li>
                <li><i class="fa fa-search"></i> <a href="pnrcheck.php"> PNR Enquiry</a></li>
                <li><i class="fa fa-search"></i> <a href="Contact us.php"> Contact Us</a></li>
            </ul>
        </nav>
        <br><br><br><br>
    <div class="reg">
	<h1>BOOK YOUR TRAIN</h1>
	<form method="post" action="home_back.php">
	<table cellpadding="10">
		<tr>
			<td>
			
		      From <i class="material-icons">near_me</i></td>
			<td>
          <select name="valueToSearch">
          <option value="Sealdah">SEALDAH</option>
          <option value="Howrah">HOWRAH</option>
  
        </select>
      </td>
		</tr>
    
		<tr>
			<td>To <i class="material-icons">place</i></td>
			<td>
          <select name="valueToSearch1">
          <option value="Delhi">DELHI</option>
          <option value="Puri">PURI</option>
          <option value="Mumbai">MUMBAI</option>
          <option value="Patna">PATNA</option>
        </select>
      </td>
		</tr>
		<br>
		<tr>
			<td>Departure Date  <i class="material-icons">today</i></td>
			<td><input type="date" name="dob" required></td>
		</tr>
		<br>
		
		
		
		<tr>
			<td colspan="2" align="center">
				
				<input type="submit" name="submit" value="Search Trains"> <i class="material-icons">directions_railway</i>
			</td>
		</tr>
	</table>
</form>
</div>
    </div>
</td>
</tr>
</td>
</tr>
</table>
</form>
</div>
</div>
<br><br><br>
<h1 align="center" style="font-family: 'Russo One', sans-serif;, serif; color: #2B3080;">Some Scenic Train Routes !</h1>
	<br>
<div class="box">
      <div class="card">
        <div class="imgBx">
            <img src="t5.jpg" alt="images">
        </div>
        <div class="details">
            <h2>Himalayan Queen<br><span>Kalka to Shimla</span></h2>
        </div>
      </div>
    
       <div class="card">
         <div class="imgBx">
            <img src="t6.jpg" alt="images">
         </div>
         <div class="details">
            <h2>Palace on Wheels<br><span>Delhi round-trip through Rajasthan</span></h2>
          </div>
       </div>

       <div class="card">
         <div class="imgBx">
            <img src="t7.jpg" alt="images">
         </div>
         <div class="details">
            <h2>Dudhsagar Falls<br><span>Trains To Goa</span></h2>
          </div>
       </div>
 
  </div>
  <br><br>
   <div class="services">
      <h1>Our Services</h1>
      <div class="cen">
        <div class="service">
          <i class="fas fa-anchor"></i>
          <h2>Reservation</h2>
          <p>Reserve your railway tickets with us! </p>
        </div>

        <div class="service">
          <i class="fab fa-android"></i>
          <h2>Hotels</h2>
          <p>Stay at the best hotels under our flagship. </p>
        </div>

        <div class="service">
          <i class="fab fa-angellist"></i>
          <h2>Train Schedule</h2>
          <p>Check the train schedule before you leave. </p>
        </div>

        <div class="service">
          <i class="fas fa-apple-alt"></i>
          <h2>Meals</h2>
          <p>Enjoy fresh and healthy food with every train journey. </p>
        </div>

        <div class="service">
          <i class="fas fa-archway"></i>
          <h2>Heritage Tour</h2>
          <p>Visit the heritage sights with some of our famous train routes.</p>
        </div>

        <div class="service">
          <i class="far fa-angry"></i>
          <h2>Grievances</h2>
          <p>For any issues contact us and we will get back to you at the earliest</p>
        </div>
      </div>
    </div>
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