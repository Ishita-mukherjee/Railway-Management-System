
<?php

  session_start();
  //echo $_SESSION['uname'];
?>
<?php

if(isset($_POST['submit']))
{
    $valueToSearch1 = $_POST['valueToSearch1'];
    $valueToSearch = $_POST['valueToSearch'];
    $date = $_POST['dob'];
    $_SESSION['src']=$valueToSearch;
    $_SESSION['desti']=$valueToSearch1;
    $_SESSION['dept_date']=$date;
    //echo $_SESSION['src'];
    //echo $_SESSION['desti'];
    //echo $_SESSION['dept_date'];
    $query = "SELECT * FROM `train` WHERE `source`='$valueToSearch' and `destination` ='$valueToSearch1' ORDER BY `train_id`";
    $search_result = filterTable($query);
    ?> <table cellpadding="10px" cellspacing="20px">
                <tr>
                    <th>Train Id</th>
                    <th>Train Name</th>
                    <th>Duration</th>
                    <th>Time</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Book Train</th>
                   </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['train_id'];?></td>
                    <td><?php echo $row['train_name'];?></td>
                    <td><?php echo $row['duration'];
                                $_SESSION['dur']=$row['duration'];?></td>
                    <td><?php echo $row['time'];$_SESSION['time']=$row['time'];?></td>
                    <td><?php echo $row['source'];?></td>
                    <td><?php echo $row['destination'];?></td>
                     <td><a href="test.php?tid=<?php echo($row['train_id']);?>">Book</a></td>
                </tr>
                <?php endwhile;?>
            </table>
            <?php
    
}
 else {
    $query = "SELECT * FROM `train`";
    $search_result = filterTable($query);
    ?> <table>
                <tr>
                    <th>Train Id</th>
                    <th>Train Name</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Source</th>
                    <th>Destination</th>
                   </tr>

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['train_id'];?></td>
                    <td><?php echo $row['train_name'];?></td>
                    <td><?php echo $row['day'];?></td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['source'];?></td>
                    <td><?php echo $row['destination'];?></td>
                    <td><a href="test.php?tid=<?php echo($row['train_id']);?>">Book</a></td>
 
                </tr>
                <?php endwhile;?>
            </table>
            <?php
}

// function to connect and execute the query*/
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "railwaymanagementsystem");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
 