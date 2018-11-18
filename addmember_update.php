<?php
require('dbconnect.php');

    $id_addmember = $_GET['id_addmember'];
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


    $sql = "UPDATE addmember SET
			memberID = '".$memberID."' ,
			first_name = '".$first_name."' ,
			last_name = '".$last_name."' ,
			card = '".$card."' ,
			sex = '".$sex."',
      date = '".$date."' ,
			tel = '".$tel."' ,
			address = '".$address."' ,
			district = '".$district."' ,
			canton = '".$canton."',
      province = '".$province."',
      zip = '".$zip."'
			WHERE id_addmember = '".$id_addmember."' ";

    if (mysqli_query($conn, $sql)) {
      echo "Record successfully";
      header('Location: show_member.php');

   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    mysqli_close($conn);
 ?>
