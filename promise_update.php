<?php
require('dbconnect.php');

    $p_id = $_GET['p_id'];
    $id = $_POST['id'];
    $no_approve = $_POST['no_approve'];
    $amount = $_POST['amount'];
    $around = $_POST['around'];
    $name = $_POST['name'];
    $interest = $_POST['interest'];

    $sql = "UPDATE promise SET

			id = '".$id."' ,
			no_approve = '".$no_approve."' ,
			amount = '".$amount."' ,
			around = '".$around."',
      name = '".$name."' ,
			interest = '".$interest."'
			WHERE p_id = '".$p_id."' ";

    if (mysqli_query($conn, $sql)) {
      echo "Record successfully";
      header('Location: showpromise.php');

   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    mysqli_close($conn);
 ?>
