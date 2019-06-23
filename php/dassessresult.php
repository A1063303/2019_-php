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
	<span style="font-family:Microsoft JhengHei;">

	<?php
		session_start();

		foreach ($_POST["sort"] as $x) {
			if($x!=null){
				$sort=$x;
			}
		}
		$professor=$_POST["professor"];
		$class=$_POST["class"];
		$time=$_POST["time"];
		$standard=$_POST["standard"];
		$experience=$_POST["experience"];
$count=0;
if($professor==NULL){
	echo "<h3>授課教師不可空白！<br/></h3>";
	$count++;
}
if($class==NULL){
	echo "<h3>課程名稱不可空白！<br/></h3>";
	$count++;
}
if($time==NULL){
	echo "<h3>上課時間不可空白！<br/></h3>";
	$count++;
}
if(strlen(trim($standard))==0){
	echo "<h3>評分標準不可空白！<br/></h3>";
	$count++;
}
if(strlen(trim($experience))==0){
	echo "<h3>評論內容不可空白！<br/></h3>";
	$count++;
}
echo "<br/>";
if($count>0){
	echo "<h2><font color='red'>請重新填寫評價！！<br/>(將在5秒後返回上一頁)</font></h2>";
	header("refresh:5;url=dassess.php");
}else{
		$link=mysqli_connect('localhost','root','r43725','project');

		$SQLCreate="INSERT into assess(sort,professor,class,time,standard,experience) VALUES ('$sort','$professor','$class','$time','$standard','$experience')";
		$result=mysqli_query($link,$SQLCreate);

		header("Location:lassess.php");

		@mysqli_close($link);
}
		?>


	</span>

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
