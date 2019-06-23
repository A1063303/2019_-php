<!DOCTYPE html>

<meta charset="UTF-8">

<head>
<span style="font-family:Microsoft JhengHei;">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="all_1.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <h1><a href="login.php">通識評價系統</a></h1>
    </div>
  </div>
</div>
<div id="wrapper">
  <div id="staff" class="container">

    <h2>歡迎註冊通識評價系統！</h2><br>
    <h3>請填寫以下資料<h3><br>
<form action="register.php" method="GET">
   <input type=hidden value=".$row['No']." name='No' style="font-family:Microsoft JhengHei;">
  <h3>帳號：
      <input type="text" name="id" style="height:25px;width:202px;font-size: 14px;font-family:Microsoft JhengHei;" class="txt_input" placeholder="請輸入您的帳號(學號)"></h3>
  <h3>密碼：
      <input type="password" style="height:25px;width:202px;font-size: 14px;font-family:Microsoft JhengHei;" name="pwd" class="txt_input"placeholder="請輸入您的密碼" ></h3>
  <h3>使用者名稱：
      <input type="text" name="name" style="height:25px;width:202px;font-size: 14px;font-family:Microsoft JhengHei;" class="txt_input"placeholder="請輸入使用者名稱"></h3>
  <h3>Email：
      <input type="text" name="email"style="height:25px;width:202px;font-size: 14px;font-family:Microsoft JhengHei;"  class="txt_input"placeholder="請輸入您的Email"></h3>
<br/>
<h3><input type="submit" style="width: 60px;height: 30px;font-size:16px;font-family:Microsoft JhengHei;"value="確定">
<a href=login.php>返回登入頁面</a></h3>
</form>


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
