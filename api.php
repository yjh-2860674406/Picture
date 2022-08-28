<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,80);
//拼接图片地址
$picpath = "https://github.com/yjh-2860674406/Picture/blob/main/%E7%89%9B%E6%B2%B9%E6%9E%9C.jpg";
//重定位到图片
die(header("Location: $picpath"));
?>
