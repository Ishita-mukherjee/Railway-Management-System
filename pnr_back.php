<?php

  session_start();
  $conn=mysqli_connect("localhost","root","","railwaymanagementsystem");
?>


<?php
  $a=$_POST['pnr_n'];

  
$sql=" select * from `book` where p_id='$a'";
$result=mysqli_query($conn,$sql);
if($result)
  {
    ?>
    <title>PNR Info</title>
    <head><link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet"></head>
    <style>
      table
      {
        border-radius: 10px;

      }
      th
      {
        font-size: 25px;
        /*border: 1px solid red;*/
        color: #7D3C98;
      
      }
      tr:hover {background-color: #f5f5f5;}
      td
      {
        font-size: 25px;
      }
      .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 36px;
  margin: 4px 2px;
  margin-left: 45%;
  transition-duration: 0.4s;
  cursor: pointer;
  float: center;
  height: 30px;
  width: 70px;
}

      .button1 {
  background-color: #4A235A; 
  color: white; 
  border-radius: 12px;
  font-family: 'Roboto Slab', serif;
}

.button1:hover {
  background-color: #D2B4DE;
  color: black;
}
     body {background-image : linear-gradient(#393960,#A569BD,#cfcfe2);}  </style>
    <br><br>
  <h2 style="font-family: 'Goblin One', cursive; color: white;margin-left: 40%;font-size: 70px">PNR</h2>
  <br><br>
<table style="text-align:center;border: 3px solid #8E44AD;background-color:white;margin:30px;padding:20px;" cellspacin="5px">
<tr><th>Name</th><th>Source</th><th>Destination</th><th>Date</th><th>Time</th><th>Train name</th><th>Seat Type</th><th>Seat No.</th><th>Duration</th><th>Status</th></tr>
<tr></div></tr>
<?php
while($row=mysqli_fetch_assoc($result)) 
{
?>
<tr>
  <td><?php echo $row['p_name'] ?></td>
<td width="10%"><?php echo $row['source'] ?></td>
<td width="2%"><?php echo  $row['destination']; ?></td>
<td><?php echo $row['departure'] ?></td>
<td><?php echo $row['time'] ?></td>
<td><?php echo $row['t_name'] ?></td>
<td><?php echo $row['seat_type'] ?></td>
<td><?php echo $row['seat_no'] ?></td>
<td><?php echo $row['duration'] ?></td>
<td>Confirmed</td>

</tr>
</table>
<br>
  <a href="pnrcheck.php" class="button button1">Back</a>
</body>
<?php
    // header("location:.php?msg=done");
  }
}
  else
  {
    header("location:pnrcheck.php?msg=incorrect pnr");
  }
$conn->close();

?>