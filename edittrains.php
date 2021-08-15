<?php
	$con=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>

<?php
	$id=$_GET['tid'];
	$s=mysqli_query($con,"select * from train where train_id='$id'");
	$i=mysqli_fetch_array($s);
?>


 

<!DOCTYPE html>
<html>
<head>
	<title>Edit Train</title>
	<style type="text/css">
		* { box-sizing: border-box; }
@import url('https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap');


body {
  font-family: 'Rubik', sans-serif;
}

.container {
  display: flex;
  height: 100vh;
}

.left {
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  animation-name: left;
  animation-duration: 1s;
  animation-fill-mode: both;
  animation-delay: 1s;
}

.right {
  flex: 1;
  background-color: black;
  transition: 1s;
  background-image: url(https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}



.header > h2 {
  margin: 0;
  color: #4f46a5;
}

.header > h4 {
  margin-top: 10px;
  font-weight: normal;
  font-size: 15px;
  color: rgba(0,0,0,.4);
}

.form {
  max-width: 80%;
  display: flex;
  flex-direction: column;
}

.form > p {
  text-align: right;
}

.form > p > a {
  color: #000;
  font-size: 14px;
}

.form-field {
  height: 46px;
  padding: 0 16px;
  border: 2px solid #ddd;
  border-radius: 4px;
  font-family: 'Rubik', sans-serif;
  outline: 0;
  transition: .2s;
  margin-top: 20px;
}

.form-field:focus {
  border-color: #0f7ef1;
}

.buttona {
  padding: 12px 10px;
  border: 0;
  background: linear-gradient(to right, #de48b5 0%,#0097ff 100%); 
  border-radius: 3px;
  margin-top: 10px;
  color: #fff;
  letter-spacing: 1px;
  width: 100px;
  font-family: 'Rubik', sans-serif;
}

.animation {
  animation-name: move;
  animation-duration: .4s;
  animation-fill-mode: both;
  animation-delay: 2s;
}

.a1 {
  animation-delay: 2s;
}

.a2 {
  animation-delay: 2.1s;
}

.a3 {
  animation-delay: 2.2s;
}

.a4 {
  animation-delay: 2.3s;
}

.a5 {
  animation-delay: 2.4s;
}

.a6 {
  animation-delay: 2.5s;
}

@keyframes move {
  0% {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-40px);
  }

  100% {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
}

@keyframes left {
  0% {
    opacity: 0;
    width: 0;
  }

  100% {
    opacity: 1;
    padding: 20px 40px;
    width: 440px;
  }
}
	</style>
</head>
<body>
	<div class="container">
  <div class="left">
  	<div class="header">
      <h2 class="animation a1">Welcome </h2>
      <h4 class="animation a2">Edit Train Details Here</h4>
    </div>
  	<form method="get" action="edittrain_back.php" class="form">
		<table>
		<tr>
				<td> Train Name</td>
				<td><input class="form-field animation a1" type="text" name="n" required autofocus placeholder="Enter train name" value="<?php echo($i['train_name'])?>"></td>
			</tr>
			<tr>
				<td>Source</td>
				<td><input class="form-field animation a2" type="text" name="src" required placeholder="Enter Source" value="<?php echo($i['source'])?>"></td>
			</tr>
			<tr>
				<td>Destination</td>
				<td><input class="form-field animation a3" type="text" name="desti" required placeholder="Enter Destination" value="<?php echo($i['destination'])?>"></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input class="form-field animation a4" type="text" name="time" required placeholder="Enter Time" value="<?php echo($i['time'])?>"></td>
			</tr>
			<tr>
				<td>Duration</td>
				<td><input class="form-field animation a5" type="text" name="day" required placeholder="Enter Duration" value="<?php echo($i['duration'])?>"></td>
			</tr>
      <tr>
        <td>Train Number</td>
        <td><input class="form-field animation a5" type="text" name="tn" required placeholder="Enter Train Number" value="<?php echo($i['pnr'])?>"></td>
      </tr>
		    <tr>
		    	<input class="form-field animation a6" type="hidden" name="id" value="<?php echo($i['train_id'])?>">
		    </tr>
       
         <tr>
          <td align="left"><a href="traindetails.php" class="buttona" style="  text-decoration: none;">Back</a> </td>
           	<td align="center"><input  type="submit" name="submit" class="buttona"></td>
		    </tr>
        <br>
       
		    
		</table>
		 </form>
  </div>
  <div class="right"></div>
</div>


</body>
</html>