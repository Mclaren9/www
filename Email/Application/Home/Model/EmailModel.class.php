<?php
/**
 * Created by PhpStorm.
 * User: chenguodong
 * Date: 2017/9/25
 * Time: 下午4:39
 */
namespace Home\Model;
use Think\Model;
class EmailModel extends Model{
    protected function _before_insert(&$data, $option){
        $data['isto_B_time'] = time();  // 注册的当前时间
        // 生成验证email用的验证码
        $data['isto_B'] = '1';
    }


    protected function _after_insert($data, $option)
    {
        // heredoc的语法
        $content =<<<HTML
        <p>B同学请注意完成以下任务</p>
        <p><a href="http://localhost/Email/index.php/Home/Renwu/index">点击完成验证</a></p>
HTML;
        // 把生成的验证码发到会员的邮箱中
        sendMail($data['B_email'], 'php34网email验证', $content);
    }
}