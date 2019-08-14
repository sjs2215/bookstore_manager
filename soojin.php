<?php

$con=mysqli_connect("localhost","root","1234","databasetest")
    or die("mysql connection error");

$sql="
CREATE TABLE soojin (
    name char(15) NOT NULL PRIMARY KEY,
    age INT, 
    number INT
    )";

    $ret =mysqli_query($con,$sql);

    if($ret){
        echo "table creation success"."<br>";
    }
    else{
        echo "table creation fail";
        echo "error" .mysqli_error($con);
    }
   mysqli_close($con); 
?>