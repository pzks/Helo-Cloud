<!DOCTYPE html>
<html lang="CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>何乐云盘</title>
<!-- zui -->
<link href="css/zui.min.css" rel="stylesheet">
<script src="js/sweetalert.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- ZUI Javascript组件 -->
 <script src="js/zui.min.js"></script>
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
            <h1>注册您的账号</h1>

            <form method="post">
                <div class="inputBox">
                    <input type="text" name="user" required="" maxlength="8">
                    <label>账号</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="name" required="">
                    <label>昵称</label>
                </div>
                <div class="inputBox">
                    <input type="email" name="qq" required="">
                    <label>QQ邮箱</label>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" required="">
                    <label>密码</label>
                </div>
                <center><input type="submit" name="submit" class="btn btn-primary" value="注册"/>&nbsp;&nbsp;<a class="btn btn-primary" href="./login.php">登录</a></center>
            </form>
</div>

</div>
</body>
</html>

<?php
header("content-type:text/html;charset=utf-8");
//获取内容
$user=$_POST["user"];
$pass=$_POST["pass"];
$pass_first=$_POST["pass"];
$name=$_POST["name"];
$qq=$_POST["qq"];
if($_POST["submit"]) {
	if(file_exists("./data/".$user)) {
		echo '<script language="JavaScript">
swal({
  title: "账号已存在",
  text: "账号已存在,请更换或登录！",
  icon: "error",
  button: "确定",
});
</script>';
	} else if($user=="") {
		echo '<script language="JavaScript">
swal({
  title: "请输入账号",
  text: "只有您输入账号后才可以完成注册",
  icon: "error",
  button: "确定",
});
</script>';
	} else if($pass=="") {
		echo '<script language="JavaScript">
swal({
  title: "请输入密码",
  text: "只有您输入密码后才可以完成注册",
  icon: "error",
  button: "确定",
});
</script>';
	} else if($name=="") {
		echo '<script language="JavaScript">
swal({
  title: "请输入昵称",
  text: "只有您输入昵称后才可以完成注册",
  icon: "error",
  button: "确定",
});
</script>';
	} else if($qq=="") {
		echo '<script language="JavaScript">
swal({
  title: "请输入QQ",
  text: "只有您输入QQ号后才可以完成注册",
  icon: "error",
  button: "确定",
});
</script>';
	} else 
  {
    
  }
if(file_exists("./data/".$user)) {
		echo '<script language="JavaScript">
swal({
  title: "账号已存在",
  text: "账号已存在，请更换后重新注册",
  icon: "error",
  button: "确定",
});
</script>';
	} else {
		$userr="./data/".$user;
		include './config/p_config.php';
		mkdir($userr,0777,true);
		mkdir($pass_path,0777,true);
		//创建用户目录
		$mainkey = $pass_path."/mainkey.txt";

    //=======================
    $pass_jiami = md5($pass_first); //实现密码md5加密
		file_put_contents($mainkey,$pass_jiami); //写入密码到密码目录
    //=======================

		$qqh=$userr."/qq.txt";
		file_put_contents($qqh,$qq);
		$name_file=$userr."/name.txt";
		file_put_contents($name_file,$name);
		$icon="http://q.qlogo.cn/headimg_dl?bs=qq&dst_uin=".$qq."&src_uin=www.qqjike.com&fid=blog&spec=640";
		$tx_file=$userr."/icon.txt";
		file_put_contents($tx_file,$icon);
		$glod=$userr."/glod.txt";
		file_put_contents($glod,$reg_glod);
		$sf=$userr."/sf.txt";
		file_put_contents($sf,$sf_user);

//==============================
//复制许可证到用户目录，这个是有道理的！
    $user_upload = "./upload/".$user;
    mkdir($user_upload,0777,true);
    copy("./config/license.txt","./upload/".$user."/license.txt");
//==============================

echo '<script language="JavaScript">
swal({
  title: "注册成功",
  text: "您的账号已经创建成功！",
  icon: "success",
  button: "确定",
})
.then((willDelete) => {
    location.href="./login.php";
  }
);
</script>';

	}
}

$user_if = $_COOKIE['key'];
if($user_if == "")
{

}else{
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