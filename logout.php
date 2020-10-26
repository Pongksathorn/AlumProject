 <?php   
 //logout.php  
 session_start();  
 session_destroy();  
 echo("<script>alert('คุณออกจากระบบเเล้ว!')</script>");
    echo("<script>window.location = 'index.php';</script>");
 ?>  