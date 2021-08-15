<?php

	session_start();
	ob_start();
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
		$a=$_POST['email'];
		$p=$_POST['pwd'];

		$es="select * from employee where email='$a' and password='$p'";
		$query = mysqli_query($conn,$es);
		$r=mysqli_fetch_array($query);

		/*echo $es;*/
		$b = mysqli_num_rows($query);
		/*echo $b;*/
	if(mysqli_num_rows($query))
	{
		$r=mysqli_fetch_assoc($query);
		$_SESSION['uname']= $r['email'];
		echo $_SESSION['uname'];
						?>
			          <script>
			            alert("Log In Successfull ");
			            window.location.href = "ehome.php";
			          </script>
			     <?php
	}
		else
		{
					?>
          <script>
            alert("Password Incorrect");
            window.location.href = "elogin.php";

          </script>
        <?php
    }
}
	
?>