<<<<<<< HEAD
<div class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">HeloCloud</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">首页 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./xieyi.php">用户协议</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./upload/">个人中心</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        我的账号
        </a>
        <div class="dropdown-menu"aria-labelledby="navbarDropdown">
        <?php
=======
<div class="container-fluid">

<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
    <!-- 导航头部 -->
    <div class="navbar-header">
      <!-- 移动设备上的导航切换按钮 -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-example">
        <span class="sr-only">切换导航</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- 品牌名称或logo -->
      <a class="navbar-brand" href="">HeloCloud</a>
    </div>
    <!-- 导航项目 -->
    <div class="collapse navbar-collapse navbar-collapse-example">
      <!-- 一般导航项目 -->
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">首页</a></li>
        <li><a href="./xieyi.php">用户协议</a></li>
        <li><a href="./upload">个人中心</a></li>
        <!-- 导航中的下拉菜单 -->
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">我的账号<b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
          <?php
>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
$user = $_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$icon=@file_get_contents("./data/".$user."/icon.txt");

$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo '<center><img width="130px" height="130px" class="img-thumbnail" src="image/1.png"></center>';
}else{
  echo '<center><img width="130px" height="130px" class="img-thumbnail" src='.$icon.'></center>';
}
?>
<br>
<div class="card">
<<<<<<< HEAD
<div class="title"><span class="badge badge-light">昵称</span>
=======
<div class="title"><span class="label label-primary">昵称</span>
>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$nc=@file_get_contents("./data/".$user."/name.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $nc;
}
?>

</div>
<<<<<<< HEAD
<div class="title"><span class="badge badge-light">QQ</span>
=======
<div class="title"><span class="label label-primary">QQ</span>
>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$qq=@file_get_contents("./data/".$user."/qq.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $qq;
}
?></div>

<<<<<<< HEAD
<div class="title"><span class="badge badge-light">金币</span>
=======
<div class="title"><span class="label label-primary">金币</span>
>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$glod=@file_get_contents("./data/".$user."/glod.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $glod;
}
?></div>

<<<<<<< HEAD
<div class="title"><span class="badge badge-light">存储空间</span>
=======
<div class="title"><span class="label label-primary">存储空间</span>
>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$chunchu =@file_get_contents("./data/".$user."/now_user_number.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $chunchu."MB/10240MB(10GB)";
}
<<<<<<< HEAD
?>
          <div class="dropdown-divider"></div>
          <?php $user_if = $_COOKIE['key'];if($user_if == ""){echo '<a class="dropdown-item" href="login.php">登录</a>';}else{}?>
          <?php $user_if = $_COOKIE['key'];if($user_if == ""){echo '<a class="dropdown-item" href="reg.php">注册</a>';}else{}?>
        <a class="dropdown-item" href="exit.php">退出</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
=======
?></div>

</div>
            <?php $user_if = $_COOKIE['key'];if($user_if == ""){echo '<li><a href="login.php">登录</a></li>';}else{}?>
            <?php $user_if = $_COOKIE['key'];if($user_if == ""){echo '<li><a href="reg.php">注册</a></li>';}else{}?>
            <li><a href="exit.php">退出</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- END .navbar-collapse -->
  </div>
</nav>

>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
</div>