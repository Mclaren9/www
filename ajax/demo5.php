<?php
/**
 * Created by PhpStorm.
 * User: chenguodong
 * Date: 2017/8/25
 * Time: 下午4:49
 */
$title = "中国";
$title = urlencode($title);
echo "<a href ='./demo51.php?ttl=$title'>跳转</a>";