<?php
require('dbconnect.php');

    $a_id = $_POST['a_id'];
    $id = $_POST['id'];
    $account_approve = $_POST['account_approve'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $amount_approve = $_POST['amount_approve'];
    $interest= $_POST['interest'];
    $date1= $_POST['date1'];
    $date2= $_POST['date2'];
    $no_approve= $_POST['no_approve'];
    $amountpay= $_POST['amountpay'];
    $around= $_POST['around'];
    $name= $_POST['name'];
    $interest1= $_POST['interest1'];
    $status_approve= $_POST['status_approve'];




    $sql = "INSERT INTO approve(a_id,id,account_approve,date,amount,amount_approve,interest,date1,date2,no_approve,amountpay,around,name,interest1,status_approve)
      VALUES('$a_id','$id','$account_approve','$date','$amount','$amount_approve','$interest','$date1','$date2','$no_approve','$amountpay','$around','$name','$interest1','$status_approve')";





    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: showapprove.php');
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: showapprove.php');
    exit();

 ?>
