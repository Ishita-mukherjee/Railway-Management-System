<?php
//insert.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "railwaymanagementsystem");
if(isset($_POST["p_name"]))
{
 $p_name = $_POST["p_name"];
 $p_age = $_POST["p_age"];
 $p_no = $_POST["p_no"];
 $p_gen= $_POST["p_gen"];
 $b_by=$_SESSION['uname'];
 $_SESSION['p_name']=$p_name;

$sn=$_SESSION['s_n'];
 //$y=$_SESSION['b_addr'];
 //$z=$_SESSION['b_pn'];
 $query = '';
 for($count = 0; $count<count($p_name); $count++)
 {
  $sn1=$sn--;
  $p_name_clean = mysqli_real_escape_string($connect, $p_name[$count]);
  $p_age_clean = mysqli_real_escape_string($connect, $p_age[$count]);
  $p_no_clean = mysqli_real_escape_string($connect, $p_no[$count]);
  $p_gen_clean = mysqli_real_escape_string($connect, $p_gen[$count]);
   //echo $p_name_clean;
  if($p_name_clean != '' && $p_age_clean != '' && $p_no_clean != '' && $p_gen_clean != '')
  {
  
   $query .= '
   INSERT INTO `book`(`p_name`, `p_age`, `p_no`, `p_gen`, `booked_by`, `time`, `duration`,`departure`, `source`, `destination`, `t_name`, `seat_type`,`seat_no`) VALUES ("'.$p_name_clean.'", "'.$p_age_clean.'", "'.$p_no_clean.'", "'.$p_gen_clean.'", "'.$b_by.'","' . $_SESSION['time'] . '"," '. $_SESSION['dur'] . '"," '. $_SESSION['dept_date'] . '","' . $_SESSION['src'] . '"," '. $_SESSION['desti'] . '","'.$_SESSION['train_n'].'","'.$_SESSION['seat'].'","'.$sn.'"); 
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Passenger Data Inserted';
  }
  else
  {
    echo "Error: " . $query . "<br>" . $connect->error;

  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
