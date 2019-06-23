<?php  

$link=mysqli_connect('localhost','root','r43725','project');

$name=$_POST["name"];
$id=$_POST["id"];
$pwd=$_POST["pwd"];
$NO=$_POST["NO"];
$SQLUpdate="UPDATE student SET username='$name',id='$id',password='$pwd' WHERE NO=$NO";
$result=mysqli_query($link,$SQLUpdate);

header("Location: muser.php");

mysqli_close($link);

?>