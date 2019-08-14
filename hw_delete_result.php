<?php
$con=mysqli_connect("localhost", "root", "1234", "madang") or die("MySQL connection failed");
$custid= $_POST["input_custid"];
$sql="DELETE FROM customer  WHERE custid='".$custid."'";
$ret = mysqli_query($con, $sql);
echo "<h1> 회원 삭제 결과</h1>";
if($ret) {
echo $custid. "회원이 성공적으로 삭제됨.";
}
else {
echo "데이터 삭제 실패!!!"."<br>";
echo "실패 원인:".mysqli_error($con);
}

mysqli_close($con);
echo "<br> <a href='hw_main.html'>초기화면</a> ";
?>