?php

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

//echo "Connected successfully";

?>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$src=$_POST['src'];
$des=$_POST['des']; 
$no=$_POST['no'];
$day=$_POST['dur'];
$time=$_POST['time'];
$p=$_POST['pnr'];



$sql="INSERT INTO `train`(`train_name`,`duration`,`time`,`source`, `destination`,`train_id`,`pnr`) VALUES ('$name','$day','$time','$src','$des','$no','$p')";
if(mysqli_query($conn,$sql)){
?>
			          <script>
			            alert("Train Details added successfully ");
			            window.location.href = "ehome.php";
			          </script>
			     <?php
}
else{
  echo '<script>alert("There is a something Wrong!")</script>';
   echo "Error: " . $sql . "<br>" . $conn->error;}

}
?>