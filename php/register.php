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
      <h1><a href="login.php">通識評價系統</a></h1>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="staff" class="container">
	<?php  
	$name=$_GET["name"];
	$id=$_GET["id"];
	$pwd=$_GET["pwd"];
	$email=$_GET["email"];

	$count=0;
	if($name==NULL){
		echo "<h3>使用者名稱不可空白！</h3>";
		$count++;
	}
	if($id==NULL){
		echo "<h3>帳號不可空白！</h3>";
		$count++;
	}
	if($pwd==NULL){
		echo "<h3>密碼不可空白！</h3>";
		$count++;
	}
	if($email==NULL){
		echo "<h3>Email不可空白！</h3>";
		$count++;
	}

	if($count>0){
		echo "<h2><font color='red'><br/>請重新填寫註冊資料！<br/>(將在5秒後返回上一頁)</font></h2>";
		header("refresh:5;url=registerinput.php");
	}else{

	$link=mysqli_connect('localhost','root','r43725','project');

	$SQLCreate="INSERT into student(username,id,password,email) VALUES ('$name','$id','$pwd','$email')";
	if($result=@mysqli_query($link,$SQLCreate)){
	$sql="select * from student where id='$id'";
	echo "<h2>使用者資訊</h2></br>";
	echo "<h3><table border='1'>";
	echo "<td>"."使用者名稱"."</td><td>"."帳號"."</td><td>"."密碼"."</td><td>"."Email"."</td>";
	if($result=mysqli_query($link,$sql)){
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row["username"]."</td><td>".$row["id"]."</td><td>".$row["password"]."</td><td>".$row["email"]."</td>";
			echo "</tr>";
		}
	}
	echo "</table></h3>";
	echo "<br/>";
	echo "<h2><a href='login.php'>返回登入頁面</a></h2>";
	}else{
		echo "<h3>該帳號已被使用過了！<br/></h3>";
		echo "<h2><font color='red'>請重新填寫註冊資料！<br/>(將在5秒後返回上一頁)</font></h2>";
		header("refresh:5;url=registerinput.php");
	}

	mysqli_close($link);
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
