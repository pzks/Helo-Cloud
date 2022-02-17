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
      <a class="navbar-brand" href="../index.php">HeloCloud</a>
    </div>
    <!-- 导航项目 -->
    <div class="collapse navbar-collapse navbar-collapse-example">
      <!-- 一般导航项目 -->
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">首页</a></li>
        <li><a href="../xieyi.php">用户协议</a></li>
        <li><a href="../upload">个人中心</a></li>
        <!-- 导航中的下拉菜单 -->
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">我的账号<b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
          <?php
$user = $_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$icon=@file_get_contents("../data/".$user."/icon.txt");

$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo '<center><img width="130px" height="130px" class="img-thumbnail" src="../image/1.png"></center>';
}else{
  echo '<center><img width="130px" height="130px" class="img-thumbnail" src='.$icon.'></center>';
}
?>
<br>
<div class="card">
<div class="title"><span class="label label-primary">昵称</span>
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$nc=@file_get_contents("../data/".$user."/name.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $nc;
}
?>

</div>
<div class="title"><span class="label label-primary">QQ</span>
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$qq=@file_get_contents("../data/".$user."/qq.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $qq;
}
?></div>

<div class="title"><span class="label label-primary">金币</span>
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$glod=@file_get_contents("../data/".$user."/glod.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $glod;
}
?></div>

<div class="title"><span class="label label-primary">存储空间</span>
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$chunchu =@file_get_contents("../data/".$user."/now_user_number.txt");
$user_if = $_COOKIE['key'];
if($user_if == "")
{
  echo "未登录";
}else{
  echo $chunchu."MB/10240MB(10GB)";
}
?></div>

</div>
            <?php $user_if = $_COOKIE['key'];if($user_if == ""){echo '<li><a href="../login.php">登录</a></li>';}else{}?>
            <?php $user_if = $_COOKIE['key'];if($user_if == ""){echo '<li><a href="../reg.php">注册</a></li>';}else{}?>
            <li><a href="../exit.php">退出</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- END .navbar-collapse -->
  </div>
</nav>