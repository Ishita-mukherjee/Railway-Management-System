<?php
$servername = "localhost";
$database = "railwaymanagementsystem";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<?php

    session_start();
    /*echo $_SESSION['uname'];
    echo $_SESSION['src'];
    echo $_SESSION['desti'];
    echo $_SESSION['dept_date'];*/
    $tr_id= $_SESSION['tid'];
  $tb = $_POST['totalPass'];  
  $seatType= $_POST['seat'];
  $_SESSION['seat']=$seatType;
  $_SESSION['total_pass']=$tb;
  //echo $_SESSION['amt'];
  $s= $_SESSION['seat'];
  //echo $s;
  $sql1 = "SELECT * FROM train where train_id='$tr_id'";
$res1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_array($res1);
$sn=$row1[$s];
$_SESSION['s_n']=$sn;
  if($_SESSION['seat']=="Sleeper")
  {
    $amt=350;
    $_SESSION['amt']=$amt;
    //echo $_SESSION['amt'];
  }
  else if($_SESSION['seat']=="AC 2 Tier")
  {
    $amt=500;
    $_SESSION['amt']=$amt;
    //echo $_SESSION['amt'];
  }
  else if($_SESSION['seat']=="First Class")
  {
    $amt=700;
    $_SESSION['amt']=$amt;
    //echo $_SESSION['amt'];
  }
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Passenger Info</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
 </head>
 <body style="background-color: lightblue;">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IRBMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
        <a href="#">PASSENGER INFO
        <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">STEPS FOR BOOKING</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          
          <div class="col-md-4">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">1. ACCOMODATION
                </h3>
              </div>
              <div class="panel-body">
                ACCOMODATION TYPE
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">2. PASSENGER INFO
                <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
                </h3>
              </div>
              <div class="panel-body">
                PASSENGER DETAILS
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title">3. PAYMENT INFO</h3>
              </div>
              <div class="panel-body">
                PASSENGER INFO & TOTAL PAYMENT
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br /><br />
  <br>
  <br>
  <div class="container">
   <br /><br>
   <br>
    <h2 align="center" style="font-family: 'Roboto Slab', serif; font-size: 30px;">Insert Passenger Details</h2>
   <div class="table-responsive" style="font-family: 'Roboto Slab', serif;">
    <div class="panel panel-default">
      <div class="panel-body">
    <table class="table table-bordered" id="crud_table">
     <tr style="font-size: 20px;text-align: center;">
      <th width="30%">Name</th>
      <th width="10%">Age</th>
      <th width="45%">Contact Number</th>
      <th width="10%">Gender</th>
      <th width="5%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="p_name"></td>
      <td contenteditable="true" class="p_age"></td>
      <td contenteditable="true" class="p_no"></td>
      <td contenteditable="true" class="p_gen"></td>
      <td></td>
     </tr>
    </table>
  </div>
</div>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs" style="font-size: 20px;">+</button>
    </div>
    <div align="center">
     <button type="button" name="save" id="save"  class="btn btn-success" style="font-size: 20px;">Save</button>
    </div>
    <br />
     <h2 align="center">Insert Booking Details</h2>
   <br />
     <form method="post" action="payment.php" style="font-size: 20px; width: 50%;margin-left: 25%;">
            <div class="form-group">
              <label for="">Booked By:</label>
              <input type="text" class="form-control" id="book-by" name="b_name"placeholder="Enter Name"value="<?php echo $_SESSION['uname']?>" required="" >
            </div>
            <div class="form-group">
              <label for="">Contact:</label>
              <input type="text" class="form-control" name="b_ph"id="cont" placeholder="Enter Contact" required="" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="">Address:</label>
              <input type="text" class="form-control" name="b_add" id="address" placeholder="Enter Address" required="" autocomplete="off">
              <br>
              
              <input type="submit" class="btn btn-success" align="center"name="submit" value="Next" style="margin-left: 50%; color: white; font-size: 20px;">
              <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
            </div>
          </form>
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='p_name'></td>";
   html_code += "<td contenteditable='true' class='p_age'></td>";
   html_code += "<td contenteditable='true' class='p_no'></td>";
   html_code += "<td contenteditable='true' class='p_gen' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var p_name = [];
  var p_age = [];
  var p_no = [];
  var p_gen = [];
  $('.p_name').each(function(){
   p_name.push($(this).text());
  });
  $('.p_age').each(function(){
   p_age.push($(this).text());
  });
  $('.p_no').each(function(){
   p_no.push($(this).text());
  });
  $('.p_gen').each(function(){
   p_gen.push($(this).text());
  });
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:{p_name:p_name, p_age:p_age, p_no:p_no, p_gen:p_gen},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    //fetch_item_data();
   }
  });
 });
 
/*function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();*/
 
});
</script>