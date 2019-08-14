<?php
$con =mysqli_connect("localhost","root","1234","")
or die("mysql connection error");

$sql="CREATE DATABASE databasetest";
$ret=mysqli_query($con,$sql);

if($ret){
echo "mysql database connected";}
else{
    echo "mysql fail"."<br>";
    echo "mysql" .mysqli_error($con);
}
mysqli_close($con);
?>