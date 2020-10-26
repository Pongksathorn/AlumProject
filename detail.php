<html> <head>
<title> Display Selected Customer Information</title>
</head> 
<body>
<?php
//1. เชื่อมต่อ database: 

$s_id=$_GET['s_id'];

$con= mysqli_connect("localhost","root","12345678","Alum1") or die("Error: " . mysqli_error($con));
 
mysqli_query($con, "SET NAMES 'utf8' ");
 
//2. query ข้อมูลจากตาราง: 
$query = "SELECT * FROM register WHERE s_id = $s_id" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

while($row = mysqli_fetch_array($result)) { 
?>


<?php include 'bar2.php';?>

<center><div class="container">
<center><div class="event_location" ><h1>ข้อมูล</h1></center></div>
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
<table width="500" border="0">

<tr>
    <th width="125"></th>
    <td width="240" ><?php echo ""."<img src='fileupload/".$row[fileupload]."' width='100'>"."";
    
  
  }
//5. close connection
mysqli_close($con);
?></td>
    </tr>

  
  <tr>
    <th width="130"><div class="event_location" >เพศ</th></div>
    <td  ><div class="event_location" ><?php echo $result["s_gender"];?></td></div>
    </tr>
  <tr>
    <th width="130"><div class="event_location" >คำขึ้นต้น</th></div>
    <td ><div class="event_location" ><?php echo $result["s_title"];?></td></div>
    </tr>
  <tr>
    <th width="130"><div class="event_location" >ขื่อ</th></div>
    <td  ><div class="event_location" ><?php echo $result["s_fname"];?></td></div>
    </tr>
  <tr>
    <th width="130"><div class="event_location" >นามสกุล</th></div>
    <td><div class="event_location" ><?php echo $result["s_lname"];?></td></div>
    </tr>
  <tr>
    <th width="130"><div class="event_location" >ชื่อเล่น</th></div>
    <td><div class="event_location" ><?php echo $result["s_nickname"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >วันเกิด</th></div>
    <td><div class="event_location" ><?php echo $result["s_bday"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >เบอร์โทรศัพท์</th></div>
    <td><div class="event_location" ><?php echo $result["s_phone"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >Facebook</th></div>
    <td><div class="event_location" ><?php echo $result["s_facebook"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >Email</th></div>
    <td><div class="event_location" ><?php echo $result["s_email"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >บ้านเลขที่</th></div>
    <td><div class="event_location" ><?php echo $result["address1"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >ตำบล</th></div>
    <td><div class="event_location" ><?php echo $result["address2"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >อำเภอ</th></div>
    <td><div class="event_location" ><?php echo $result["address3"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >จังหวัด</th></div>
    <td><div class="event_location" ><?php echo $result["address4"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >รหัสไปรษณีย์</th></div>
    <td><div class="event_location" ><?php echo $result["address5"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >รุ่นที่จบ</th></div>
    <td><div class="event_location" ><?php echo $result["s_generation"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >ที่อยู่ทำงาน</th></div>
    <td><div class="event_location" ><?php echo $result["s_address"];?></td></div>
    </tr>
    <tr>
    <th width="130"><div class="event_location" >ตำเเหน่งงาน</th></div>
    <td><div class="event_location" ><?php echo $result["s_position"];?></td></div>
    </tr>
    

</div>
  </table><center> <div class="event_location" >    <br> <button onclick="window.location.href = 'find.php';">กลับไป</button></div>
  <br><br><br>
<?php
$conn = null;
?>
<br>
</body>

</html>
</div>
<?php include 'footer.php';?>

