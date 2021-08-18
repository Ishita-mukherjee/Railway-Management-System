
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>َRegistration Form</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap">
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
				<th colspan="10">
             <a href="login.php" class="button button1">Have an account? Log In</a>
				</th>
			</tr>
		</table>
</header>
<body> 
	 <nav class="menu">
            <ul class="main-menu">
                <li><i class="fa fa-home"></i><a href="index.php" style="color: #8AF7EE;font-family: 'Roboto Slab', serif;"> Home</a></li>
                <li ><i class="fa fa-search"></i><a href="login.php" style="color: #8AF7EE;font-family: 'Roboto Slab', serif;">User Login</a></li>
                <li class="active"><i class="fa fa-briefcase"></i><a href="registration.php" style="color: #8AF7EE;font-family: 'Roboto Slab', serif;"> Registration</a></li>
                <li><i class="fa fa-user"></i><a href="elogin.php"style="color: #8AF7EE;font-family: 'Roboto Slab', serif;"> Employee Login</a></li>
                
            </ul>
        </nav>
	<div class="container" style="margin-top: 5%;padding-right: 2%;padding-left: 2%;padding-bottom: 2%;padding-top: 2%">
		<div class="title">Registraion</div>
		<form method="post" action="registration_back.php">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Full Name</span>
					<input type="text" placeholder="Enter your name" name="f_name" required>
				</div>
				<div class="input-box">
					<span class="details">User Name</span>
					<input type="text" placeholder="Enter your username" name="u_name" required>
				</div>
				<div class="input-box">
					<span class="details">Email</span>
					<input type="text" placeholder="Enter your Email" name="e_id" required>
				</div>
				<div class="input-box">
					<span class="details">Phone Number</span>
					<input type="text" placeholder="Enter your phone number" name="phone" required>
				</div>
				<div class="input-box">
					<span class="details">D.O.B</span>
					<input type="date" placeholder="dd/mm/yyyy" name="date" required>
				</div>
				<div class="input-box">
					<span class="details">Password</span>
					<input type="password" placeholder="Enter your Password" name="passw" required>
				</div>
                <div class="input-box">
					<span class="details">Confirm Password</span>
					<input type="password" placeholder="Enter Confirm Password" name= "c_pwd" required>
				</div>
			</div>
			<div class="gender-details">
				<input type="radio" name="gen" value="male" id="dot-1">
				<input type="radio" name="gen" value="female" id="dot-2">
				<span class="gender-title">Gender</span>
				<div class="category">
					<label for="dot-1">
						<span class="dot one"></span>
						<span class="gender">Male</span>
					</label>
					<label for="dot-2">
						<span class="dot two"></span>
						<span class="gender">Female</span>
					</label>
				</div>
			</div>
			<div class="button4" style="width: 100px;">
				<input type="submit" name="submit" value="Register">
			</div>
		</form>
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
          <a href="index.php">Home</a>
          |
          <a href="registration.php">Registration</a>
          |
          <a href="login.php">Log In</a>
          |
          <a href="elogin.php">Employee Login</a>
         
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




