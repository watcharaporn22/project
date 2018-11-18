<?php
require('dbconnect.php');


    $id= $_POST['id'];
    $no_approve= $_POST['no_approve'];
    $amount = $_POST['amount'];
    $around = $_POST['around'];
    $name = $_POST['name'];
    $interest = $_POST['interest'];




    $sql = "INSERT INTO promise(id,no_approve,amount,around,name,interest)
      VALUES('$id','$no_approve','$amount','$around','$name','$interest')";





    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: showpromise.php');
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: showpromise.php');
    exit();

 ?>
