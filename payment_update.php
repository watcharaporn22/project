<?php
require('dbconnect.php');
    $id_payment = $_GET['id_payment'];
    $paymentID = $_GET['paymentID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $payment_no = $_POST['payment_no'];
    $id_promise = $_POST['id_promise'];
    $date = $_POST['date'];
    $principle = $_POST['principle'];
    $interest = $_POST['interest'];
    $a = $_POST['a'];
    $around = $_POST['around'];
    $amountpay = $_POST['amountpay'];
    $balance = $_POST['balance'];

    $sql = "UPDATE payment SET
      id_payment = '".$id_payment."' ,
			paymentID = '".$paymentID."' ,
			first_name = '".$first_name."' ,
			last_name = '".$last_name."' ,
			payment_no = '".$payment_no."',
      id_promise = '".$id_promise."' ,
			date = '".$date."',
      principle = '".$principle."',
      interest = '".$interest."',
      a = '".$a."',
      around = '".$around."',
      amountpay = '".$amountpay."',
      balance = '".$balance."'
			WHERE id_payment = '".$id_payment."' ";

    if (mysqli_query($conn, $sql)) {
      echo "Record successfully";
      header('Location: showpayment.php');

   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    mysqli_close($conn);
 ?>
