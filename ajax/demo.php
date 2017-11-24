<?php
/**
 * Created by PhpStorm.
 * User: chenguodong
 * Date: 2017/8/25
 * Time: 下午2:43
 */

$fp = fopen('./demo.txt', 'a+');
fwrite($fp, 'lenovo');
fclose($fp);

?>