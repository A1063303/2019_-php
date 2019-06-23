<!DOCTYPE html>

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
				<li><a href="logout.php" accesskey="6" title="登出">登出</a></li>
				
			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="staff" class="container">

<?php
session_start();
$_SESSION["05"]=$_SESSION["05"]+1;

echo "<h2><a href='commentcreate.php?NO=".$row['NO']."'>新增討論區<a/></h2><br/>";
$time=@date("Y/m/d ").@(date("G")+8).@date(":i");
if(@(date("G")+8>=24)){
	$time=@date("Y/m/").@(date("d")+1)." ".@(date("G")+8-24).@date(":i");
}
$comment=$_POST["comment"];
if($_GET["id"]){
	$_SESSION["id"]=$_GET["id"];
}
$id=$_SESSION["id"];
$space=0;

$link=mysqli_connect('localhost','root','r43725','project');
$sql="select * from comment";

if(strlen(trim($_POST["comment"]))>0){
$SQLCreate="INSERT into comment(id,comment,time) VALUES ('$id','$comment','$time')";
$result=@mysqli_query($link,$SQLCreate);
}
$result=@mysqli_query($link,$sql);
	while($row=@mysqli_fetch_assoc($result)){
		echo "<h3>".$row["id"]."";
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td width=10 colspan=2 height=10>".$row["comment"]."</td><td width=1% rowspan=3>"."<a href='informc.php?NO1=".$row['NO1']."'>檢舉</a>"."</td></tr><td width=5%>".$row["time"]."</td><td width=5%>"."<a href='comment1.php?NO1=".$row['NO1']."'>回覆</a>"."</td>";
		if($id==$row["id"]){

			echo "<tr>";
			echo "<td width=5%><a href='commentupdate.php?NO1=".$row['NO1']."'>編輯討論區<a/></td><td width=5%>"."<a href='del.php?NO1=".$row['NO1']."'>刪除討論區</a>"."</td>";

		}
		echo "</tr>";
		echo "</table></h3><br/>";
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
