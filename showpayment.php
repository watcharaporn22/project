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
      <?php
                      ini_set('display_errors', 1);
                      error_reporting(~0);
                      $set = "SET NAMES UTF8";
                      session_start();
                      require('dbconnect.php');
                      // $sql = "SELECT * FROM people WHERE CardH = $CardH" ;
                      $str = "SELECT * FROM payment";
                      $query = mysqli_query($conn,$str) or die ("error");
                      ?>

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
                    <div class="margin-bottom-30">
            <div class="row">
              <div class="col-md-100">
                <div class="table-responsive">
                  <h4 class="margin-bottom-15">ข้อมูลชำระเงินกู้ </h4>
                  <br>
                  <style>
                  .button {

                      border: none;
                      color: white;
                      padding: 10px 20px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 16px;
                      margin: 4px 2px;
                      cursor: pointer;
                  }
                  .button2 {background-color: #008CBA;} /* Blue */
                  </style>
                  </head>

                  <body>

                  <center><a href="payment.php"class="button button2"style="width:200px;height:50px">เพิ่มข้อมูลชำระเงินกู้</a></center>
                  </body>
<br>

                  <table class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>

                        <th>รหัสสมาชิก</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เลขที่ชำระ</th>
                        <th>เลขที่สัญญา</th>
                        <th>วัน/เดือน/ปีชำระ</th>
                        <th>ดูเพิ่มเติม</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>

                        <?php
                        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                        {
                        ?>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                    <td><div align="center"><?php echo $result["paymentID"];?></div></td>
                    <td><div align="center"><?php echo $result["first_name"];?></div></td>
                    <td><div align="center"><?php echo $result["last_name"];?></div></td>
                    <td><div align="center"><?php echo $result["payment_no"];?></div></div></td>
                    <td><div align="center"><?php echo $result["id_promise"];?></div></td>
                    <td><div align="center"><?php echo $result["date"];?></div></div></td>
                    <td>
                <a href="uppayment.php?id_payment=<?php echo $result["id_payment"];?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-pencil"></span>
                    </a></td>
                    <td>
                <a href="editpayment.php?id_payment=<?php echo $result["id_payment"];?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-pencil"></span>
                    </a></td>
				      <td> <a href="JavaScript:if(confirm('ลบรายชื่อสมาชิกหรือไม่?')==true){window.location='deletepayment.php?id_payment=<?php echo $result['id_payment'];?>';}" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-trash"></span>
                    </a></td>
                </tr>
                          <!-- Split button -->
                          <?php
                                      }
                                      ?>
                                      </table>

                                      <?php
                                      mysqli_close($conn);
                                      ?>
                    </tbody>
                  </table>
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
