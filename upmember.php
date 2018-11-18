<?php
require ('dbconnect.php');
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>ธนาคารหมู่บ้าน</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/templatemo_main.css">

<!--
Dashboard Template
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>ธนาคารหมู่บ้านชุมชนโป่งหม้อข้าว</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li>
          <li class="active"><a href="index.html"><i class="fa fa-home"></i>หน้าแรก</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> การจัดการข้อมูลทั่วไป <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="show_member.php">ข้อมูลสมาชิก</a></li>
              <li><a href="showapprove.php">ข้อมูลการยื่นเสนอกู้/สัญญากูู้</a></li>
              <li><a href="showpromise.php">ข้อมูลชำระเงินกู้</a></li>

            </ul>
          </li>
          <li class="sub open">
            <a href="javascript:;">
                <i class="fa fa-university" aria-hidden="true"></i> การจัดการบัญชีเงินฝาก<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="add.php">รายการบัญชี</a></li>
              <li><a href="#.php">รายการการฝาก-ถอน</a></li>
</ul>

          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-credit-card" aria-hidden="true"></i> การจัดการการกู้ <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="approve.php">อนุมัติกู้/สัญญาเงินกู้</a></li>
              <li><a href="payment.php">ชำระเงินกู้</a></li>

            </ul>
          </li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>ออกจากระบบ</a></li>
        </ul>
      </div><!--/.navbar-collapse -->


          <div class="templatemo-content-wrapper">
            <div class="templatemo-content">
              <h1>ข้อมูลสมาชิก</h1>
<br>
<?php
ini_set('display_errors', 1);
error_reporting(~0);
$set = "SET NAMES UTF8";
require('dbconnect.php');
if(isset($_GET["id_addmember"]))
  {
    $id_addmember = $_GET["id_addmember"];
  }
$str = "SELECT * FROM addmember WHERE id_addmember = '".$id_addmember."' ";
$query = mysqli_query($conn,$str) or die ("error");
$result = mysqli_fetch_array($query,MYSQLI_ASSOC)
?>

              <div class="row">
                <div class="col-md-10">
                  <!-- <form role="form" id="templatemo-preferences-form"> -->
                  <form role="form" class="lead" method="post" action="addmember_insert.php">

                    <div class="row">
                      <div class="col-md-2 margin-bottom-10">
                        <label for="firstName" class="control-label"><font size="3">รหัสสมาชิก</font></label>
                        <input name="memberID" type="number" class="form-control" id="memberID"value="<?php echo $result["memberID"] ?>">
                      </div>
                      <div class="col-md-5 margin-bottom-15">
                        <label for="lastName" class="control-label"><font size="3">ชื่อ</font></label>
                        <input name="first_name" type="text" class="form-control" id="first_name"value="<?php echo $result["first_name"] ?>" >
                      </div>
                      <div class="col-md-5 margin-bottom-15">
                        <label for="lastName" class="control-label"><font size="3">นามสกุล</font></label>
                        <input name="last_name" type="text" class="form-control" id="last_name" value="<?php echo $result["last_name"] ?>">
                      </div>
                      <div class="col-md-3 margin-bottom-15">
                        <label for="lastName" class="control-label"><font size="3">เลขบัตรประจำตัวประชาชน</font></label>
                        <input name="card" type="number" class="form-control" id="card" value="<?php echo $result["card"] ?>">
                      </div>
                      <div class="col-md-2 margin-bottom-15">
                        <label><font size="3">เพศ</font></label>
                        <select name="sex" id="sex" class="form-control">;
                          <option value="<?php echo $result["sex"] ?>"></option>
                          <option value="ชาย">ชาย</option>
                          <option value="หญิง">หญิง</option>
                        </select>
                      </div>
                      <div class="col-md-3 margin-bottom-15">
                        <label for="dt"><font size="3">วัน/เดือน/ปี เกิด</font></label>
                     <input name="date" type="date" id="date" class="form-control" value="<?php echo $result["date"] ?>">
                      </div>
                      <div class="col-md-4 margin-bottom-15">
                        <label for="lastName" class="control-label"><font size="3">เบอร์โทรศัพท์</font></label>
                        <input name="tel" type="number" class="form-control" id="tel" value="<?php echo $result["tel"] ?>">
                      </div>
                      <div class="col-md-3 margin-bottom-15">
                        <label for="lastName" class="control-label"><font size="3">ที่อยู่ </font></label>
                        <input name="address" type="text" class="form-control" id="address" value="<?php echo $result["address"] ?>">
                      </div>
                      <div class="col-md-2 margin-bottom-15">
                        <label><font size="3">ตำบล</font></label>
                        <select name="district" id="district" class="form-control">;
                          <option value=""><?php echo $result["district"] ?></option>
                          <option value="ท่านางงาม">ท่านางงาม</font></option>
                          </select>
                      </div>
                      <div class="col-md-2 margin-bottom-15">
                        <label><font size="3">อำเภอ</font></label>
                        <select name="canton" id="canton" class="form-control">;
                          <option value=""><?php echo $result["canton"] ?></option>
                          <option value="บางระกำ">บางระกำ</option>
                        </select>
                      </div>
                      <div class="col-md-2 margin-bottom-15">
                        <label><font size="3">จังหวัด</font></label>
                        <select name="province" id="province" class="form-control">;
                          <option value=""><?php echo $result["province"] ?></option>
                          <option value="พิษณุโลก">พิษณุโลก</option>
                        </select>
                      </div>
                      <div class="col-md-3 margin-bottom-15">
                        <label for="lastName" class="control-label"><font size="3">รหัสไปรษณีย์</font></label>
                        <input name="zip" type="number" class="form-control" id="zip" value="<?php echo $result["zip"] ?>" >
                      </div>

                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
</body>
</html>
