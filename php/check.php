<!DOCTYPE html PUBLIC >

<meta charset="UTF-8">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<span style="font-family:Microsoft JhengHei;">
<meta name="keywords" content="" />
<meta name="description" content="" />
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
    <div id="menu">
      <ul>
      <li><h1><a href="registerinput.php">註冊</a></h1></li>
     
      </ul>
    </div>
  </div>
</div>
<div id="wrapper">
  <div id="staff" class="container">

<?php
session_start();
$id=$_POST["id"];
$pwd=$_POST["pwd"];

$link=mysqli_connect('localhost','root','r43725','project');
$sql="select * from manager";
if($result=mysqli_query($link,$sql)){
  while($row=mysqli_fetch_assoc($result)){
    if($id==$row["id"] && $pwd==$row["pwd"]){
      $_SESSION["login"]="success";
      $_SESSION["id"]=$row["id"];
      header("Location: msuccess.php");
      break;
    }
  }
}

$sql="select * from student";
if($result=mysqli_query($link,$sql)){
  while($row=mysqli_fetch_assoc($result)){
    if($id==$row["id"] && $pwd==$row["password"]){
      $_SESSION["login"]="success";
      $_SESSION["NO"]=$row["NO"];
      $_SESSION["id"]=$row["id"];
      header("Location: success.php");
      break;
    }else{
      $_SESSION["login"]="fail";
    }
  }
}
if($_SESSION["login"]=="fail"){

  echo "<h3>登入失敗<br/>";
  echo "將自動返回登入頁面</h3>";
  header("refresh:3; url=login.php");
}
mysqli_close($link);
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
