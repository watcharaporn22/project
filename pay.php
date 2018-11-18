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
              <li><a href="showapprove.php">ข้อมูลการยื่นเสนอกู้</a></li>
              <li><a href="showpromise.php">ข้อมูลสัญญาเงินกู้</a></li>
              <li><a href="showpayment.php">ข้อมูลชำระเงินกู้</a></li>

            </ul>
          </li>
          <li><a href="add.php"><i class="fa fa-cubes"></i><span class="badge pull-right"></span>การจัดการฝาก-ถอน</a></li>

          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> การจัดการการกู้ <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="approve.php">ยื่นข้อเสนอกู้/อนุมัติกู้</a></li>
              <li><a href="promise.php">สัญญาเงินกู้</a></li>
              <li><a href="payment.php">ชำระเงินกู้</a></li>

            </ul>
          </li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>ออกจากระบบ</a></li>
        </ul>
      </div><!--/.navbar-collapse -->


          <div class="templatemo-content-wrapper">
            <div class="templatemo-content">
              <h1>ชำระเงินกู้</h1>
<br>
              <div class="row">
                <div class="col-md-10">
                  <!-- <form role="form" id="templatemo-preferences-form"> -->
                  <form role="form" class="lead" method="post" action="payment_insert.php" name="form_cal">

                    <div class="row">
                      <div class="col-md-3 margin-bottom-15">
                        <label for="principle" class="control-label"><font size="3">จำนวนเงินต้น</font></label>
                        <input name="principle" type="number" class="form-control" id="principle" >
                      </div>
                      <div class="col-md-4 margin-bottom-15">
                        <label for="interest" class="control-label"><font size="3">ดอกเบี้ย</font></label>
                        <input name="interest" type="number" class="form-control" id="interest" >
                      </div>

                      <div class="col-md-5 margin-bottom-15">
                        <label for="amountpay" class="control-label"><font size="3">จำนวนเงินชำระ</font></label>
                        <input name="amountpay"  type="number" class="form-control" id="amountpay" >
                      </div>
                      <div class="form-group col-3">
                        <label >คำนวน</label>
                      <input name="btnCal" type="button" value="คำนวน"  OnClick="JavaScript:fncCal();">
                      </div>

                      </div>
                      <br>
                        <br>
                          <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-success">บันทึก</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-danger">ยกเลิก</button> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-secondary">พิมพ์</button>
                    </div>
                  </form>
                  </div>
                  </div>
                  </div>
                  </div>
                  <script language="javascript">
                      function fncCal()
                      {

                        var principle = document.form_cal.principle.value;
                        var interest = document.form_cal.interest.value;

                        // var	sum1 = (principle*interest)/100;  เงินต้น * ดอกเบี้ย หาร 100
                        var	sum1 = (principle*interest)/100;
                        // var sum2 = sum1 + parseInt(principle); เอาผลที่ได้มาบวกกับเงินต้น
                        var sum2 = sum1 + parseInt(principle);
                        var amountpay = sum2;

                      		//document.form_cal.total.value=total;
                          document.getElementById('amountpay').value = amountpay;
                      }
                    </script>




    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>








</body>
</html>
