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
              <li><a href="showpayment.php">ข้อมูลชำระเงินกู้</a></li>

            </ul>
          </li>
          <li class="sub open">
            <a href="javascript:;">
                <i class="fa fa-university" aria-hidden="true"></i> การจัดการบัญชีเงินฝาก<div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="approve.php">รายการบัญชี</a></li>
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
                    <div class="margin-bottom-30">
            <div class="row">
              <div class="col-md-100">
                <ul class="nav nav-pills">
                  <?php
                  ini_set('display_errors', 1);
                  error_reporting(~0);
                  $set = "SET NAMES UTF8";
                  require('dbconnect.php');
                  if(isset($_GET["a_id"]))
                    {
                      $a_id = $_GET["a_id"];
                    }
                  $str = "SELECT * FROM approve WHERE a_id = '".$_GET["a_id"]."'";
                  $query = mysqli_query($conn,$str) or die ("error");
                  $result = mysqli_fetch_array($query,MYSQLI_ASSOC)
                  ?>
                  <br>
                    <h4 class="margin-bottom-15">ข้อมูลยื่นเสนอกู้/อนุมัติกู้</h4>
                    <br>
                    <br>
                    <div class="row">
                      <div class="col-md-10">
                        <!-- <form role="form" id="templatemo-preferences-form"> -->
                        <form role="form" class="lead" method="post" action="approve_insert.php">

                          <div class="row">
                            <div class="col-md-2 margin-bottom-10">
                              <label for="firstName" class="control-label"><font size="3">รหัสสมาชิก</font></label>
                              <input name="id" type="id" class="form-control" id="id" value="<?php echo $result["id"] ?>">
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">เลขที่เสนอกู้</font></label>
                              <input name="account_approve" type="text" class="form-control" id="account_approve" value="<?php echo $result["account_approve"] ?>">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="dt"><font size="3">วัน/เดือน/ปีที่ยื่นกู้ </font> </label>
                           <input name="date" type="date" class="form-control">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">จำนวนเงินยื่นกู้</font></label>
                              <input name="amount" type="text" class="form-control" id="amount" value="<?php echo $result["amount"] ?>">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">จำนวนเงินที่อนุมัติ</font></label>
                              <input name="amount_approve"type="text" class="form-control" id="amount_approve" value="<?php echo $result["amount_approve"] ?>">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">ดอกเบี้ย/ปี(%)</font></label>
                              <input name="interest"type="text" class="form-control" id="interest" value="<?php echo $result["interest"] ?>">
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label for="dt"><font size="3">วัน/เดือน/ปี ที่เริ่มชำระ</font> </label>
                           <input name="date1" type="date" class="form-control">
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label for="dt"><font size="3">วัน/เดือน/ปี ที่สิ้นสุดการชำระ</font> </label>
                           <input name="date2" type="date" class="form-control">
                            </div>

                            <div class="col-md-6 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">เลขที่ใบอนุมัติกู้</font></label>
                              <input name="no_approve"  type="text" class="form-control" id="no_approve" value="<?php echo $result["no_approve"] ?>">
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">จำนวนเงินชำระ/งวด</font></label>
                              <input name="amountpay" type="text" class="form-control" id="amountpay" value="<?php echo $result["amountpay"] ?>">
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label><font size="3">จำนวนงวดที่ชำระ</font></label>
                              <select name="around" id="around" class="form-control">;
                                <option value="">-----</option>
                                <option value="ชำระดอกเบี้ย">ชำระดอกเบี้ย</option>
                                <option value="ชำระเงินต้น+ดอกเบี้ย">ชำระเงินต้น+ดอกเบี้ย</option>
                              </select>
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">ชื่อ-นามสกุลคู่สมรส</font></label>
                              <input name="name" type="name" class="form-control" id="name" value="<?php echo $result["name"] ?>">
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">จำนวนดอกเบี้ย(กรณีผู้กู้ไม่ชำระเงินภายในกำหนด)</font></label>
                              <input name="interest1" type="text" class="form-control" id="interest1" value="<?php echo $result["interest1"] ?>">
                            </div>
                            <div class="col-md-6 margin-bottom-15">
                              <label><font size="3">สถานะ</font></label>
                              <select name="status_approve" id="status_approve" class="form-control">;
                                <option value="">-----</option>
                                <option value="อนุมัติ">อนุมัติ</option>
                                <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
                              </select>
                            </div>

                            </div>
                            <br>
                              <br>
                                <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-success">บันทึก</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-danger">ยกเลิก</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="reportpromise1.php" class="btn btn-info" role="button">พิมพ์</a>
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
