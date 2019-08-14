<?php
$con = mysqli_connect("localhost", "root", "1234", "sqlDB")
or die("MySQL connection error");
$sql= "
CREATE TABLE userTbl(
userID CHAR(8) NOT NULL PRIMARY KEY,
name VARCHAR(10) NOT NULL,
birthYear INT NOT NULL,
addr CHAR(2) NOT NULL,
mobile1 CHAR(3),
mobile2 CHAR(8),
height SMALLINT,
mDate DATE
)";
$ret = mysqli_query($con, $sql);
if ($ret) {
echo "table creation success";
} else {
echo "table creation failed"."<br>";
echo "error: ".mysqli_error($con);
}