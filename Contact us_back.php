<?php
$servername = "localhost";
$database = "railwaymanagementsystem";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

?>
<?php

  session_start();
  $conn=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>

<?php
  $a=$_POST['name'];
  $b=$_POST['email'];
  $c=$_POST['message'];
 
  
$sql="INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('$a','$b','$c')";
if($conn->query($sql) === TRUE)
  {
    //header("location:home.php?msg=submit");
    ?>
                <script>
                  alert("Submitted successfully ");
                  window.location.href = "home.php";
                </script>
           <?php
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //header("location:contact us.php?msg=notsubmitted");
    ?>
                <script>
                  alert("Error");
                  window.location.href = "Contact us.php";
                </script>
           <?php
  }

$conn->close();

?>