
<!DOCTYPE html>

<meta charset="UTF-8">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
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


$time=@date("Y/m/d ").@(date("G")+8).@date(":i");
if(@(date("G")+8>=24)){
	$time=@date("Y/m/").@(date("d")+1)." ".@(date("G")+8-24).@date(":i");
}
$comment=$_POST["comment"];
if($_GET["id"]){
	$_SESSION["id"]=$_GET["id"];
}
$id=$_SESSION["id"];
if($_GET["NO1"]){
	$_SESSION["NO1"]=$_GET["NO1"];
}
$NO1=$_SESSION["NO1"];
$link=mysqli_connect('localhost','root','r43725','project');
$sql="select * from comment1 where NO1=$NO1";
$sql2="select * from comment where NO1=$NO1";
if($result=@mysqli_query($link,$sql2)){
	while($row=@mysqli_fetch_assoc($result)){
		echo "<h2>討論主題<h2>";
		echo "<h3>".$row["id"]."<br/>";
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td width=10 height=10>".$row["comment"]."</td></tr><td width=5%>".$row["time"]."</td>";
		echo "</tr>";
		echo "</table></h3>";
	}
}
echo "<br/><h2>留言</h2>";	
if(strlen(trim($_POST["comment"]))>0){
$SQLCreate="INSERT into comment1(NO1,id,comment,time) VALUES ('$NO1','$id','$comment','$time')";
$result=@mysqli_query($link,$SQLCreate);
}
$result=@mysqli_query($link,$sql);
	while($row=@mysqli_fetch_assoc($result)){
		echo "<h3>".$row["id"]."<br/>";
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td width=10 colspan=2 height=10>".$row["comment"]."</td></tr><td width=5%>".$row["time"]."</td><td width=5%>"."<a href='informc.php?NO=".$row['NO']."'>檢舉</a>"."</td>";
		if($id==$row["id"]){

			echo "<tr>";
			echo "<td width=5%><a href='commentupdate.php?NO=".$row['NO']."'>編輯留言<a/></td><td width=5%>"."<a href='del.php?NO=".$row['NO']."'>刪除留言</a>"."</td>";

		}
		echo "</tr>";
		echo "</table></h3>";
	}

@mysqli_close($link);

?>

	<form action="comment1.php" method="post">
	<br/><h3>輸入留言：</h3><br/>

	<textarea name="comment" rows="10" cols="100" style='font-family:Microsoft JhengHei;'>

	</textarea><br/><br/>
	<h3><input type="submit" value="確定" style="height:25px;font-family:Microsoft JhengHei;">
	<a href=comment.php>返回</a></h3>
	</form>

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
</div> 
</span>
</body>
</html>
