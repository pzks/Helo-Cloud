<!DOCTYPE html>
<html lang="CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>何乐云盘</title>
<!-- zui -->
<link href="css/zui.min.css" rel="stylesheet">
<link href="css/drag.css" rel="stylesheet" type="text/css"/>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/drag.js" type="text/javascript"></script>
<!-- ZUI Javascript组件 -->
<script src="js/zui.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<link href="css/login.css" rel="stylesheet" type="text/css"/>
<!-- ZUI Javascript组件 -->
</head>
<body>
<?php
//头部样式
include './header.php';
//----------------------
?>
<div class="container-fixed-xs">
        <div class="box">
            <h1>用户登录</h1>

            <form method="post">
                <div class="inputBox">
                    <input type="text" name="user" required="">
                    <label>Username</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" required="">
                    <label>password</label>
                </div>
                <center><input class="btn btn-primary"type="submit" name="submit" value="登录"/>&nbsp;&nbsp;<a class="btn btn-primary" href="./reg.php">注册</a></center>
            </form>
</div>
</div>
</body>
</html>

<?php
//获取内容
$user = $_POST["user"];
$pass = $_POST["pass"];
$pass_get = $_POST["pass"];
if ($_POST["submit"]) {
    if ($user == "") {
        echo '<script language="JavaScript">
swal({
  title: "输入账号",
  text: "只有您输入正确输入账号后才可以发布文章",
  icon: "error",
  button: "确定",
});
</script>';//账号为空 
    } else if ($pass == "") {
        echo '<script language="JavaScript">
swal({
  title: "密码为空",
  text: "只有您输入正确输入密码后才可以发布文章",
  icon: "error",
  button: "确定",
});
</script>';
        //密码为空
        
    } else if (file_exists("./data/" .$user)) {

      include './config/p_config.php';
		$password=file_get_contents($pass_path."/mainkey.txt");
		//取得密码目录
        $pass_jiami = md5($pass_get);
        //加密密码
        if ($password == $pass_jiami) //密码比较
        {
            $time = 1 * 60 * 60 * 24 * 365;
            setcookie("key", $user, time() + $time);
            echo '
<script language="JavaScript">
swal({
  title: "登录成功",
  text: "成功登录您的账号！",
  icon: "success",
  button: "确定",
})
.then((willDelete) => {
    location.href="./upload/";
  }
);
</script>';
        } else {
            echo '<script language="JavaScript">
swal({
  title: "密码错误",
  text: "只有您输入正确密码后才可以登录",
  icon: "error",
  button: "确定",
});
</script>';
        }

    } else {
        echo '<script language="JavaScript">
swal({
  title: "用户不存在",
  text: "用户不存在，请注册后使用",
  icon: "error",
  button: "确定",
});
</script>';
    }
}

$user_if = $_COOKIE['key'];
if ($user_if == "") {
} else {
    echo '
  <script language="JavaScript">
  swal({
    title: "你已经登录",
    text: "你已经登录，无需二次登录！",
    icon: "error",
    button: "确定",
  })
  .then((willDelete) => {
      location.href="./index.php";
    }
  );
  </script>';
}
?>