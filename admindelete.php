<?php
	$con=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>

<?php
	$id=$_GET['tid'];
	$s=mysqli_query($con,"delete from employee where emp_id='$id'");
	if($s==1)
	    {
	    	//header("location:adminprofile.php?msg=done");
	    	?>
			          <script>
			            alert("Deleted");
			            window.location.href = "adminprofile.php";
			          </script>
			     <?php
	    }
	    else
	    {
	    	//header("location:adminprofile.php?msg= not done");
	    	?>
			          <script>
			            alert("Not Deleted");
			            window.location.href = "adminprofile.php";
			          </script>
			     <?php
	    }
?>