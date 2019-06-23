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
	$link=mysqli_connect('localhost','root','r43725','project');
	$sql="select * from student";
	echo "<h2>使用者資訊</h2></br>";
	echo "<table border='1'>";
	echo "<td>"."<h3>使用者名稱</h3>"."</td><td>"."<h3>帳號</h3>"."</td><td>"."<h3>密碼</h3>"."</td><td>"."<h3>修改</h3>"."</td><td>"."<h3>刪除</h3>"."</td>";
	if($result=mysqli_query($link,$sql)){
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td><h3>".$row["username"]."</h3></td><td><h3>".$row["id"]."</h3></td><td><h3>".$row["password"]."</h3></td><td><h3>"."<a href='mupdate.php?NO=".$row['NO']."'>修改</a>"."</h3></td><td><h3>"."<a href='muserdel.php?NO=".$row['NO']."'>刪除</a>"."</td></h3>";
			echo "</tr>";
		}
	}
	echo "</table>";

	mysqli_close($link);
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
