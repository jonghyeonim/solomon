<?php
$conn = mysqli_connect("localhost", "root", dltmdwns12);
mysqli_select_db($conn, "opentutorials");
$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
echo $sql;
$result = mysqli_query($conn, $sql);
// 아래의 코드가 redirection
header('Location: http://localhost/php/index.php');
?>