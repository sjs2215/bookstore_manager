<?php
$con=mysqli_connect("localhost", "root", "1234", "sqlDB") or die("MySQL connection failed");
$userID= $_POST["userID"];
$name = $_POST["name"];
$birthYear= $_POST["birthYear"];
$addr= $_POST["addr"];
$mobile1 = $_POST["mobile1"];
$mobile2 = $_POST["mobile2"];
$height = $_POST["height"];
$mDate= $_POST["mDate"];
$sql="UPDATE userTblSET name='".$name."', birthYear=".$birthYear;
$sql= $sql.", addr='".$addr."', mobile1='".$mobile1."',mobile2='".$mobile2;
$sql= $sql."', height=".$height.", mDate='".$mDate."' WHERE userID='".$userID."'";
$ret = mysqli_query($con, $sql);
echo "<h1> 회원정보수정결과</h1>";
if($ret) {
echo "데이터가성공적으로수정됨.";
}
else {
echo "데이터수정실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br> <a href='main.html'>초기화면</a> ";
?>