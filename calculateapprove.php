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
          <li class="active"><a href="indexmember.html"><i class="fa fa-home"></i>หน้าแรก</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> การจัดการข้อมูลทั่วไป <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="show_member.php">ข้อมูลสมาชิก</a></li>
              <li><a href="showapprove.php">ข้อมูลการยื่นเสนอกู้</a></li>
              <li><a href="#">ข้อมูลสัญญาเงินกู้</a></li>
              <li><a href="#">ข้อมูลชำระเงินกู้</a></li>

            </ul>
          </li>
          <li><a href="add.php"><i class="fa fa-cubes"></i><span class="badge pull-right"></span>การจัดการฝาก-ถอน</a></li>

          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> คำนวณดอกเบี้ย <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="calculatedeposit.php">คำนวณดอกเบี้ยเงินฝาก</a></li>
              <li><a href="calculateapprove.php">คำนวณดอกเบี้ยเงินเงินกู้</a></li>

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
                  <br>
                    <h4 class="margin-bottom-15">คำนวณดอกเบี้ยเงินกู้</h4>
                    <br>
                    <br>
                    <div class="row">
                      <div class="col-md-10">
                        <!-- <form role="form" id="templatemo-preferences-form"> -->
                        <form role="form" class="lead" method="post" action="payment_insert.php">

                          <div class="row">
                            <div class="col-md-4 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">จำนวนเงินต้น</font></label>
                              <input name="principle" type="number" class="form-control" id="principle" value="">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">ดอกเบี้ย/ปี(%)</font></label>
                              <input name="interest" type="number" class="form-control" id="interest" value="12">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="a" class="control-label"><font size="3">ดอกเบี้ยที่ต้องชำระ(%)</font></label>
                              <input name="a" type="number" class="form-control" id="a" value="">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label><font size="3">จำนวนงวดที่ชำระ</font></label>
                              <select name="around" id="around" class="form-control">;
                                <option value="">-----</option>
                                <option value="ชำระดอกเบี้ย">ชำระดอกเบี้ย</option>
                                <option value="ชำระเงินต้น+ดอกเบี้ย">ชำระเงินต้น+ดอกเบี้ย</option>
                              </select>
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">จำนวนเงินที่ต้องชำระ</font></label>
                              <input name="amountpay"  type="text" class="form-control" id="amountpay" value="">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">ยอดเงินคงเหลือ</font></label>
                              <input name="balance"  type="number" class="form-control" id="balance" value="">
                            </div>

                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="btnCal" type="button" value="คำนวณ"  OnClick="JavaScript:fncCal();">
                            </div>





    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
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
          var sum3 = (principle*interest)/100;
          var a = sum3;

            //document.form_cal.total.value=total;
            document.getElementById('amountpay').value = amountpay;
            document.getElementById('a').value = a;

        }
      </script>
</body>
</html>
