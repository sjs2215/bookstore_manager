<?php
$con = mysqli_connect("localhost", "root", "1234", "sqlDB")
or die("MySQL connection error");
$sql= "SELECT * FROM userTBL";
$ret = mysqli_query($con, $sql);
if ($ret) {
$count = mysqli_num_rows($ret);
} else {
echo "data select failed"."<br>";
echo "error: ".mysqli_error($con);
}
echo "<h1> 회원조회결과</h1>";
echo "<table border=1>";
echo "<tr>";
echo "<th>아이디</th><th>이름</th><th>출생년도</th><th>지역</th><th>국번</th>";
echo "<th>전화번호</th><th>키</th><th>가입일</th><th>수정</th><th>삭제</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($ret)) {
echo "<tr>";
echo "<td>", $row['userID'], "</td>";
echo "<td>", $row['name'], "</td>";
echo "<td>", $row['birthYear'], "</td>";
echo "<td>", $row['addr'], "</td>";
echo "<td>", $row['mobile1'], "</td>";
echo "<td>", $row['mobile2'], "</td>";
echo "<td>", $row['height'], "</td>";
echo "<td>", $row['mDate'], "</td>";
echo "<td>", "<a href='update.php?userID=", $row['userID'], "'>수정</a></td>";
echo "<td>", "<a href='delete.php?userID=", $row['userID'], "'>삭제</a></td>";
echo "</tr>";
}
mysqli_close($con);
echo "</table>";
echo "<br> <a href='main.html'>초기화면</a>";
?>