<!-- 
文件描述 ：登出
copyright (C) 2021 pengzekai
请尊重版权，本文件遵守何乐开源协议
 -->
<html lang="CN">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>退出</title>
<<<<<<< HEAD

<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src="./js/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

=======
<!-- zui -->
<link href="./css/zui.min.css" rel="stylesheet">
<!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- ZUI Javascript组件 -->
<script src="./js/zui.min.js"></script>
<script src="./js/sweetalert.min.js"></script>
>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
</head>
<body>

</body>
</html>
<?php
<<<<<<< HEAD
//----------------------
//版权所有，侵权必究
//copyright (C) 2022 pengzekai
//----------------------
setcookie("key"/*cookie的名称*/,""/*cookie的值*/,""/*cookie的生效时间*/);
setcookie("password"/*cookie的名称*/,""/*cookie的值*/,""/*cookie的生效时间*/);

=======
setcookie("key"/*cookie的名称*/,""/*cookie的值*/,""/*cookie的生效时间*/);
>>>>>>> d8faf19f78df51c5462d00e2941a09ee0ce0e38f
if($user==""){
echo '<script language="JavaScript">
swal({
  title: "已经退出登录",
  text: "已经退出登录！只有您登录后您才能使用网盘",
  icon: "error",
  button: "确定",
})
.then((willDelete) => {
    location.href="./index.php";
  }
);
</script>';
}
exit();
?>