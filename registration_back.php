<?php
session_start();

?>

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
if(isset($_POST['submit']))
{
  $a= mysqli_real_escape_string($conn,$_POST['f_name']);
  $b=mysqli_real_escape_string($conn,$_POST['u_name']);
  $c=mysqli_real_escape_string($conn,$_POST['e_id']);
  $d=mysqli_real_escape_string($conn,$_POST['phone']);
  $e=mysqli_real_escape_string($conn,$_POST['date']);
  $f=mysqli_real_escape_string($conn,$_POST['passw']);
  $g=mysqli_real_escape_string($conn,$_POST['c_pwd']);
  $h=mysqli_real_escape_string($conn,$_POST['gen']);

  $str_pass=password_hash($f, PASSWORD_BCRYPT);
  $c_pass=password_hash($g, PASSWORD_BCRYPT);
  
  $emailquery = "select * from registration where email = '$c'";
  $queryi = mysqli_query($conn,$emailquery);

  $emailcount = mysqli_num_rows($queryi);

  if($emailcount>0)
  {
    ?>
          <script>
            alert("Email already exists! Please Log In");
            window.location.href = "login.php";

          </script>
        <?php
  }
  else
  {
    if($f==$g)
    {
      $sql="INSERT INTO registration(full_name, user_name, email, ph_no,dob, password, c_password, gender) VALUES ('$a','$b','$c','$d','$e','$str_pass','$c_pass','$h')";
      if ($conn->query($sql) === TRUE)
      {
        ?>
          <script>
            alert("Registration Done! Login Now.");
            window.location.href = "login.php";
          </script>
        <?php
        //header("location:login.php");
      }
      else
      {
        ?>
          <script>
            alert("Registration Not Done");
            window.location.href = "registration.php";
          </script>
        <?php
          //header("location:registration.php");
          echo "Error: " . $sql . "<br>" . $conn->error;

      }

    }
    else
    {
      ?>
          <script>
            alert("Passwords are not matching!");
            window.location.href = "registration.php";
          </script>
        <?php
    }

  }

}
$conn->close();

?>