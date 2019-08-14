<?php
$con=mysqli_connect("localhost", "root", "1234", "madang") or die("MySQL connection failed");
$custid= $_POST["input_custid"];
$name = $_POST["input_name"];
$address= $_POST["input_address"];
$phone= $_POST["input_phone"];
$sql="UPDATE customer SET name='".$name."', address='".$address."', phone='".$phone."' WHERE custid='".$custid."'";
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
echo "<br> <a href='hw_main.html'>초기화면</a> ";
?>