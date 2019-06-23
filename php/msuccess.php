<!DOCTYPE html >

<meta charset="UTF-8">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="all_1.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body><span style="font-family:Microsoft JhengHei;">

<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="msuccess.php">通識評價系統</a></h1>
		</div>
		<div id="menu2">
			<br/><br/>
			<ul>
			<li class="active"><a href="muser.php" accesskey="1" title="使用者資訊">所有使用者資訊</a></li>
				<li><a href="minforma.php" accesskey="2" title="課程內容">查看被檢舉的評價</a></li>
				<li><a href="mlassess.php" accesskey="3" title="查詢評價">通識課程評價</a></li>
				<li><a href="minformc.php" accesskey="4" title="進行評價">查看被檢舉的留言</a></li>
				<li><a href="mcomment.php" accesskey="5" title="討論區">討論區</a></li>
				<li><a href="mproblem.php" accesskey="6" title="問題回報">查看問題</a></li>
				<li><a href="look.php" accesskey="8" title="登出">查看瀏覽次數</a></li>
				<li><a href="logout.php" accesskey="7" title="登出">登出</a></li>
				
			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="staff" class="container">

	<?php  
session_start();
if($_SESSION["login"]){
$NO=$_SESSION["NO"];
$id=$_SESSION["id"];
$link=mysqli_connect('localhost','root','r43725','project');
$sql="select * from manager where id='$id'";
$result=mysqli_query($link,$sql);
	while($row=mysqli_fetch_assoc($result)){
		echo "<h2>歡迎管理者".$row["id"]."</h2><br/>";

		echo "<h3><a href='muser.php'>所有使用者資訊<a/></h3><br/>";
			echo "<h3><a href='minforma.php'>查看被檢舉的評價<a/></h3><br/>";
			echo "<h3><a href='mlassess.php'>通識課程評價<a/></h3><br/>";
			echo "<h3><a href='minformc.php'>查看被檢舉的留言<a/></h3><br/>";
			echo "<h3><a href='mcomment.php'>討論區<a/></h3><br/>";
			echo "<h3><a href='mproblem.php'>查看問題<a/></h3><br/>";
			echo "<h3><a href='look.php'>查看瀏覽次數</a></h3><br/>";
			echo "<h3><a href='logout.php'>登出<a/></h3>";
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
