<?php
require('dbconnect.php');

    $id = $_GET['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $numberno = $_POST['numberno'];
    $date = $_POST['date'];
    $numbercard = $_POST['numbercard'];
    $balance = $_POST['balance'];


    $sql = "UPDATE adddata SET
			id = '".$id."' ,
			first_name = '".$first_name."' ,
			last_name = '".$last_name."' ,
			numberno = '".$numberno."' ,
			date = '".$date."',
      numbercard = '".$numbercard."' ,
			balance = '".$balance."'
			WHERE id = '".$id."' ";

    if (mysqli_query($conn, $sql)) {
      echo "Record successfully";
      header('Location: add.php');

   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    mysqli_close($conn);
 ?>
