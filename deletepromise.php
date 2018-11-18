<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

include('dbconnect.php');

	$id = $_GET['id'];
	$sql = "DELETE FROM promise
	WHERE id = '".$id."' ";
  $result = mysqli_query($conn, $sql) or die ("Error ");

    if($result){
    echo "<script type='text/javascript'>";
    echo "alert('ลบรายชื่อสำเร็จ');";
    echo "window.location = 'showpromise.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
    }

	mysqli_close($conn);
?>
