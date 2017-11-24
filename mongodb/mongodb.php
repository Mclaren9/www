<?php
/**
 * Created by PhpStorm.
 * User: 80611
 * Date: 2017-09-21
 * Time: 17:54
 */
phpinfo();
$mongodb = new Mongo("mongodb://@127.0.0.1/php34");
var_dump($mongodb);
$result = $mongodb->php34->goods->find();
var_dump($result);
