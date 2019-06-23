<?php 
foreach ($_POST["sort"] as $x) {
	if($x!=null){
		$choose=$x;
	}
}

if($choose=="核心通識-科學素養") {
	header("Location:class1.php");
}elseif($choose=="核心通識-倫理素養"){
	header("Location:class2.php");
}elseif($choose=="核心通識-思維方法"){
	header("Location:class3.php");
}elseif($choose=="核心通識-美學素養"){
	header("Location:class4.php");
}elseif($choose=="核心通識-公民素養"){
	header("Location:class5.php");
}elseif($choose=="核心通識-文化素養"){
	header("Location:class6.php");
}elseif($choose=="通識人文科學類"){
	header("Location:class7.php");
}elseif($choose=="通識自然科學類"){
	header("Location:class8.php");
}elseif($choose=="通識社會科學類"){
	header("Location:class9.php");
}

?>
