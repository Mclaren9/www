<?php
    namespace Home\Controller;
    use Think\Controller;
    class RenwuController extends Controller{
        public function index(){
            if(IS_POST){
            $model = D("Renwu");
            if($model->create(I("post."))){
                if($model->add()){
                    $this->success("邮件已成功发送给A");
                    exit();
                }
            }
            $this->error($model->getError());
            }
            $this->display();
        }
    }
?>