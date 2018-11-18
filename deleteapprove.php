<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

include('dbconnect.php');

	$a_id = $_GET['a_id'];
	$sql = "DELETE FROM approve
	WHERE a_id = '".$a_id."' ";
  $result = mysqli_query($conn, $sql) or die ("Error ");

    if($result){
    echo "<script type='text/javascript'>";
    echo "alert('ลบรายชื่อสำเร็จ');";
    echo "window.location = 'showapprove.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
    }

	mysqli_close($conn);
?>
