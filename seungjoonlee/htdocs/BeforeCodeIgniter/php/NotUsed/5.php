<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	//echo htmlspecialchars('<a href="http://opentutorials.org/course/1">codingeverybody</a>');
	echo htmlspecialchars('<script>alert(1);</script>');
	// 사용자가 데이터를 입력할 때 script 혹은 php로 입력을 해버리면 코드가 되버리는데 htmlspecialchar로 방어를 함.
?>
</body>
</html>