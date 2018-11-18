<?php
require('dbconnect.php');


    $id = $_POST['id'];
    $idcard = $_POST['idcard'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $sql = "SELECT * FROM account WHERE id = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $balance = $row['balance'];
    $totalamount = $balance+$amount;


    $sql = "INSERT INTO deposit(id,idcard,amount,balance,date)
      VALUES('$id','$idcard','$amount','$totalamount','$date')";

    if (mysqli_query($conn, $sql)) {
      $inamount = "UPDATE account SET balance = '$totalamount' where id = '$id'";
      if (mysqli_query($conn, $inamount)) {

      } else {
          echo "Error deleting record: " . mysqli_error($conn);
      }
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: showdeposit.php');
    exit();

 ?>
