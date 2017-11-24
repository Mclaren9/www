<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
我是用户 A
<form action="/Email/index.php/Home/Index/register" method="post">
    Email to B:<input type="email" name="B_email"><br/>
    <input type="submit" value="提交">
</form>
</body>
</html>