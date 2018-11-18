<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>สัญญาเงินกู้</title>


<!-- เรียกใช้วันที่ภาษาไทย -->
<?php
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}

	//$strDate = "2008-08-14 13:42:44";
	//echo "ThaiCreate.Com Time now : ".DateThai($strDate);
?>



 <link rel="stylesheet" href="css/stylepopup.css">


<script type="text/javascript">
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;

document.body.innerHTML = printContents;
window.print();

document.body.innerHTML = originalContents;
}
</script>


</head>

<body>
  <!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Order confirmation </title>
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Ekkamai Standard:400,700);
  body { margin: 0; padding: 0; background: #e1e1e1; }
  div, p, a, li, td { -webkit-text-size-adjust: none; }
  .ReadMsgBody { width: 100%; background-color: #ffffff; }
  .ExternalClass { width: 100%; background-color: #ffffff; }
  body { width: 100%; height: 100%; background-color: #e1e1e1; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
  html { width: 100%; }
  p { padding: 0 !important; margin-top: 0 !important; margin-right: 0 !important; margin-bottom: 0 !important; margin-left: 0 !important; }
  .visibleMobile { display: none; }
  .hiddenMobile { display: block; }

  @media only screen and (max-width: 600px) {
  body { width: auto !important; }
  table[class=fullTable] { width: 96% !important; clear: both; }
  table[class=fullPadding] { width: 85% !important; clear: both; }
  table[class=col] { width: 45% !important; }
  .erase { display: none; }
  }

  @media only screen and (max-width: 420px) {
  table[class=fullTable] { width: 100% !important; clear: both; }
  table[class=fullPadding] { width: 85% !important; clear: both; }
  table[class=col] { width: 100% !important; clear: both; }
  table[class=col] td { text-align: left !important; }
  .erase { display: none; font-size: 0; max-height: 0; line-height: 0; padding: 0; }
  .visibleMobile { display: block !important; }
  .hiddenMobile { display: none !important; }
  }
</style>
<br>
<nav class="navbar navbar" align="center">
<div id="box1">
<button  onclick="printDiv('divprint')"><img src="img/pdf.png" width="50" height="50"/></button>
</div>
  </nav>
  <div id="divprint">
<!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td>
      <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
        <tr class="hiddenMobile">
          <td height="40"></td>
        </tr>
        <tr class="visibleMobile">
          <td height="30"></td>
        </tr>

        <tr>
          <td>
            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
              <tbody>
                <tr>
                  <td>
                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                      <tbody>

                        <tr class="hiddenMobile">
                          <td height="40"></td>
                        </tr>
                        <tr class="visibleMobile">
                          <td height="20"></td>
                        </tr>
                        <tr>
                          <td style="font-size: 12px; color: #5b5b5b; font-family: 'Ekkamai Standard', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">

                            <br>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table width="220" border="0" cellpadding="0" cellspacing="0" align="right" class="col">
                      <tbody>
                        <tr class="visibleMobile">
                          <td height="20"></td>
                        </tr>
                        <tr>
                          <td height="5"></td>
                        </tr>
                        <tr>
                          <td style="font-size: 18px; color: #046012; letter-spacing: -1px; font-family: 'Ekkamai Standard', sans-serif; line-height: 1; vertical-align: top; text-align:center;">
                            สัญญาเงินกู้
                        </td>
                        </tr>
                        <tr>
                        <tr class="hiddenMobile">
                          <td height="50"></td>
                        </tr>
                        <tr class="visibleMobile">
                          <td height="20"></td>
                        </tr>
                        <tr>
                         <td style="font-size: 12px; color: #5b5b5b; font-family: 'Ekkamai Standard', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                            ธนาคารหมู่บ้านชุมชนโป่งหม้อข้าว
                            <br> บ้านโป่งหม้อข้าว หมู่ที่ 4
                            ต.ท่านางงาม
                            <br>อ.บางระกำ จ.พิษณุโลก 65000

                          </td>
                        </tr>
                        <tr>
                         <td style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; line-height: 18px; vertical-align: top; text-align:right;">
                            <input type="text" name="dateShow" value="<?php $strDate = date('Y-m-d'); echo DateThai($strDate);?>" size="14" class="form-control" style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none"  disabled ><br/>
    <input type="date" name="date" value="<?php echo date('Y-m-d');?>" hidden="true" />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>



<!-- /Header -->
<!-- Order Details -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" >
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
          <tbody>
            <tr>
            <tr class="hiddenMobile">
              <td height="50"></td>
            </tr>
            <tr class="visibleMobile">
              <td height="30"></td>
         </tr>

         <tr>
         <td>
          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
			<tr valign="baseline">
     			 <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ข้าพเจ้า&nbsp;&nbsp;<input type="text"  name="member_name" id="member_name" value="<? echo $name;?>" size="35" style="border: none; border-bottom: 1px black dotted;text-align:center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			</tr>
		</table>

          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
			<tr valign="baseline">
      			<th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ที่อยู่&nbsp;<input type="text" name="address" id ="address" value="<? echo $address;?>" size="60" style="border: none; border-bottom: 1px black dotted;text-align:center"/></th>
			</tr>
		</table>
          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
            <tr valign="baseline">
              <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">บัตรประจำตัวประชาชนเลขที่&nbsp;&nbsp;<input type="text"  name="member_name" id="member_name" value="<? echo $name;?>" size="35" style="border: none; border-bottom: 1px black dotted;text-align:center" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      </tr>
    </table>
          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
            <tr valign="baseline">
              <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ซึ่งต่อไปนี้เรียกว่า"ผู้กู้"ขอทำหนังสือฉบับนี้ไว้ให้แก่ธนาคารหมู่บ้าน ชุมชนโป่งหม้อข้าว หมู่ที่4 ซึ่งต่อไปนี้
    </tr>
  </table>
          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
            <tr valign="baseline">
              <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">เรียกว่า"ผู้ให้กู้"เพื่อเป็นหลักฐานว่า
    </tr>
  </table>
          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
            <tr valign="baseline">
              <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ข้อ&nbsp;1.&nbsp;ผู้กู้ได้กู้เงินจากผู้ให้กู้ เป็นจำนวนเงิน&nbsp;&nbsp;<input type="text" name="House_No" id="House_No" value="<?>"
    </tr>
</table>
          <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
            <tr valign="baseline">
              <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">และผู้กู้ได้รับเงินจำนวนดังกล่าวไปถูกต้องครบถ้วนแล้วในวันที่ทำสัญญานี้&nbsp;&nbsp;
    </tr>
</table>
            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
              <tr valign="baseline">
                <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ข้อ&nbsp;2.&nbsp;ผู้กู้ยินยอมเสียดอกเบี้ยเงินกู้ตามที่ผู้ให้กู้ประกาศกำหนดร้อยละ &nbsp;12% &nbsp;ต่อปี&nbsp;&nbsp;
</tr>
</table>
            <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
              <tr valign="baseline">
                <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ข้อ&nbsp;3.&nbsp;ผู้กู้ยินยอมชำระเงินกู้และดอกเบี้ยเงินกู้จำนวน12เดือน จำนวนอย่างน้อยงวดละ <input type="text" name="House_No" id="House_No" value="<? echo $houseNo;?>" size="6" style="border: none; border-bottom: 1px black dotted;text-align:center"/></th>
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">&nbsp;และมีการกำหนดระยะเวลาการชำระหนี้เงินกู้และดอกเบี้ยให้แก่ผู้ให้กู้ภายในกำหนดระยะเวลา12เดือน
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">&nbsp;โดยผู้กู้จะเริ่มชำระเงินกู้และดอกเบี้ยเงินกู้ตั้งแต่ วันที่&nbsp;&nbsp;<input type="text" name="House_No" id="House_No" value="<? echo $houseNo;?>" size="6" style="border: none; border-bottom: 1px black dotted;text-align:center"/></th>
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">&nbsp;และขอชำระหนี้เงินกู้ดังกล่าวให้หมดสิ้นภายในวันที่่ &nbsp;&nbsp;<input type="text" name="House_No" id="House_No" value="<? echo $houseNo;?>" size="6" style="border: none; border-bottom: 1px black dotted;text-align:center"/></th>
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ข้อ&nbsp;4.&nbsp;ถ้าผู้กู้ผิดนัดไม่ชำระเงินกู้และดอกเบี้ยตามงวดชำระภายในกำหนด7วันนับแต่วันครบกำหนด ผู้กู้
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ยินยอมให้คิดดอกเบี้ยผิดนัดเพิ่มอีกวันละ&nbsp;&nbsp;<input type="text" name="House_No" id="House_No" value="<? echo $houseNo;?>" size="6" style="border: none; border-bottom: 1px black dotted;text-align:center"/></th>
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ข้อ&nbsp;5.&nbsp;กรณีที่ผู้กู้ไม่ปฏิบัติตามสัญญาหรือปฏิบัติผิดสัญญาข้อหนึ่งข้อใดให้เห็นว่าผู้กู้ผิดนัดทั้งหมดให้ผู้
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">ให้กู้มีสิทธิเรียกร้องให้ผู้คืนเงินกู้ทันที  และยินยอมชดใช้ค่าเสียหายที่ให้กู้พึงได้รับอันเนื่องมาจากการผิด
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">สัญญาเต็มจำนวนทุกประการ
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left">เห็นควรอนุมัติ&nbsp;&nbsp;<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/> &nbsp;&nbsp;ลงชื่อ&nbsp;<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>ผู้กู้
</tr>
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>)
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left"><br>ลงชื่อ&nbsp;<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ&nbsp;<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>คู่สมรส
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(นางมณี สุขสวัสดิ์)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>)
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left"><br>&nbsp;&nbsp;ผู้จัดการธนาคารหมู่บ้าน ชุมชนโป่งหม้อข้าว&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ&nbsp;<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>พยาน
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>)
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ&nbsp;<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>พยาน
</table>
<table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
  <tr valign="baseline">
    <th style="font-size: 12px; font-family: 'Ekkamai Standard', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;" align="left"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<input type="text" name="namerece" id ="namerece"value="" size="20" style="border: none; border-bottom: 1px black dotted;text-align:center"/>)
</table>



</body>
</html>
