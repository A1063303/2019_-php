<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$NO=$_GET["NO"];
$SQLDelete="DELETE FROM assess WHERE NO=$NO";
$result=mysqli_query($link,$SQLDelete);

$NO1=$_GET["NO1"];
$SQLDelete2="DELETE FROM informa WHERE NO1=$NO1 ";
$result2=mysqli_query($link,$SQLDelete2);

header("Location: mlassess.php");

mysqli_close($link);

?>