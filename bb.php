<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "Password@123";
$dbname = "imooc_test";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO imooc_test (username, password)
VALUES ('ximo',md5('hao'))";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>