<?php include 'bar2.php';?>

<div class="container">
<div class="event_location" ><center><h3> ตรวจสอบศิษย์เก่า </h3></center> </div>

  </div>

<br>	<?php


$serverName = "localhost";
$userName = "root";
$userPassword = "12345678";
$dbName = "Alum1";

$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);


	$sql = "SELECT * FROM register";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	?>
  <div class="container">

  <table class="table">
  <thead class="thead-dark">
		<tr>
			

			<th width="90">
				<div class="event_location" align="center">ชื่อ</div>
			</th>

			<th width="90">
			<div class="event_location" align="center">นามสกุล</div>
			</th>

			<th width="50">
			<div class="event_location"  align="center">รุ่นที่จบ</div>
			</th>
      <th width="50">
	  <div class="event_location"  align="center">รายละเอียด</div>
			</th>
			<th width="50">
	  <div class="event_location"  align="center">รายละเอียด</div>
			</th>
		</tr>
		<?php
		while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
			?>
			<tr>
			
				<td><div class="event_location"  align="center"><?php echo $result["s_fname"]; ?></td>

				<td><div class="event_location"  align="center"><?php echo $result["s_lname"]; ?></div></td>

				<td><div class="event_location" align="center"><?php echo $result["s_generation"]; ?></td>
        <td>
        <div class="event_location"  align="center"><button type="button"><a href="detail.php?s_id=<?php echo $result["s_id"]; ?>">รายละเอียด</div></td></button>
		<td>
        <div class="event_location"  align="center"><button type="button"><a href="editprofile.php?s_id=<?php echo $result["s_id"]; ?>">เเก้ไข</div></td></button>
			   </tr>
			
		<?php
		}
		?>
	</table>
	<?
	$conn = null;
	?>

</body>

</html>
  </div>
</form>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php';?>
