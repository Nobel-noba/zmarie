<?php session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: ../../index.php');
    exit;
}

$id=$_GET["id"];
$_SESSION['ID']=$id;
$con=mysqli_connect("localhost","yonatanaberacom_nobel","$$$$001122Ku","yonatanaberacom_zmarie");
$sql="DELETE FROM music WHERE id=".$id;
$con->query($sql);
echo "<a href='../../'>click here to go home</a>";

?>