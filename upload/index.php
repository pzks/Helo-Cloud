<!DOCTYPE html>
<html lang="CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>何乐云盘 - 个人中心</title>
<!-- zui -->
<link href="../css/zui.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- ZUI Javascript组件 -->
<script src="../js/zui.min.js"></script>
<script src="../js/sweetalert.min.js"></script>
<link href="../lib/uploader/zui.uploader.min.css" rel="stylesheet">
<script src="../lib/uploader/zui.uploader.min.js"></script>
</head>
<body>
<?php
//头部样式
include './header.php';
//----------------------
?>
<div class="container">

<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$icon=@file_get_contents("../data/".$user."/icon.txt");
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
echo $nc;
?>

</div>
<div class="title"><span class="label label-primary">QQ</span>
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$qq=@file_get_contents("../data/".$user."/qq.txt");
echo $qq;
?></div>

<div class="title"><span class="label label-primary">金币</span>
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$glod=@file_get_contents("../data/".$user."/glod.txt");
echo $glod;
?></div>

<div class="title"><span class="label label-primary">存储空间</span>
<?php
$user=$_COOKIE['key'];
header("content-type:text/html;charset=utf-8");
$chunchu =@file_get_contents("../data/".$user."/now_user_number.txt");
echo $chunchu."MB/10240MB(10GB)";
?></div>

</div>

<div class="container">
我们只允许上传的文件类型名称:<br>cpp,asm,h,iso,img,reg,bat,docx,pptx,md,c,class<br>,ttf,psd,dat,sh,log,flv,3gp,gif,<br>jpeg,jpg,png,zip,rar,doc,txt,<br>sql,js,7z,exe,mp3,mp4,wav,ppt,pdf,wps<br>,ppt,dll,mdb,xml,xls,ico,rmvb,tar.gz,tar
</div>



<?php
//保证安全性，防止用户看见其他用户的文件
$user=$_COOKIE['key'];
if($user=="") {

	echo '<script language="JavaScript">
  swal({
    title: "您还没有登录！",
    text: "您还没有登录！您需要登录才能使用！",
    icon: "error",
    button: "确定",
  })
  .then((willDelete) => {
      location.href="../login.php";
    }
  );
  </script>';

}else{
echo'<div class="card">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h3><label for="file">文件名：</label></h3>
    <input type="file" name="file" id="file"><br>
    <button class="btn btn-sm" name="submit" type="submit">上传文件</button>
</form>
</div>
<h3>文件列表:<br></h3>';
$user = $_COOKIE['key'];
$dir = './'.$user.'/';
$handler = opendir($dir);
while (($f1 = readdir($handler)) !== false) {
	if ($f1 != "." && $f1 != "..") {
		$files[] = $f1;
	}
}
closedir($handler);
//打印所有文件名
foreach ($files as $filename) {
  echo '
  <div class="card">
  <div class="items">
  <div class="item">
    <div class="item-heading">
    <div class="media pull-left"><img src="" alt=""></div>
      <div class="pull-right label label-success"></div>
      <h4><a href='.$dir.$filename.'>'.$filename.'</a></h4>
    </div>
  </div>
</div>
</div>
';

}
}
?>
</div>

</div>


<?php
include '../footer.php';
//----------------------
?>

</body>
</html>