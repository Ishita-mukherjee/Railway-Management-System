<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "railwaymanagementsystem");
$output = '';
$query = "SELECT * FROM train ORDER BY train_id DESC";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h3 align="center">Item Data</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th width="30%">Item Name</th>
  <th width="10%">Item Code</th>
  <th width="50%">Description</th>
  <th width="10%">Price</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["train_name"].'</td>
  <td>'.$row["train_id"].'</td>
  <td>'.$row["source"].'</td>
  <td>'.$row["destination"].'</td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>