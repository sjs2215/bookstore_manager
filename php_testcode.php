<?php 
//mysql server�� ������
$conn1=mysqli_connect('localhost', 'root', '154045');

//fbin�� �����
mysqli_select_db($conn1, 'fbin');

//select title from topic;�� ������
$sql = "SELECT title FROM topic";
$result = mysqli_query($conn1, $sql);

//���۵� ����� li �±׷� ���� ����� 
mysqli_fetch_array($result);
var_dump($row);

mysqli_fetch_array($result);
var_dump($row);

mysqli_fetch_array($result);
var_dump($row);

?>


<ul>
<li> mysql </li>
<li> oracle </li>
</ul>