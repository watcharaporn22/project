<?php
require('dbconnect.php');

    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $numberno = $_POST['numberno'];
    $date = $_POST['date'];
    $numbercard = $_POST['numbercard'];
    $balance = $_POST['balance'];



    $sql = "INSERT INTO adddata(id,first_name,last_name,numberno,date,numbercard,balance)
      VALUES('$id','$first_name','$last_name','$numberno','$date','$numbercard','$balance')";

    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: add.php');
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: add.php');
    exit();

 ?>
