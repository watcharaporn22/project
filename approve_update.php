<?php
require('dbconnect.php');

    $a_id = $_GET['a_id'];
    $id = $_POST['id'];
    $account_approve = $_POST['account_approve'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $amount_approve = $_POST['amount_approve'];
    $interest= $_POST['interest'];
    $date= $_POST['date'];
    $date= $_POST['date'];
    $no_approve= $_POST['no_approve'];
    $amountpay= $_POST['amountpay'];
    $around= $_POST['around'];
    $name= $_POST['name'];
    $interest1= $_POST['interest1'];
    $status_approve= $_POST['status_approve'];


    $sql = "UPDATE approve SET
			id = '".$id."' ,
			account_approve = '".$account_approve."' ,
			date = '".$date."' ,
      amount = '".$amount."' ,
			amount_approve = '".$amount_approve."',
      interest = '".$interest."',
      date = '".$date."',
      date = '".$date."',
      no_approve = '".$no_approve."',
      amountpay = '".$amountpay."',
      around = '".$around."',
      name = '".$name."',
      interest1 = '".$interest1."',
      status_approve = '".$status_approve."'
			WHERE a_id = '".$a_id."' ";

    if (mysqli_query($conn, $sql)) {
      echo "Record successfully";
      header('Location: showapprove.php');

   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    mysqli_close($conn);
 ?>
