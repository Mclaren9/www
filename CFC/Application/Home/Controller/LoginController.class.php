<?php
/**
 * Created by PhpStorm.
 * User: 80611
 * Date: 2017-11-01
 * Time: 22:51
 */
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    /**
     * 显示登录页
     */
    public function login(){
        $this->display();
    }

    /**
     * 检查登录
     *
     * @param user varchar 用户名
     * @param pwd  varchar 密码
     *
     */
    public function check_login(){
        $admin_model = D("Admin");
        $arr = $admin_model->create(I("post."));
        $result = $admin_model->where($arr)->find();
            if($result){
            session('name', $result['username']);
            session('authority', $result['authority']);
            $this->success("登录成功", U("Index/index"), 1);
        }else{
            $this->error("用户名或密码错误");
        }
    }
}