<?php

   	session_start();
   /*	echo $_SESSION['uname'];
  	echo $_SESSION['src'];
    echo $_SESSION['desti'];
    echo $_SESSION['dept_date'];
    echo $_SESSION['tid'];
	echo $_SESSION['seat'];
	echo $_SESSION['total_pass'];
	echo $_SESSION['amt'];*/
	?>
<?php
$servername = "localhost";
$database = "railwaymanagementsystem";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";
$a=$_POST['b_name'];
$_SESSION['b_n']=$a;
$b=$_POST['b_ph'];
$c=$_POST['b_add'];
$_SESSION['b_name']= $a;
$_SESSION['b_pn']= $b;
$_SESSION['b_addr']= $c;
$tr_id=$_SESSION['tid'];

 $sql = "SELECT * FROM train where train_id='$tr_id'";
$res = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($res))
{
 $t_name=$row["train_name"];
 $_SESSION['train_n']=$t_name;
 $d_time=$row["time"];
 $dur=$row["duration"];
 $pnr=$row["pnr"];

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .sec {
      text-align: center;
      padding-bottom: 20px;
    }
  </style>
</head>
<body style="background-color: lightblue;">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IRBMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
        <a href="#">Ticket Info
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
                <h3 class="panel-title">3. TICKET INFO
                <span class="glyphicon glyphicon-saved" aria-hidden="true"></span></h3>
              </div>
              <div class="panel-body">
                PASSENGER INFO & 
                TOTAL PAYMENT
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default" style="font-family: 'Roboto Slab', serif;">
			<div class="panel-body">
				<h2>
			 	<center>TICKET INFO</center>
			 </h2>
			 <br />
			 <div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title"><center>DEPARTURE</center></h3>
			 	</div>
			 	<div class="panel-body">
			 		<strong>
			 	<h3>TRAIN DETAILS:-</h3>
        <br>
			 	<h4>IRBMS Booking Details</h4>
			 	</div>
			 	<div class="sec">
			 	
			 	<strong> <h2><?= $_SESSION['src'] ?>-<?= $_SESSION['desti'] ?></h2></strong><br /> 
          <br>
			 	<strong style="font-size: 20px">Departure Date: &nbsp &nbsp</strong> <?= $_SESSION['dept_date'] ?><br />
			 	<strong style="font-size: 20px">Train Name:&nbsp &nbsp</strong> <?=$t_name?><br />
			 	<strong style="font-size: 20px">Departure Time:&nbsp &nbsp</strong> <?=$d_time?><br />
			 	<strong style="font-size: 20px">Duration:&nbsp &nbsp</strong> <?=$dur?><br />
			 	<strong style="font-size: 20px">Train Number:&nbsp &nbsp</strong> <?=$pnr?><br /></h4>
		 	</div>
			 </div>

			<div class="panel panel-success">
			 	<div class="panel-heading">
			 	<h3 class="panel-title">CONTACT INFO</h3>
			 	</div>

			 	<div class="panel-body">
			 	<h3>
			 	<strong>Booked By:&nbsp &nbsp</strong> <?= $a ?><br /> <br>
			 	<strong>Contact No:&nbsp &nbsp</strong> <?= $b ?><br /><br>
			 	<strong>Address:&nbsp &nbsp</strong> <?= $c ?><br /><br>
			 	</div></h3>
			 </div>


<?php
$book = $_SESSION['uname'];
//echo $_SESSION['p_name'];
$s=$_SESSION['seat'];
$sql = "SELECT * FROM train where train_id='$tr_id'";
$res = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_array($res);
$sn=$row1[$s];
$tp=$_SESSION['total_pass'];
$sn1=$sn;
$p_name=$_SESSION['p_name'];
for($count = 0; $count<count($p_name); $count++)
 {
     $sn1=$sn--;
  $p_name_clean = mysqli_real_escape_string($conn, $p_name[$count]);
$query = "SELECT * FROM book where booked_by='$book' and `p_name`='$p_name_clean'";
$result = mysqli_query($conn, $query);
$output = '
<br />
<div class="container-fluid">
				<strong>
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
Ticket Info</strong><br>
<table id="myTable-party" class="table table-bordered table-hover" cellspacing="10px" width="100%">
<thead>
							    <tr>
                  <th>
                        <center>
                           PNR
                        </center>
                      </th>
							        <th>
							        	<center>
							       			Name
							        	</center> 
							        </th>
							        <th>
							        	<center>
							        		 Phone Number
							        	</center>
						        	</th>
							        <th>
							        	<center>
							        		Age
							        	</center>
						        	</th>
						        	 <th>
							        	<center>
							        		Gender
							        	</center>
						        	</th>
                      <th>
                        <center>
                          Seat Type
                        </center>
                      </th>
                      <th>
                        <center>
                          Seat No.
                        </center>
                      </th>
							    </tr>
							</thead>
						    <tbody>
 
';

while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["p_id"].'</td>
  <td>'.$row["p_name"].'</td>
  <td>'.$row["p_no"].'</td>
  <td>'.$row["p_age"].'</td>
  <td>'.$row["p_gen"].'</td>
  <td>'.$row["seat_type"].'</td>
  <td>'.$sn1.'</td>

 </tr>
 ';
}
 $output .= '</table>';
echo $output;

}
$amount=$_SESSION['amt'];
$tamt=$tp*$amount;
$_SESSION['s_no']=$sn1;

?>
</div>
</strong>
<strong style="font-size: 20px">Total Amount:&nbsp &nbsp<?= $tamt ?></strong><br />
<br>
<form method="post" action="payment_back.php">
	<input type="submit" name="confirm" value="Confirm" style="background-color: #2874A6;color: white;margin-left: 40%;height: 45px;font-size: 20px">
</form>
</body>
</html>