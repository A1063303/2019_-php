<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$NO=$_GET["NO"];
$SQLDelete="DELETE FROM student WHERE NO=$NO";
$result=mysqli_query($link,$SQLDelete);
header("Location: muser.php");


mysqli_close($link);

?>