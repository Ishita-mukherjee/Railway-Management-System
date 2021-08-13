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

/*echo "Connected successfully";*/
 
?>
<?php
	if(isset($_POST['submit']))
	{
		?>
			          <script>
			            window.location.href = "home.php";
			            alert("Payment Successfull");
			          </script>
			     <?php
			}
			else
			{
				?>
			          <script>
			            alert("Payment Not Successfull");
			            window.location.href = "card1.php";
			          </script>
			     <?php
			}
			?>