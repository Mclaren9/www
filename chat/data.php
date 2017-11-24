<?php
/**
 * Created by PhpStorm.
 * User: chenguodong
 * Date: 2017/8/26
 * Time: 下午9:02
 */

@$link = mysql_connect("localhost", "root", "");
mysql_select_db("shop", $link);
mysql_query("set names utf8");
$maxID = $_GET['maxID'];
$sql = "select * from message where id>'$maxID'";
$res = mysql_query($sql);
$info = array();
while($rec = mysql_fetch_assoc($res)){
    $info[] = $rec;
}
echo json_encode($info);