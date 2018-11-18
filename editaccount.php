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
          <li class="active"><a href="#"><i class="fa fa-home"></i>หน้าแรก</a></li>
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
                    <div class="margin-bottom-30">
            <div class="row">
              <div class="col-md-100">
                <ul class="nav nav-pills">
                  <?php
                  ini_set('display_errors', 1);
                  error_reporting(~0);
                  $set = "SET NAMES UTF8";
                  require('dbconnect.php');
                  if(isset($_GET["id"]))
                    {
                      $id_addmember = $_GET["id"];
                    }
                  $str = "SELECT * FROM adddata WHERE id = '".$_GET["id"]."'";
                  $query = mysqli_query($conn,$str) or die ("error");
                  $result = mysqli_fetch_array($query,MYSQLI_ASSOC)
                  ?>
                  <br>
                    <h4 class="margin-bottom-15">ข้อมูลบัญชีเงินฝาก</h4>
                    <br>
                    <br>
                    <div class="row">
                      <div class="col-md-10">
                        <!-- <form role="form" id="templatemo-preferences-form"> -->
                        <form role="form" class="lead" method="post" action="addaccount_update.php?id=<?php echo $result["id"];?>">

                          <div class="row">
                            <div class="col-md-2 margin-bottom-10">
                              <label for="lastName" class="control-label"><font size="3">รหัสสมาชิก</font></label>
                              <input type="number" class="form-control" id="id" name="id" value="<?php echo $result["id"] ?>">
                            </div>
                            <div class="col-md-5 margin-bottom-15">
                              <label for="lastName" class="control-label" ><font size="3">ชื่อ</font></label>
                              <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $result["first_name"] ?>">
                            </div>
                            <div class="col-md-5 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">นามสกุล</font></label>
                              <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $result["last_name"] ?>">
                            </div>
                            <div class="col-md-3 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">เลขบัตรประจำตัวประชาชน</font></label>
                              <input type="number" class="form-control" id="numberno" name="numberno" value="<?php echo $result["numberno"] ?>">
                            </div>
                            <div class="col-md-4 margin-bottom-15">
                              <label for="dt"><font size="3">วัน/เดือน/ปี เปิดบัญชี</font></label>
                           <input name="date" type="date" class="form-control" value="<?php echo $result["date"] ?>">
                            </div>
                            <div class="col-md-5 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">เลขบัญชี</font></label>
                              <input type="number" class="form-control" id="numbercard" name="numbercard"  value="<?php echo $result["numbercard"] ?>">
                            </div>
                            <div class="col-md-5 margin-bottom-15">
                              <label for="lastName" class="control-label"><font size="3">ยอดเงินคงเหลือ</font></label>
                              <input type="number" class="form-control" id="balance" name="balance"  value="<?php echo $result["balance"] ?>">
                            </div>
                            </div>
                            <br>
                              <br>
                                <br>
                                  <br>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <button type="submit" class="btn btn-success">บันทึก</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <button type="button" class="btn btn-danger">ยกเลิก</button>
                                </form>
                          </div>
                        </ul>
                      </div>
                    </div>
                  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/templatemo_script.js"></script>
    <script type="text/javascript">
    // Line chart
  //   var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  //   var lineChartData = {
  //     labels : ["January","February","March","April","May","June","July"],
  //     datasets : [
  //     {
  //       label: "My First dataset",
  //       fillColor : "rgba(220,220,220,0.2)",
  //       strokeColor : "rgba(220,220,220,1)",
  //       pointColor : "rgba(220,220,220,1)",
  //       pointStrokeColor : "#fff",
  //       pointHighlightFill : "#fff",
  //       pointHighlightStroke : "rgba(220,220,220,1)",
  //       data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
  //     },
  //     {
  //       label: "My Second dataset",
  //       fillColor : "rgba(151,187,205,0.2)",
  //       strokeColor : "rgba(151,187,205,1)",
  //       pointColor : "rgba(151,187,205,1)",
  //       pointStrokeColor : "#fff",
  //       pointHighlightFill : "#fff",
  //       pointHighlightStroke : "rgba(151,187,205,1)",
  //       data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
  //     }
  //     ]
  //
  //   }
  //
  //   window.onload = function(){
  //     var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
  //     window.myLine = new Chart(ctx_line).Line(lineChartData, {
  //       responsive: true
  //     });
  //   };
  //
  //   $('#myTab a').click(function (e) {
  //     e.preventDefault();
  //     $(this).tab('show');
  //   });
  //
  //   $('#loading-example-btn').click(function () {
  //     var btn = $(this);
  //     btn.button('loading');
  //     // $.ajax(...).always(function () {
  //     //   btn.button('reset');
  //     // });
  // });
  </script>
</body>
</html>
