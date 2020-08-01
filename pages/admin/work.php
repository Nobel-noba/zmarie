<?php
$name =$_POST['username'];
$password=$_POST['password'];
 if ($name=='nobel' && $password='1')
 {
     header ("Location: ../../admin.php");
 }else{
     header("Location: login.php");
 }

?>