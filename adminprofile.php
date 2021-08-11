<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
	<title>Admin Profile</title>
	<style type="text/css">
		
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
.tables{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
.tables th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
.tables td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}



::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
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
    transform: translateX(-10%)
}

.main-menu > li:nth-child(4) {
    transform: translateX(-15%)
}
.main-menu > li:nth-child(5) {
    transform: translateX(-20%)
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
  color: white;
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
        <th colspan="20"> Welcome Admin </th>
        <th colspan="10"></th>
        <th colspan="10"></th>
        <th colspan="70"></th>
        <th colspan="10"></th>
        <th colspan="10">
          <a href="logout.php" class="button button1">Log Out</a>
        </th>
      </tr>
    </table>
</header>
<body>
<section>
	<nav class="menu">
            <ul class="main-menu">
                <li><i class="fa fa-home"></i> <a href="ehome.php" style="color: #8AF7EE;">Home</a></li>
                <li><i class="fa fa-user"></i><a href="addtrain.php" style="color: #8AF7EE;"> Add Trains</a></li>
                <li><i class="fa fa-search"></i><a href="userdetails.php" style="color: #8AF7EE;"> User Details</a></li>
                <li ><i class="fa fa-search"></i><a href="traindetails.php" style="color: #8AF7EE;"> Train Details</a></li>
                <li class="active"><i class="fa fa-search"></i><a href="adminprofile.php" style="color: #8AF7EE;"> Admin Details</a></li>
            </ul>
        </nav>

<?php
$con=mysqli_connect("localhost","root","","railwaymanagementsystem");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="select * from employee order by emp_id";
$result=mysqli_query($con,$sql);
mysqli_close($con);
?>

<h1 style="  font-family: 'Coda Caption', sans-serif;
"><span class="blue"></span><u>Admin Profile</u><span class="blue"></span></h1>
  <div class="tbl-header">
    <table cellpadding="5" cellspacing="30" border="0">
       <thead>
    <tr>
      <th><h1 style="font-family: 'PT Serif', serif; font-size: 25px;">Employee ID  </h1></th>
      <th><h1 style="font-family: 'PT Serif', serif; font-size: 25px;">Employee Name</h1></th>
      <th><h1 style="font-family: 'PT Serif', serif; font-size: 25px;">Email</h1></th>
      <th><h1 style="font-family: 'PT Serif', serif; font-size: 25px;">Phone Number</h1></th>
      <th><h1 style="font-family: 'PT Serif', serif; font-size: 25px;">Delete</h1></th>
      <th><h1 style="font-family: 'PT Serif', serif; font-size: 25px;">Edit</h1></th>
    </tr>
  </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="5" cellspacing="80" border="0" class="tables">
      <tbody>
    <?php
      while($row=mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td style="color: white; font-family: 'PT Serif', serif; font-size: 20px;"><?php echo $row['emp_id'] ?></td>
      <td style="color: white; font-family: 'PT Serif', serif; font-size: 20px;"><?php echo $row['emp_name'] ?></td>
      <td style="color: white; font-family: 'PT Serif', serif; font-size: 20px;"><?php echo $row['email'] ?></td>
      <td style="color: white; font-family: 'PT Serif', serif; font-size: 20px;"><?php echo  $row['phn_no']; ?></td>
      
      <td><a style="font-family: 'PT Serif', serif; font-size: 20px;"href="admindelete.php?tid=<?php echo($row['emp_id']);?>">Delete</a></td>
      <td><a style="font-family: 'PT Serif', serif; font-size: 20px;"href="adminedit.php?tid=<?php echo($row['emp_id']);?>">Edit</td>
    </tr>
    <?php } ?>
  </tbody>
    </table>
  </div>
</section>

<script type="text/javascript">
	// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</body>
<footer>
<div class="page-wrapper">
    <div id="waterdrop"></div>
    <footer>
      <div class="footer-top">
          <table>
  <tr><td align="center">         
        <p style="float: center"> &nbsp
          <a href="ehome.php" style="color: #AEECED">Home</a>
          |
          <a href="addtrain.php" style="color: #AEECED">Add Trains</a>
          |
          <a href="userdetails.php" style="color: #AEECED">User Details</a>
          |
          <a href="traindetails.php" style="color: #AEECED">Train Details</a>
          |
          <a href="adminprofile.php" style="color: #AEECED">Admin Details</a>
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