<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$NO=$_GET["NO"];
$SQLDelete="DELETE FROM problem WHERE NO=$NO";
$result=mysqli_query($link,$SQLDelete);
header("Location: mproblem.php");

mysqli_close($link);

?>