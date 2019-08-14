<?php
$con=mysqli_connect("localhost", "root", "1234", "madang") or die("MySQL 접속실패!!");
$sql="SELECT DISTINCT orderid FROM orders ORDER BY orderid desc limit 1";
$ret = mysqli_query($con, $sql);

$bookid= $_POST['bookid'];
$orderdate=date("Y-m-d H:i:s",time());

while ($row = mysqli_fetch_array($ret)) {
    $orderid=$row['orderid'];
    ++$orderid;
}

$saleprice= $_POST["input_saleprice"];
$custid = $_POST["input_custid"];
$sql=" INSERT INTO orders VALUES('".$orderid."','".$custid."','".$bookid."','".$saleprice."','".$orderdate."')";
$ret = mysqli_query($con, $sql);
echo "<h1> 신규 주문 입력 결과</h1>";
if($ret) {
echo "데이터가 성공적으로 입력됨.";
}
else {
echo "데이터 입력 실패!!!"."<br>";
echo "실패 원인:".mysqli_error($con);
}
mysqli_close($con);
echo "<br> <a href='hw_main.html'> <--초기화면</a> ";
?>