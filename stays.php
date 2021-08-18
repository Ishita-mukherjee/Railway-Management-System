<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotels</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
    <style>
        .bcontent {
            margin-top: 10px;
            margin-left: 30%;
        }
        body
{
      background-image: linear-gradient(#B5F1EF,#93B8F0,#B5C6F1,#C6B5F1);
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
                <li ><i class="fa fa-home"></i><a href="home.php"> Home</a></li>
                <li ><i class="fa fa-briefcase"></i><a href="trainschedule.php"> Train Schedule</li>
                <li class="active"><i class="fa fa-user"></i> <a href="stays.php"> Stays</a></li>
                <li><i class="fa fa-user"></i> <a href="historical.php"> Attractions</a></li>
                <li><i class="fa fa-search"></i> <a href="pnrcheck.php"> PNR Enquiry</a></li>
                <li><i class="fa fa-search"></i> <a href="Contact us.php"> Contact Us</a></li>
            </ul>
        </nav>
                <h2 style="font-family: 'Bree Serif', serif; float: center; font-size: 50px" align="center">Hotels</h2>
<hr>
    <div class="container bcontent">       
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="h1.jpg" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Oleo Script', cursive; font-size: 30px;">Puri</h5>
                        <p class="card-text" style="color: #06285C;"><b>Golden Oasis Hotel, Puri</b></p>
                        <a style="color: white" href="h1.jpg" class="btn btn-primary">View Hotel</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="h2.jpg" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Oleo Script', cursive;font-size: 30px;">Haridwar</h5>
                        <p class="card-text" style="color: #06285C;"><b>Hotel Gangotri, Haridwar</b></p>
                        <a style="color: white" href="h2.jpg" class="btn btn-primary">View Hotel</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="h3.webp" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Oleo Script', cursive;font-size: 30px;">Indore</h5>
                        <p class="card-text" style="color: #06285C;"><b>Blueben Heights, Indore</b></p>
                        <a style="color: white" href="h3.webp" class="btn btn-primary">View Hotel</a>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="h4.webp" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Oleo Script', cursive;font-size: 30px;">Delhi</h5>
                        <p class="card-text" style="color: #06285C;"><b>The Park Regency, Delhi</b></p>
                        <a style="color: white" href="h4.webp" class="btn btn-primary">View Hotel</a>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="h5.jpg" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Oleo Script', cursive;font-size: 30px;">Kolkata</h5>
                        <p class="card-text" style="color: #06285C;"><b>Le Roi, Kolkata</b></p>
                        <a style="color: white" href="h5.jpg" class="btn btn-primary">View Hotel</a>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="h7.webp" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: 'Oleo Script', cursive;font-size: 30px;">Mumbai</h5>
                        <p class="card-text" style="color: #06285C;"><b>Mariott, Mumbai</b></p>
                        <a style="color: white" href="h7.webp" class="btn btn-primary">View Hotel</a>
                    </div>
                </div>
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