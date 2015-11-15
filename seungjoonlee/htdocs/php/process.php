<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);

$sql = "SELECT user.id from user where user.name='".$_POST['author']."'";
$result = mysqli_query($conn, $sql);
//var_dump($result);
//exit;
if($result->num_rows==0) {
	$sql = "INSERT INTO user (name, password) VALUES('".$_POST['author']."', '111111')";
	mysqli_query($conn, $sql);
	$user_id = mysqli_insert_id($conn); // 이 함수가 호출되기 직전의 데이터 아이디를 가져올 수 있는 함수.
} else {
	$row = mysqli_fetch_assoc($result);
	// var_dump($row)  -> row에 데이터가 어떻게 들어가 있는지 확인할 수 있는 내장 함수
	$user_id = $row['id'];
}

$sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$user_id."', now())";
echo $sql;

$result = mysqli_query($conn, $sql);

// 아래의 코드가 redirection
header('Location: index.php');
?>