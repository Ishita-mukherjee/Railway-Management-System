<?php

  session_start();
  $conn = mysqli_connect("localhost","root","","railwaymanagementsystem");
  error_reporting(0);
  if (!isset($_SESSION['uname'])) {
    echo "You are logged out";
    header("location:login.php");
  }
 
   $a=$_GET['fn'];
   $b=$_GET['un'];
   $c=$_GET['e'];
   $d=$_GET['pn'];
   $e=$_GET['db'];
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
<title>َProfile Update Form</title>
<style type="text/css">
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
  float: center;
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
</style>
</head>
<body>
  <br>
	<div class="container" style="margin-top: 5%; padding-right: 2%;padding-left: 2%;padding-bottom: 2%;padding-top: 2%">
		<div class="title" style="text-align: center">Profile Update</div>
		<form method="get" action="">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Updated Full Name</span>
					<input type="text" value="<?php echo"$a" ?>" name="f_name" required>
				</div>
				<div class="input-box">
					<span class="details"> User Name</span>
					<input type="text" value="<?php echo"$b" ?> "name="u_name" required readonly>
				</div>
				<div class="input-box">
					<span class="details">Updated Email</span>
					<input type="text" value="<?php echo"$c" ?> "name="e_id" required>
				</div>
				<div class="input-box">
					<span class="details">Updated Phone Number</span>
					<input type="text" value="<?php echo"$d" ?> "name="phone" required>
				</div>
				<div class="input-box">
					<span class="details">Updated D.O.B</span>
					<input type="text" value="<?php echo"$e" ?> "name="date" required>
				</div>
        <tr>      </tr>

           <div class="button4" style="margin-top: 15%;margin-right: 20%">
          <a href="profile.php" class="button" style="  background: linear-gradient(-135deg, #71b7e6, #9b59b6); border-radius: 10px; font-family: 'Roboto Slab', serif;font-size: 18px;">Back</a>
      </div>
        <div class="button4" style="margin-right: 10%">
        <input type="submit" name="submit"  value="Update" style="width: 100px;font-family: 'Roboto Slab', serif">
      </div>
     

			</div>
			
		</form>
	</div>
</body>

  
</html>
<?php

  if(isset($_GET['submit']))
  {
    $f=$_GET['f_name'];
    $g=$_GET['u_name'];
    $h=$_GET['e_id'];
    $i=$_GET['phone'];
    $j=$_GET['date'];
    $query="UPDATE registration set full_name='$f',email='$h',ph_no='$i',dob='$j' where user_name='$g'" ;
    $data=mysqli_query($conn,$query);
    if($data)
    {
      echo "<script>alert('RECORD UPDATED')</script>";

      ?>
      <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/SE proj/profile.php">

      <?php

    }
    else
    {
     // echo "Failed to update record";
            echo "<script>alert('RECORD NOT UPDATED')</script>";

    }
  }


?>



