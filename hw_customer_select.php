<?php
$con = mysqli_connect("localhost", "root", "1234", "madang")
or die("MySQL connection error");
$sql= "SELECT * FROM customer";
$ret = mysqli_query($con, $sql);
if ($ret) {
$count = mysqli_num_rows($ret);
} else {
echo "data select failed"."<br>";
echo "error: ".mysqli_error($con);
}
echo "<h1> 회원 조회 결과 </h1>";
echo "<table border=1 >";
echo "<tr>";
echo "<th>회원 번호</th><th>이름</th><th>주소</th><th>전화번호</th>";
echo "<th>수정</th><th>삭제</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($ret)) {
echo "<tr>";
echo "<td>", $row['custid'], "</td>";
echo "<td>", $row['name'], "</td>";
echo "<td>", $row['address'], "</td>";
echo "<td>", $row['phone'], "</td>";
echo "<td>", "<a href='hw_update.php?custid=", $row['custid'], "'>수정</a></td>";
echo "<td>", "<a href='hw_delete.php?custid=", $row['custid'], "'>삭제</a></td>";
echo "</tr>";
}
mysqli_close($con);
echo "</table>";
echo "<br> <a href='hw_main.html'>초기화면</a>";
?>