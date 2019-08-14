<?php
$db_host="localhost";
$db_user="root";
$db_password="1234";
$db_name="";
$con=mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (mysqli_connect_error($con)) {
echo "MySQL connection error", "<br>";
echo "error msg: ", mysqli_connect_error();
exit();
}
echo "MySQL connection success!";
mysqli_close($con);
?>