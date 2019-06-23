<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$NO=$_GET["NO"];
$NO1=$_GET["NO1"];
$NO2=$_GET["NO2"];
$SQLDelete="DELETE FROM informc WHERE NO2=$NO2";
$result=mysqli_query($link,$SQLDelete);

$SQLDelete="DELETE FROM comment1 WHERE NO=$NO";
if($result=mysqli_query($link,$SQLDelete)){
header("Location: mcomment.php");
}

$SQLDelete="DELETE FROM comment WHERE NO1=$NO1";
if($result=mysqli_query($link,$SQLDelete)){
	$SQLDelete2="DELETE FROM comment1 WHERE NO1=$NO1";
	$result2=mysqli_query($link,$SQLDelete2);

header("Location: mcomment.php");}

mysqli_close($link);

?>