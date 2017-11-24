<?php
    namespace Home\Model;
    use Think\Model;
    class RenwuModel extends Model{
        protected function _before_insert(&$data, $option){
            $data['isto_A_time'] = time();  // 注册的当前时间
            // 生成验证email用的验证码
            $data['isto_A'] = '1';
        }


    protected function _after_insert($data, $option){
        // heredoc的语法
            $content =<<<HTML
            <p>A同学请查收邮件，任务完成</p>
            <p><a href="http://localhost/Email/index.php/Home/Index/index">点击完成验证</a></p>
HTML;
            // 把生成的验证码发到会员的邮箱中
            sendMail($data['A_email'], '任务完成', $content);
        }
    }
?>