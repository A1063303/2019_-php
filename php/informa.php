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

$NO=$_GET["NO"];

$link=mysqli_connect('localhost','root','r43725','project');
$sql="select * from assess where NO=$NO";
echo "<h2>請確認所您要檢舉的留言</h2>";
echo "<br/>";
$result=@mysqli_query($link,$sql);
	while($row=@mysqli_fetch_assoc($result)){
		echo "<h3><table border='1'  width=97%>";
		echo "<tr>";
		echo "<td width=5%>".$row["sort"]."</td><td width=5%>".$row["professor"]."</td><td width=5%>".$row["class"]."</td><td width=5%>".$row["time"]."</td><td width=10%>".$row["standard"]."</td><td width=67%>".$row["experience"]."</td>";
		echo "</table></h3>";

		echo "<form action=resulta.php method='post'>";
		echo "<input type=hidden value=".$NO." name='NO'>";
		echo "<input type=hidden value=".$row["experience"]." name='assess'>";

		echo "<br/><h2>請輸入檢舉的理由：<br/>
				<textarea name='reason' rows=5 cols=80 style='font-family:Microsoft JhengHei;'>
					
				</textarea><br/></h2><br/>";
		echo "<h2><input type='submit' value='確定'  style='height:30px;font-size:16px;font-family:Microsoft JhengHei;'>";
		echo "   ";
		echo "<a href=lassess.php>返回</a></h2>";
		echo "</form>";

	}

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
