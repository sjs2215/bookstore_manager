<?php
$con=mysqli_connect("localhost", "root", "1234", "sqlDB") or die("MySQL connection failed");
$userID= $_POST["userID"];
$sql="DELETE FROM userTbl WHERE userID='".$userID."'";
$ret = mysqli_query($con, $sql);
echo "<h1> 회원삭제결과</h1>";
if($ret) {
echo $userID." 회원이성공적으로삭제됨..";
}
else {
echo "데이터삭제실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br><br> <a href='main.html'>초기화면</a> ";
?>