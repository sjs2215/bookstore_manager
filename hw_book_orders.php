<?php
$con=mysqli_connect("localhost", "root", "1234", "madang") or die("MySQL connection failed");
$sql="SELECT * FROM book WHERE bookid='".$_GET['bookid']."'";
$ret = mysqli_query($con, $sql);

$row = mysqli_fetch_array($ret);
$bookid= $row['bookid'];
$bookname = $row["bookname"];
$pubname= $row["pubname"];
$price= $row["price"];


?>


<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<h1> 주문 정보</h1>
<FORM METHOD="post" ACTION="hw_book_orders_result.php">
도서 번호 : <INPUT TYPE ="text" NAME="bookid" VALUE= <?php echo $bookid?> READONLY> <br>
책 제목: <INPUT TYPE ="text" NAME="bookname"  VALUE=<?php echo $bookname?> READONLY> <br>
출판사: <INPUT TYPE ="text" NAME="pubname"  VALUE=<?php echo $pubname?> READONLY> <br>
가격:  <INPUT TYPE ="text" NAME="price" VALUE=<?php echo $price?> READONLY> <br>

<BR><BR>



판매 금액: <INPUT TYPE ="text" NAME="input_saleprice"> <br>
고객 번호: <INPUT TYPE ="text" NAME="input_custid"> <br>

<BR><BR>
<INPUT TYPE="submit" VALUE="주문완료">
</FORM>

</BODY>
</HTML>



