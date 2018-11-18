<?php
require('dbconnect.php');


    $id = $_POST['id'];
    $idcard = $_POST['idcard'];
    $amount = $_POST['amount'];
    $sql = "SELECT * FROM adddata WHERE id = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $balance = $row['balance'];
    $totalamount = $balance-$amount;



    $sql = "INSERT INTO withdraw(id,idcard,amount,balance,)
      VALUES('$id','$idcard','$amount','$totalamount')";



    if (mysqli_query($conn, $sql)) {
      $inamount = "UPDATE adddata SET balance = '$totalamount' where id = '$id'";
      if (mysqli_query($conn, $inamount)) {

      } else {
          echo "Error deleting record: " . mysqli_error($conn);
      }

   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: showwithdraw.php');
    exit();

 ?>
