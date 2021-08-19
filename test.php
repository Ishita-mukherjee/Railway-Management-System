<?php

  session_start();
  /*echo $_SESSION['uname'];
  echo $_SESSION['src'];
    echo $_SESSION['desti'];
    echo $_SESSION['dept_date'];*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accomodation</title>

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
<body style="background-color: lightblue;">

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IRBMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
        <a href="#">Accomodation
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
                <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
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
                <h3 class="panel-title">2. PASSENGER INFO</h3>
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
  <div class="col-md-1"></div>
</div>
<div class="container-fluid">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
       <h2>
        <center style="font-family: 'Roboto Slab', serif;">ACCOMODATION</center>
       </h2>


    <?php
$con=mysqli_connect("localhost","root","","railwaymanagementsystem");
if(!$con){
die('could not connect :'.mysqli_connect_error());}
$id=$_GET['tid'];
$_SESSION['tid']=$id;
//echo $_SESSION['tid'];
$sql="SELECT `train_name`,`Sleeper`,`AC 2 Tier`, `First Class` FROM `train` WHERE train_id='$id'";
$result=mysqli_query($con,$sql);
?>
<form method="post" action="testpass2.php">

<table cellspacing="20px" cellpadding="10px" >
 
  <tbody>
    <?php
      while($row=mysqli_fetch_array($result)) {
    ?>
    <h1 style="font-family: 'Roboto Slab', serif;"><?php echo $row['train_name'];$_SESSION['train_n']= $row['train_name']?></h1>
    <tr>
      <table id="myTable-party" class="table table-bordered table-hover" cellspacing="0" width="100%" style="font-family: 'Roboto Slab', serif; text-align: center;" class="t">
        <td><h2>Select</h2></td>
        <td><h2>Seat Type</h2></td>
        <td><h2>Availability</h2></td>
        <td><h2>Fare</h2></td>
    </tr>
    <tr>
      <td>
            <input type="radio" value="Sleeper" name="seat" style="margin-top: 25%">
        </td>
        <td><h3>Sleeper</h3></td>
        <td style="font-size: 25px; padding-top: 20px;"><?php echo $row['Sleeper']; ?></td>
        <td style="font-size: 25px; padding-top: 20px;">350</td>
    </tr>
    <tr>
      <td>
            <input type="radio" value="AC 2 Tier" name="seat" style="margin-top: 25%" >
        </td>
        <td><h3>AC 2 Tier</h3></td>
        <td style="font-size: 25px; padding-top: 20px;"><?php echo  $row['AC 2 Tier']; ?></td>        
        <td style="font-size: 25px; padding-top: 20px;">500</td>
    </tr>
    <tr>
      <td>
            <input type="radio" value="First Class" name="seat" style="margin-top: 25%">
        </td>
        <td ><h3>First Class</h3></td>
      <td style="font-size: 25px; padding-top: 20px;"><?php echo $row['First Class']; ?></td>      
        <td style="font-size: 25px; padding-top: 20px;">700</td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<label for=""><br>Total No of Passenger:</label>
<input type="number" min="1" class="form-control" name="totalPass" plactreholder="Total # of Passenger" autocomplete="off"><br>
         <button type="Submit" style="background: lightgreen;  border-radius: 30px;  box-shadow: 0 0 4px #fff;  cursor: pointer;  box-shadow: 0 0 10px #fff;" name="submit">Select</button>

</form>
</body>
</html>