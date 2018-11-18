<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

include('dbconnect.php');

	$id_addmember = $_GET['id_addmember'];
	$sql = "DELETE FROM addmember
	WHERE id_addmember = '".$id_addmember."' ";
  $result = mysqli_query($conn, $sql) or die ("Error ");

    if($result){
    echo "<script type='text/javascript'>";
    echo "alert('ลบรายชื่อสำเร็จ');";
    echo "window.location = 'show_member.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
    }

	mysqli_close($conn);
?>
