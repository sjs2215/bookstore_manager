<?php
$con = mysqli_connect("localhost", "root", "1234", "madang")
or die("MySQL connection error");
$sql= "
INSERT INTO publisher VALUES
('굿스포츠', '이승기', '11111111'),
('나무수', '김범수', '22222222'),
('대한미디어', '김경호', '33333333'),
('이상미디어', '성시경', '44444444'),
('삼성당', '임재범','55555555'),
('Pearson', 'Mike', '66666666')
";
$ret = mysqli_query($con, $sql);
if ($ret) {
echo "data insert success";
} else {
echo "data insert failed"."<br>";
echo "error: ".mysqli_error($con);
}
mysqli_close($con);
?>