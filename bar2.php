<!DOCTYPE html>
<html lang="en">
<head>
<title>Alumni</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<div class="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logose.png" class="img-fluid"  width="300" height="140"alt="Responsive image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   ระบบสมาชิกศิษย์เก่ามหาวิทยาลัยราชภัฎนครปฐม
</div>  <style>
   .top {
  background-color: LightSlateGray;
  font-size: 30px;
  color:white;
}
.dropbtn {
  background-color: green;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: green;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<BODY BGCOLOR="pink">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
    <ul class="nav navbar-nav">
      <li class=""><a href="index.php">หน้าเเรก</a></li>
      <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    
      <li class=""><a href="">ความเป็นมา</a></li>
      <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    
    
      <li class=""><a href="find.php">ตรวจสอบศิษย์เก่า</a></li>
      <li><a href="#"></a></li>
    <li><a href="#"></a></li>
   
      <li class=""><a href="contact.php">ติดต่อ</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php  
 //login_success.php  
 session_start();  

 if(isset($_SESSION["s_email"]))  
 {  
      
      echo ' 
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">ยินดีต้อนรับคุณคือ : '.$_SESSION["s_email"].' <span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li><a href="editprofile.php">ข้อมูลส่วนตัว</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </li>
  
';   
   
 }  
 else  
 {  
      header("location:index2.php");  
 }  

 ?> 
    </ul>
  </div>
</nav>
  


</body>
</html>
