<?php
	$con=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>

<?php
	$id=$_GET['tid'];
	$s=mysqli_query($con,"delete from train where train_id='$id'");
	if($s==1)
	    {
	    	//header("location:traindetails.php?msg=done");
	    	?>
                <script>
                  alert("Train Deleted");
                  window.location.href = "traindetails.php";
                </script>
           <?php
	    }
	    else
	    {
	    	//header("location:traindetails.php?msg= not done");
	    	?>
                <script>
                  alert("Train Not Deleted");
                  window.location.href = "traindetails.php";
                </script>
           <?php
	    }
?>