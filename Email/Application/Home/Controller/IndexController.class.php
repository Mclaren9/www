<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "A同学，我的任务完成了";
	}

	public function register(){
	    if(IS_POST){
	        $model = D("Email");
            if($model->create(I("post."))){
                if($model->add()){
                    $this->success("邮件已成功发送给B");
                    exit();
                }
            }
            $this->error($model->getError());
        }
        $this->display();
    }
}