<?php
$con=mysqli_connect("localhost", "root", "1234", "madang") or die("MySQL connection failed");
$sql="SELECT * FROM customer WHERE custid='".$_GET['custid']."'";
$ret = mysqli_query($con, $sql);
if($ret) {
$count = mysqli_num_rows($ret);
if ($count==0) {
echo $_GET['custid']." 아이디의회원이없음!!!"."<br>";
echo "<br> <a href='hw_main.html'>초기화면</a> ";
exit();
}
}
else {
echo "데이터조회실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
echo "<br> <a href='hw_main.html'>초기화면</a> ";
exit();
}
$row = mysqli_fetch_array($ret);
$custid= $row['custid'];
$name = $row["name"];
$address= $row["address"];
$phone= $row["phone"];
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<h1> 회원 정보 수정</h1>
<FORM METHOD="post" ACTION="hw_update_result.php">
회원번호: <INPUT TYPE ="text" NAME="input_custid" VALUE=<?php echo $custid?> READONLY> <br>
이름: <INPUT TYPE ="text" NAME="input_name" VALUE=<?php echo $name?> > <br>
주소: <INPUT TYPE ="text" NAME="input_address" VALUE=<?php echo $address?> > <br>
휴대폰 번호: <INPUT TYPE ="text" NAME="input_phone" VALUE=<?php echo $phone?> > <br>
<BR><BR>
<INPUT TYPE="submit" VALUE="정보수정">
</FORM>
</BODY>
</HTML>