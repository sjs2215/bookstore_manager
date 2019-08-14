<?php
$con = mysqli_connect("localhost", "root", "1234", "madang")
or die("MySQL connection error");
$sql= "SELECT * FROM orders";
$ret = mysqli_query($con, $sql);
if ($ret) {
$count = mysqli_num_rows($ret);
} else {
echo "data select failed"."<br>";
echo "error: ".mysqli_error($con);
}
echo "<h1> 주문 조회 결과</h1>";
echo "<table border=1>";
echo "<tr>";
echo "<th>주문 번호</th><th>고객 번호</th><th>도서 번호</th><th>판매 금액</th><th>주문일자</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($ret)) {
echo "<tr>";
echo "<td>", $row['orderid'], "</td>";
echo "<td>", $row['custid'], "</td>";
echo "<td>", $row['bookid'], "</td>";
echo "<td>", $row['saleprice'], "</td>";
echo "<td>", $row['orderdate'], "</td>";
echo "</tr>";
}
mysqli_close($con);
echo "</table>";
echo "<br> <a href='hw_main.html'>초기화면</a>";
?>