<?php
require('dbconnect.php');

    $memberID = $_POST['memberID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $card = $_POST['card'];
    $sex = $_POST['sex'];
    $date = $_POST['date'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $district = $_POST['district'];
    $canton = $_POST['canton'];
    $province = $_POST['province'];
    $zip = $_POST['zip'];


    $sql = "INSERT INTO addmember(memberID,first_name,last_name,card,sex,date,tel,address,district,canton,province,zip)
      VALUES('$memberID','$first_name','$last_name','$card','$sex','$date','$tel','$address','$district','$canton','$province','$zip')";

    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: show_member.php');
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: show_member.php');
    exit();

 ?>
