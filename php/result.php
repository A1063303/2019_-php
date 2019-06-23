<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="all.css" rel="stylesheet" type="text/css" media="all" />
	<title>Result</title>
</head>
<body>
<div class="wrap">

<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$name=$_GET["name"];

$sql="select * from student where name=$name";

echo "<table border='1'>";
echo "<td>"."使用者名稱"."</td><td>"."帳號"."</td><td>"."密碼"."</td><td>"."修改"."</td>";
if($result=mysqli_query($link,$sql)){
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["username"]."</td><td>".$row["id"]."</td><td>".$row["password"]."</td><td>"."<a href='update.php?NO=".$row['NO']."'>修改</a>"."</td>";
		echo "</tr>";
		
	}
}
echo "</table>";
echo "<div class=''><a href='user.php?NO=".$NO."'>返回</a></div>";
mysqli_close($link);

?>

</div>
</body>
</html>
