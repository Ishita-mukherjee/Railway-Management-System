<?php

   	session_start();
	?>
<?php
$servername = "localhost";
$database = "railwaymanagementsystem";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$b=$_SESSION['tid'];
$c=$_SESSION['total_pass'];
$a=$_SESSION['seat'];
$e=$_SESSION['s_n'];
$d=$e-$c;
$sql="UPDATE `train` SET `$a`='$d' WHERE `train`.`train_id`='$b'";
$res = mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE)
{ 
	?>
			          <script>
			            window.location.href = "card1.php";
			            alert("Booking Confirmed");
			          </script>
			     <?php
}
else
{
	    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
                

