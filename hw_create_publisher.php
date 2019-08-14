<?php
$con = mysqli_connect("localhost", "root", "1234", "madang")
or die("MySQL connection error");
$sql= "
CREATE TABLE Publisher(
pubname VARCHAR(10) NOT NULL PRIMARY KEY,
stname VARCHAR(10) NOT NULL,
officephone INT NOT NULL
)";
$ret = mysqli_query($con, $sql);
if ($ret) {
echo "table creation success";
} else {
echo "table creation failed"."<br>";
echo "error: ".mysqli_error($con);
}