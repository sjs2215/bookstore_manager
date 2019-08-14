<?php
$con=mysqli_connect("localhost", "root", "1234", "sqlDB") or die("MySQL 접속실패!!");
$userID= $_POST["userID"];
$name = $_POST["name"];
$birthYear= $_POST["birthYear"];
$addr= $_POST["addr"];
$mobile1 = $_POST["mobile1"];
$mobile2 = $_POST["mobile2"];
$height = $_POST["height"];
$mDate= date("Y-m-j");
$sql=" INSERT INTO userTbl VALUES('".$userID."','".$name."',".$birthYear;
$sql= $sql.",'".$addr."','".$mobile1."','".$mobile2."',".$height.",'".$mDate."')";
$ret = mysqli_query($con, $sql);
echo "<h1> 신규회원입력결과</h1>";
if($ret) {
echo "데이터가성공적으로입력됨.";
}
else {
echo "데이터입력실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br> <a href='main.html'> <--초기화면</a> ";
?>