<!DOCTYPE html >

<meta charset="UTF-8">

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
				<li><a href="logout.php" accesskey="7" title="登出">登出</a></li>
		
			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="staff" class="container">

<?php
session_start();
$_SESSION["03"]=$_SESSION["03"]+1;

$link=mysqli_connect('localhost','root','r43725','project');
$sql="select * from assess";

echo "<center><h2>課程評價</h2></center></br>";

echo "<table border='1'  width=97%>";
echo "<tr>";
echo "<td width=5%>"."<h3>課程類型</h3>"."</td><td width=5%>"."<h3>授課教師</h3>"."</td><td width=5%>"."<h3>課程名稱</h3>"."</td><td width=5%>"."<h3>上課時間</h3>"."</td><td width=10%>"."<h3>評分標準</h3>"."</td><td width=67%>"."<h3>評論內容</h3>"."</td><td width=5%>"."<h3>檢舉</h3>"."</td>";
echo "<tr/>";
echo "</table>";
echo "<h4><table border='1'  width=97%>";
$result=@mysqli_query($link,$sql);
	while($row=@mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td width=5%>".$row["sort"]."</td><td width=5%>".$row["professor"]."</td><td width=5%>".$row["class"]."</td><td width=5%>".$row["time"]."</td><td width=10%>".$row["standard"]."</td><td width=67%>".$row["experience"]."</td>";
		echo "<td width=5%>"."<a href='informa.php?NO=".$row['NO']."'>檢舉</a>"."</td>";
		echo "<tr/>";
	}
echo "</table></h4>";

@mysqli_close($link);

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
