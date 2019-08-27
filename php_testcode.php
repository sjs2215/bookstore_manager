<?php 
//mysql server에 접속해
$conn1=mysqli_connect('127.0.0.1:3307', 'root', '154045');

//fbin을 사용해
mysqli_select_db($conn1, 'fbin');

//select title from topic;을 전송해
$sql = "SELECT title FROM topic";
$result = mysqli_query($conn1, $sql);

//전송된 결과를 li 태그로 만들어서 출력해 


while($row = mysqli_fetch_array($result)){
    echo "<li>{$row['title']}</li>";
}

?>


<ul>
<li> mysql </li>
<li> oracle </li>
</ul>