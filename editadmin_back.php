<?php
  $con=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>
<?php
  $a=$_GET['n'];
  $b=$_GET['em'];
  $d=$_GET['pn'];
  $e=$_GET['id'];
 
  $s=mysqli_query($con,"  UPDATE `employee` SET `emp_name`='$a',`phn_no`='$d',`email`='$b' WHERE `emp_id`='$e'");
  if($s==1)
    {
    	//header("location:adminprofile.php?msg=done");
      ?>
                <script>
                  alert("Details Updated");
                  window.location.href = "adminprofile.php";
                </script>
           <?php
    }
    else
    {
    	//header("location:adminedit.php?msg=not done");
       ?>
                <script>
                  alert("Details Not Updated");
                  window.location.href = "adminedit.php.php";
                </script>
           <?php
    }
?>