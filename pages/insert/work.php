<?php
$name =$_POST['name'];
$sname=$_POST['sname'];
$style=$_POST['style'];
$scale=$_POST['scale'];
$transpose=$_POST['transpose'];
$idea=$_POST['idea'];

$con=mysqli_connect("localhost","yonatanaberacom_nobel","$$$$001122Ku","yonatanaberacom_zmarie");
$sql="INSERT INTO `music` (`NAME`, `SNAME`, `STYLE`, `SCALE`, `TRANSPOSE`, `IDEA`) VALUES ('$name', '$sname', '$style', '$scale', $transpose,'$idea')";
if ($con->query($sql) === TRUE) {
    echo "New record created successfully" .$name;
    echo "<a href='../../'>home</a>";
}
else
{
    echo "not inserted";
}
$con->close();
header('Location:insert.php');
?>