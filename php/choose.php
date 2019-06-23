<!DOCTYPE html>

<meta charset="UTF-8">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>選擇課程</title>

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
	<form action="classcheck.php" method="post">
	<h2>課程內容<br/></h2>	
<br/>
	<h3>選擇課程　
	<select name="sort[]" style="height:25px;width:150px;font-family:Microsoft JhengHei;">
		<option value="核心通識-科學素養">核心通識-科學素養</option>
		<option value="核心通識-倫理素養">核心通識-倫理素養</option>
		<option value="核心通識-思維方法">核心通識-思維方法</option>
		<option value="核心通識-美學素養">核心通識-美學素養</option>
		<option value="核心通識-公民素養">核心通識-公民素養</option>
		<option value="核心通識-文化素養">核心通識-文化素養</option>
		<option value="通識人文科學類">通識人文科學類</option>
		<option value="通識自然科學類">通識自然科學類</option>
		<option value="通識社會科學類">通識社會科學類</option>
	</select>   <input type="submit" value="確定" style="height:25px;width:50px;font-family:Microsoft JhengHei;"></h3>
<br/><br/>

	</form>
<?php 
session_start();
$_SESSION["02"]=$_SESSION["02"]+1;

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
