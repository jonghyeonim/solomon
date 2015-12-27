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
			<h1><a href="index.php">JavaScript</a></h1> <!-- 제목을 나타내는 태그 h1 ~ h6 -->
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
					<form action="process.php" method="post"> <!-- form 태그는 서버로 데이터를 전송할 때 사용 함 -->
						<div class="form-group">
							<label for="form-title">제목</label>
							<input type="text" class="form-control" name="title" id="form-title" placeholder="제목을 적어주세요.">
							<label for="form-author">작성자</label>
							<input type="text" class="form-control" name="author" id="form-author" placeholder="작성자를 적어주세요.">
							<label for="form-description">본문</label>
							<textarea type="text" rows="10" class="form-control" name="description" id="form-description" placeholder="본문을 적어주세요."></textarea>
						</div>
						<input id="inputSubmit" type="submit" name="name" class="btn btn-info btn-lg">
					</form>
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



<!--
<article>
		<form action="process.php" method="post">
			<p>
				제목 : <input type="text" name="title">
			</p>
			<p>
				작성자 : <input type="text" name="author">
			</p>
			<p>
				본문 : <textarea name="description"></textarea>
			</p>
			<input type="submit" name="name">
		</form>
	</article>
-->