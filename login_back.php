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

//echo "Connected successfully";
 
?>
<?php
	if(isset($_POST['submit']))
	{
		$a=$_POST['email'];
		$p=$_POST['pwd'];

		$es="select * from `registration` where email='$a'";
		$query = mysqli_query($conn,$es);


	if(mysqli_num_rows($query))
	{
		$r=mysqli_fetch_assoc($query);
		$db_pass = $r['password'];
		$_SESSION['uname']= $r['user_name'];
		$pass_check = password_verify($p, $db_pass);

		if($pass_check)
		{
			if (isset($_POST['rememberme'])) {
				setcookie('emailcookie',$a,time()+86400);
				setcookie('passwordcookie',$p,time()+86400);
				?>
			          <script>
			            window.location.href = "home.php";
			            alert("Log In Successfull");
			          </script>
			     <?php
			}
			else
			{
				?>
			          <script>
			            alert("Log In Successfull");
			            window.location.href = "home.php";
			          </script>
			     <?php
			}
			
		}
		else
		{
					?>
          <script>
            alert("Password Incorrect");
            window.location.href = "login.php";

          </script>
        <?php
    }
	}
	else
	{
		?>
          <script>
            alert("Please create account!");
            window.location.href = "registration.php";

          </script>
        <?php
	}
	}
?>