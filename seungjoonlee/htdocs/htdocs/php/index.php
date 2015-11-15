<?php
// mysqli API
$conn = mysqli_connect("localhost","root",dltmdwns12);
mysqli_select_db($conn, "opentutorials");
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
	<meta charset="utf-8" />
	<title>생활코딩</title>
	<!-- 외부의 CSS 파일을 가지고 오는 태그(link) -->
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="body">
	<header> <!-- 헤더를 나타내는 태그 -->
		<img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩">
		<h1><a href="http://localhost/php/index.php">JavaScript</a></h1> <!-- 제목을 나타내는 태그 h1 ~ h6 -->
	</header>

	<nav> <!-- 네비게이션을 나타내는 태그 -->
		<ol>
			<?php
			while($row = mysqli_fetch_assoc($result)) { //associative array, map이랑 비슷한 듯
				echo '<li><a href="http://localhost/php/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
			}
			?>
		</ol>
	</nav>
	<div id="control"> <!-- 태크들을 묶는 역할 밖에 없음(CSS 효과 줄 때 자주 사용하게 될 듯) -->
		<input type="button" value="white" onclick="document.getElementById('body').className='white'" />
		<input type="button" value="black" onclick="document.getElementById('body').className='black'"/>
		<a href="http://localhost/php/write.php">쓰기</a>
	</div>
	<article>
		<?php 
		if(!empty($_GET['id'])) {
			//file_get_contents($_GET['id].".txt");
			$result = mysqli_query($conn, "SELECT title, name, description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id']);
			$row = mysqli_fetch_assoc($result);
			echo '<h2>'.$row['title'].'</h2>';
			echo '<h1>'.$row['name'].'</h1>';
			echo $row['description'];
			} 
		?>
	</article>
</body>
</html>
