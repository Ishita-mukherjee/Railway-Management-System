<?php
  $con=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>
<?php
  $a=$_GET['n'];
  $b=$_GET['src'];
  $d=$_GET['desti'];
  $e=$_GET['id'];
  $f=$_GET['time'];
  $g=$_GET['day'];
  $h=$_GET['tn'];
  $s=mysqli_query($con,"update train set train_name='$a',source='$b',destination='$d',duration='$g',time='$f',pnr='$h' where train_id='$e'");
  if($s==1)
    {
    	//header("location:traindetails.php?msg=done");
      ?>
                <script>
                  alert("Train Details Updated");
                  window.location.href = "traindetails.php";
                </script>
           <?php
    }
    else
    {
    	//header("location:edittrain.php?msg=not done");
      ?>
                <script>
                  alert("Train Details Not Updated");
                  window.location.href = "edittrains.php";
                </script>
           <?php
    }
?>