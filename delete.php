<?php
$con=mysqli_connect("localhost", "root", "1234", "sqlDB") or die("MySQL 접속실패!!");
$sql="SELECT * FROM userTBL WHERE userID='".$_GET['userID']."'";
$ret = mysqli_query($con, $sql);
if($ret) {
$count = mysqli_num_rows($ret);
if ($count==0) {
echo $_GET['userID']." 아이디의회원이없음!!!"."<br>";
echo "<br> <a href='main.html'> <--초기화면</a> ";
exit();
}
}
else {
echo "데이터조회실패!!!"."<br>";
echo "실패원인:".mysqli_error($con);
echo "<br> <a href='main.html'> <--초기화면</a> ";
exit();
}
$row = mysqli_fetch_array($ret);
$userID= $row['userID'];
$name = $row["name"];
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<h1> 회원삭제</h1>
<FORM METHOD="post" ACTION="delete_result.php">
아이디: <INPUT TYPE ="text" NAME="userID" VALUE=<?php echo $userID?> READONLY> <br>
이름: <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?> READONLY> <br>
<BR><BR>
위회원을삭제하겠습니까?
<INPUT TYPE="submit" VALUE="회원삭제">
</FORM>
</BODY>
</HTML>
