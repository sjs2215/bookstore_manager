<?php 
//mysql server�� ������
$conn1=mysqli_connect('127.0.0.1:3307', 'root', '154045');

//fbin�� �����
mysqli_select_db($conn1, 'fbin');

//select title from topic;�� ������
$sql = "SELECT title FROM topic";
$result = mysqli_query($conn1, $sql);

//���۵� ����� li �±׷� ���� ����� 


while($row = mysqli_fetch_array($result)){
    echo "<li>{$row['title']}</li>";
}

?>


<ul>
<li> mysql </li>
<li> oracle </li>
</ul>