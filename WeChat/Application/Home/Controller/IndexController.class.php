<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //获取参数并且排序
        $signature = $_GET['signature'];
        $timestamp = $_GET['timestamp'];
        $nonce     = $_GET['nonce'];
        $token     = 'cgd';
        $arr = array($signature, $nonce, $timestamp);
        sort($arr);
        //加密排序之后的数组
        $temstr = implode("", $arr);
        $temstr = sha1($temstr);
        //判断加密之后跟获得的$signature是否相等
        if($temstr == $signature){
            echo $_GET['echostr'];
            exit;
        }

    }
}