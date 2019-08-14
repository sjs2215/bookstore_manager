<?php
$con = mysqli_connect("localhost", "root", "1234", "madang")
or die("MySQL connection error");
$sql= "SELECT * FROM book";
$ret = mysqli_query($con, $sql);
if ($ret) {
$count = mysqli_num_rows($ret);
} else {
echo "data select failed"."<br>";
echo "error: ".mysqli_error($con);
}
echo "<h1> 도서 조회 결과 </h1>";
echo "<table border=1>";
echo "<tr>";
echo "<th>도서 번호</th><th>책 제목</th><th>출판사</th><th>가격</th>";
echo "<th>주문</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($ret)) {
echo "<tr>";
echo "<td>", $row['bookid'], "</td>";
echo "<td>", $row['bookname'], "</td>";
echo "<td>", $row['pubname'], "</td>";
echo "<td>", $row['price'], "</td>";
echo "<td>", "<a href='hw_book_orders.php?bookid=", $row['bookid'], "'>주문</a></td>";
echo "</tr>";
}
mysqli_close($con);
echo "</table>";
echo "<br> <a href='hw_main.html'>초기화면</a>";
?>