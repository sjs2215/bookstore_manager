<?php
$con = mysqli_connect("localhost", "root", "1234", "madang")
or die("MySQL connection error");
$sql= "ALTER TABLE book CHANGE publisher pubname VARCHAR(40)";
$ret = mysqli_query($con, $sql);
if ($ret) {
echo "changed!";
} else {
echo "failed"."<br>";
echo "error: ".mysqli_error($con);
}
mysqli_close($con);
?>