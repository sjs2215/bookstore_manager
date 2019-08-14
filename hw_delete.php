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
else{

    $sqll="SELECT custid FROM orders WHERE custid='".$_GET['custid']."'";
    $rett = mysqli_query($con, $sqll);
    $roww= mysqli_fetch_array($rett);
    $custidd=$roww['custid'];
    if($custidd==$_GET['custid']){
        echo  $_GET['custid']."번 회원은 주문내역 존재하므로 삭제 불가";
        echo "<br> <a href='hw_main.html'>초기화면</a> ";
        exit();
    }
    else{
        echo $_GET['custid']."번 회원은 주문내역 존재하지 않으므로 삭제 가능";
    }
   
    
    
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




?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<h1> 회원 정보 수정</h1>
<FORM METHOD="post" ACTION="hw_delete_result.php">
회원번호: <INPUT TYPE ="text" NAME="input_custid" VALUE=<?php echo $custid?> READONLY> <br>
이름: <INPUT TYPE ="text" NAME="input_name" VALUE=<?php echo $name?> READONLY> <br>
<BR><BR>
위 회원을 정말 삭제하시겠습니까?
<INPUT TYPE="submit" VALUE="회원삭제">
</FORM>
</BODY>
</HTML>