<!DOCTYPE html>

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

	$link=mysqli_connect('localhost','root','r43725','project');

	$NO=$_GET["NO"];
	$SQLUpdate="SELECT * FROM student WHERE NO=$NO";

	if($result=mysqli_query($link,$SQLUpdate)){
		while($row=mysqli_fetch_assoc($result)){
			echo "<form action=mupdateresult.php method='post'>";
			echo "<input type=hidden value=".$row["NO"]." name='NO' style='height:25px;font-family:Microsoft JhengHei;'>";
			echo "<h3>使用者名稱:<input type=text value=".$row["username"]." name='name'style='height:25px;font-family:Microsoft JhengHei;'></br></h3>";
			echo "<input type=hidden value=".$row["id"]." name='id'style='height:25px;font-family:Microsoft JhengHei;'>";
			echo "<h3>密碼:<input type=password value=".$row["password"]." name='pwd'style='height:25px;font-family:Microsoft JhengHei;'></br></h3></br>";

			echo "<h2><input type='submit' value='確定' style='height:25px;font-family:Microsoft JhengHei;'> <a href=muser.php>取消</a></h2>";
			echo "</form>";
		}
	}

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
