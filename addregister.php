<meta charset="utf-8" />
<?php
include('conn.php');
// print array ออกมาดู
// echo '<pre>';
// 	print_r($_POST);
// echo '</pre>';
//exit;

$sql = "INSERT INTO register (s_title,s_gender,s_fname,s_lname,s_nickname,s_phone,s_bday,s_facebook,s_email,s_password,s_repassword,address1,address2,address3,address4,address5,s_generation,s_address,s_position)VALUES ('".$_POST["s_title"]."','".$_POST["s_gender"]."','".$_POST["s_fname"]."','".$_POST["s_lname"]."','".$_POST["s_nickname"]."','".$_POST["s_phone"]."'
,'".$_POST["s_bday"]."','".$_POST["s_facebook"]."','".$_POST["s_email"]."','".$_POST["s_password"]."','".$_POST["s_repassword"]."','".$_POST["address1"]."','".$_POST["address2"]."','".$_POST["address3"]."','".$_POST["address4"]."','".$_POST["address5"]."','".$_POST["s_generation"]."','".$_POST["s_address"]."','".$_POST["s_position"]."')";









if ($conn->query($sql) === TRUE) {
    echo("<script>alert('ลงทะเบียนเสร็จเเล้ว!')</script>");
    echo("<script>window.location = 'formlogin.php';</script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>