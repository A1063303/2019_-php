<!DOCTYPE html >

<meta charset="UTF-8">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="all_1.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
	<span style="font-family:Microsoft JhengHei;">

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="success.php">通識評價系統</a></h1>
		</div>
		<div id="menu">
			<ul>
			<li class="active"><a href="user.php" accesskey="1" title="使用者資訊">使用者資訊</a></li>
				<li><a href="choose.php" accesskey="2" title="課程內容">課程內容</a></li>
				<li><a href="lassess.php" accesskey="3" title="查詢評價">查詢評價</a></li>
				<li><a href="dassess.php" accesskey="4" title="進行評價">進行評價</a></li>
				<li><a href="comment.php" accesskey="5" title="討論區">討論區</a></li>
				<li><a href="problem.php" accesskey="6" title="問題回報">問題回報</a></li>
				<li><a href="logout.php" accesskey="6" title="登出">登出</a></li>

			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="staff" class="container">

	<?php  
	session_start();
	if($_SESSION["login"]=="success"){
	$NO=$_SESSION["NO"];
	$id=$_SESSION["id"];
	$link=mysqli_connect('localhost','root','r43725','project');
	$sql="select * from student where NO=$NO";
	$result=@mysqli_query($link,$sql);
	while($row=mysqli_fetch_assoc($result)){
		if (isset($_SESSION["login"])) {
			
			echo "<br/><h2>歡迎".$row["username"]."進入通識評價系統!"."</h2><br/>";
			echo "<h3><a href='user.php?NO=".$row['NO']."'>查看使用者資訊<a/></h3><br/>";
			echo "<h3><a href='choose.php'>查看課程內容<a/></h3><br/>";
			echo "<h3><a href='lassess.php'>查詢課程評價<a/></h3><br/>";
			echo "<h3><a href='dassess.php'>進行課程評價<a/></h3><br/>";
			echo "<h3><a href='comment.php?id=".$row['id']."'>討論區<a/></h1><br/>";
			echo "<h3><a href='problem.php?id=".$row['id']."'>問題回報<a/></h3>"."<br/>";
			echo "<h3><a href='logout.php'>登出<a/></h3>";
		}
	}
	mysqli_close($link);
	}else{
		echo "<br/>";
		echo "非法登入失敗<br/>";
		echo "將在5秒後返回登入頁面";
		header("refresh:5;url=login.php");

	}
?>
	</div>
</div>
	<div id="page" class="container">

			</ul>
		</div>

				</li>
			</ul>
		</div>

			</ul>
		</div>
	</div>
</div>
<div id="welcome-wrapper">
	<div id="welcome" class="container">
		<div class="title">
			<h2>注意事項</h2>
		</div>
		<p>請勿留言不雅詞彙與不合乎事實之評論</strong>，否則將予以刪除並停用該帳號。
</span>
</body>
</html>
