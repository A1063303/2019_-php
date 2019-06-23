<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$id=$_POST["id"];
$comment=$_POST["comment"];
$NO=$_POST["NO"];
$NO1=$_POST["NO1"];
$time=@date("Y/m/d ").@(date("G")+8).@date(":i");
if(@(date("G")+8>=24)){
	$time=@date("Y/m/").@(date("d")+1)." ".@(date("G")+8-24).@date(":i");
}
$SQLUpdate="UPDATE comment1 SET id='$id',comment='$comment',time='$time' WHERE NO=$NO";
$SQLUpdate1="UPDATE comment SET id='$id',comment='$comment',time='$time' WHERE NO1=$NO1";
if($result=mysqli_query($link,$SQLUpdate)){
	header("Location: mcomment1.php");
}elseif($result=mysqli_query($link,$SQLUpdate1)){
	header("Location: mcomment.php");
}

mysqli_close($link);
?>