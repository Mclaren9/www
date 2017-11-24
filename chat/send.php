<?php
/**
 * Created by PhpStorm.
 * User: chenguodong
 * Date: 2017/8/26
 * Time: 下午10:19
 */

@$link = mysql_connect("localhost", "root", "");
mysql_select_db("shop", $link);
mysql_query("set names utf8");

//var_dump($_POST);

$msg = $_POST['msg'];
$send = 'admin';
$receiver = $_POST['receiver'];
$color = $_POST['color'];
$biaoqing = $_POST['biaoqing'];


$sql = "INSERT INTO `shop`.`message` VALUES(NULL,'$msg', '$send', '$receiver', '$color', '$biaoqing', 'now()')";

$res = mysql_query($sql);
if($res){
    echo "发送信息成功";
}else{
    echo "发送信息失败";
}