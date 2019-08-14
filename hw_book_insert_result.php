<?php
$con=mysqli_connect("localhost", "root", "1234", "madang") or die("MySQL 접속실패!!");
$bookid= $_POST["input_bookid"];
$bookname = $_POST["input_bookname"];
$pubname= $_POST["input_pubname"];
$price= $_POST["input_price"];
$sql=" INSERT INTO book VALUES('".$bookid."','".$bookname."','".$pubname."','".$price."')";
$ret = mysqli_query($con, $sql);
echo "<h1> 신규 도서 입력 결과</h1>";
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