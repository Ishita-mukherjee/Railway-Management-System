<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>User Details</title>

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
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
  <style type="text/css">
	<style type="text/css">
		html,
body {
  height: 100%;
}

body {
  margin: 0;
  background: linear-gradient(45deg, #49a09d, #5f2c82);
  /*font-family: sans-serif;
  font-weight: 100;*/
}

.container {
  /*position: absolute;
  top: 50%;
  left: 50%;*/
  transform: translate(5%, 5%);
}

.t {
  width: auto;
  height: auto;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.t th,
.t td {
  padding: 15px;
  background-color: rgba(255,255,255,0.2);
  color: #fff;
}

.t th {
  text-align: left;
  color: #70F4D4;
  font-size: 1.5em;
  font-family: 'DM Serif Display', serif;
}

.t thead {
  th {
    background-color: #55608f;
  }
}

.t tbody {
  tr {
    &:hover {
      background-color: rgba(255,255,255,0.3);
    }
  }
  .t td {
    position: relative;
    &:hover {
      &:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -9999px;
        bottom: -9999px;
        background-color: rgba(255,255,255,0.2);
        z-index: -1;
      }
    }
  }
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
  <nav class="menu">
            <ul class="main-menu">
                <li><i class="fa fa-home"></i> <a href="ehome.php" style="color: #8AF7EE;">Home</a></li>
                <li><i class="fa fa-user"></i><a href="addtrain.php" style="color: #8AF7EE;"> Add Trains</a></li>
                <li class="active"><i class="fa fa-search"></i><a href="userdetails.php" style="color: #8AF7EE;"> User Details</a></li>
                <li ><i class="fa fa-search"></i><a href="traindetails.php" style="color: #8AF7EE;"> Train Details</a></li>
                <li><i class="fa fa-search"></i><a href="adminprofile.php" style="color: #8AF7EE;"> Admin Details</a></li>
            </ul>
        </nav>

  <?php
$con=mysqli_connect("localhost","root","","railwaymanagementsystem");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$sql="select full_name,email,password,user_name,dob,id,ph_no from registration order by id";
$result=mysqli_query($con,$sql);
if(isset($_POST['submit']))
{
  $e=$_POST['delete'];
  $r=mysqli_query($con,"delete from registration where email='$e'");
  if($r)
  {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Ohh","You have Successfully Deleted","success");';
    echo '}, 1000);</script>';

  }
  else {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Ohh","plz enter email","error");';
    echo '}, 1000);</script>';
  }
}
mysqli_close($con);
?>
<h1 style="  font-family: 'DM Serif Display', serif; color: #6EE2F4" align="center">User Details</h1>
<div class="container">
  <table class="t">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Full Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date Of Birth</th>
      </tr>
    </thead>
    <tbody>
      <?php
while($row=mysqli_fetch_assoc($result)) {
?>
      <tr>
        <td style="font-size: 1.25em;"><?php echo $row['id'] ?></td>
        <td style="font-size: 1.25em;"><?php echo $row['full_name'] ?></td>
        <td style="font-size: 1.25em;"><?php echo $row['user_name'] ?></td>
        <td style="font-size: 1.25em;"><?php echo $row['email'] ?></td>
        <td style="font-size: 1.25em;"><?php echo $row['ph_no'] ?></td>
        <td style="font-size: 1.25em;"><?php echo $row['dob'] ?></td>
      </tr>
      <?php } ?>

    </tbody>
  </table>
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
        <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ?? IRBMS</p>
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