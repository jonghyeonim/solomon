<?php
// mysqli API
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
/*
while($row = mysqli_fetch_assoc($result)) { //associative array, map이랑 비슷한 듯
	echo "<h1>".$row['id']."</h1>";
	echo "<br />";
	echo $row['title'];
	echo $row['description'];
	echo "<br />";
}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WEB Study!!</title>
	<!-- 외부의 CSS 파일을 가지고 오는 태그(link) -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="body">
	<div class="container">
	<!-- <div class="container-fluid"> -->
		<header class="jumbotron text-center"> <!-- 헤더를 나타내는 태그 -->
			<img id="logo" class="img-circle" src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩">
			<h2><a href="index.php">생활코딩 웹 강의</a></h2> <!-- 제목을 나타내는 태그 h1 ~ h6 -->
		</header>
		<div class="row">
			<nav class="col-md-3"> <!-- 네비게이션을 나타내는 태그 -->
				<ol class="nav nav-pills nav-stacked">
					<?php
					while($row = mysqli_fetch_assoc($result)) { //associative array, map이랑 비슷한 듯
						echo '<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
					}
					?>
				</ol>
			</nav>
			<div class ="col-md-9">
				<article> 	 
					<?php 
					if(!empty($_GET['id'])) {
						//file_get_contents($_GET['id].".txt");
						$result = mysqli_query($conn, "SELECT title, name, description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id']);
						$row = mysqli_fetch_assoc($result);
						echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
						echo '<h1>'.htmlspecialchars($row['name']).'</h1>';
						echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ui><li><oi>');
						// 특정 태그만 사용할 수 있도록하고 나머진 문자열로 표시함. 스크립트 태그 방어.
						// 이스케이핑 기법. 공격성이 있는 태그를 피한다는 의미 정도?
						} 
					?>
				</article>
				<hr>
				<div id="control"> <!-- 태크들을 묶는 역할 밖에 없음(CSS 효과 줄 때 자주 사용하게 될 듯) -->
					<div class="btn-group">
						<input type="button" value="white" onclick="document.getElementById('body').className='white'" class="btn btn-default btn-lg"/>
						<input type="button" value="black" onclick="document.getElementById('body').className='black'" class="btn btn-default btn-lg"/>
					</div>
					<a href="write.php" class="btn btn-danger btn-lg">쓰기</a> <!-- btn-lg 버튼의 크기 btn btn-danger 버튼 테마-->
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
