<html> <head>
<title> Display Selected Customer Information</title>
</head> 
<?php


$serverName = "localhost";
$userName = "root";
$userPassword = "12345678";
$dbName = "Alum1";

$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);


	$sql = "SELECT * FROM register";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	?>
<body>
<?php include 'bar2.php';?>

<center><div class="container">
<center><h1>ข้อมูล</h1></center>
<?php
	if(isset($_GET["s_id"]))
	{
		$strCustomerID = $_GET["s_id"];
	}
    $serverName = "localhost";
    $userName = "root";
    $userPassword = "12345678";
    $dbName = "Alum1";
   
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);
 

    $sql = "SELECT * FROM register WHERE s_id = ?  ";
    $params = array($strCustomerID);
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $result = $stmt->fetch( PDO::FETCH_ASSOC );
  ?>
<table width="500" border="50">
<center><form action="updateprofile.php" method="post">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลสมาชิก</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB"> </td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="hidden" name="s_id" value="<?php echo $result["s_id"];?>" disabled='disabled' />
<input type="hidden" name="s_id" value="<?php echo $result["s_id"];?>" />
      
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">เพศ 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="s_gender" type="text" id="s_gender" value="<?php echo $result["s_gender"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">คำนำหน้า 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="s_title" type="text" id="s_title" value="<?php echo $result["s_title"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อ 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="s_fname" type="text" id="s_fname" value="<?php echo $result["s_fname"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">สกุล
        <label> :</label></td>
      <td bgcolor="#EBEBEB"><input name="s_lname" type="text" id="s_lname" value="<?php echo $result["s_lname"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required" "/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อเล่น 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="s_nickname" type="text" id="s_fname" value="<?php echo $result["s_nickname"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">วันเดือนปีเกิด 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="s_dbay" type="date" id="s_fname" value="<?php echo $result["s_dbay"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
      
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">เบอร์โทรศัพท์ 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="s_phone" type="text" id="s_fname" value="<?php echo $result["s_phone"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">Facebook 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="s_facebook" type="text" id="s_fname" value="<?php echo $result["s_facebook"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">บ้านเลขที่ 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="address1" type="text" id="s_fname" value="<?php echo $result["address1"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ตำบล 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="address2" type="text" id="s_fname" value="<?php echo $result["address2"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">อำเภอ 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="address3" type="text" id="s_fname" value="<?php echo $result["address3"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">จังหวัด 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="address4" type="text" id="s_fname" value="<?php echo $result["address4"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>

      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">รหัสไปรษณีย์ 
        :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="address5" type="text" id="s_fname" value="<?php echo $result["address5"];?>" size="30" placeholder="ภาษาไทยเท่านั้น"  required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='ShowMember.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>

	</table></center>
	<?
	$conn = null;
	?>

</form>
<br><br>
<br>
<br>

<?php include 'footer.php';?>
