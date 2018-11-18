<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('dbconnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $numberno= $_POST['numberno'];
    $date = $_POST['date'];
    $numbercard = $_POST['numbercard'];
    $amount = $_POST['amount'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database

	$sql = "UPDATE adddata SET
      id = '$id' ,
      first_name='$first_name' ,
			last_name='$last_name' ,
      numberno = '$numberno',
      date = '$date',
      numbercard = '$numbercard',
      amount = '$amount'
      WHERE id = ".$id." ";
      $result = mysqli_query($conn, $sql) or die ("Error ");

}

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'add.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}

mysqli_close($conn);
?>
