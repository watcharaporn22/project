<?php
require('dbconnect.php');

    $id_payment= $_POST['id_payment'];
    $paymentID= $_POST['paymentID'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $payment_no = $_POST['payment_no'];
    $id_promise = $_POST['id_promise'];
    $date = $_POST['date'];
    $principle = $_POST['principle'];
    $interest = $_POST['interest'];
    $a = $_POST['a'];
    $around = $_POST['around'];
    $amountpay = $_POST['amountpay'];
    $balance = $_POST['balance'];


    $sql = "INSERT INTO payment(id_payment,paymentID,first_name,last_name,payment_no,id_promise,date,principle,interest,a,around,amountpay,balance)
      VALUES('$id_payment','$paymentID','$first_name','$last_name','$payment_no','$id_promise','$date','$principle','$interest','$a','$around','$amountpay','$balance')";





    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: showpayment.php');
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: showpayment.php');
    exit();

 ?>
