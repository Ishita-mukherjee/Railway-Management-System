<?php
	$con=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>

<?php
	$id=$_GET['tid'];
	$s=mysqli_query($con,"delete from book where p_name='$id'");
	if($s==1)
	    {
	    	?>
			          <script>
			            alert("Booking Cancelled");
			            window.location.href = "history.php";
			          </script>
			     <?php
	    }
	    else
	    {
	    	?>
			          <script>
			            alert("Booking Cancelled");
			            window.location.href = "history.php";
			          </script>
			     <?php
	    }
?>