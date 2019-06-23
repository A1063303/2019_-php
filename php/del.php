<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$NO=$_GET["NO"];
$SQLDelete="DELETE FROM comment1 WHERE NO=$NO";
if($result=mysqli_query($link,$SQLDelete)){
header("Location: comment1.php");}

$NO1=$_GET["NO1"];
$SQLDelete="DELETE FROM comment WHERE NO1=$NO1";
if($result=mysqli_query($link,$SQLDelete)){
	$SQLDelete2="DELETE FROM comment1 WHERE NO1=$NO1";
	$result2=mysqli_query($link,$SQLDelete2);	
header("Location: comment.php");}

mysqli_close($link);

?>