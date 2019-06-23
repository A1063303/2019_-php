<!DOCTYPE html>

<meta charset="UTF-8">
<html xmlns="http://www.w3.org/1999/xhtml">
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

$result=@mysqli_query($link,$sql);
	while($row=@mysqli_fetch_assoc($result)){
		echo "<h3>".$row["id"]."<br/>";
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td width=10 colspan=2 height=10>".$row["comment"]."</td></tr><td width=5%>".$row["time"]."</td><td width=5%>"."<a href='mcomment1.php?NO1=".$row['NO1']."'>查看留言</a>"."</td>";
			echo "<tr>";
			echo "<td width=5%><a href='mcommentupdate.php?NO1=".$row['NO1']."'>編輯討論區<a/></td><td width=5%>"."<a href='mdel.php?NO1=".$row['NO1']."'>刪除討論區</a>"."</td>";

		echo "</tr>";
		echo "</table></h3>";
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
