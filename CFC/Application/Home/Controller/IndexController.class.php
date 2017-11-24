<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
//use Think\Controller;
use \Home\Controller\BaseController;
class IndexController extends BaseController {
    /**
     * 首页面
     */
    public function index(){
        $dataModel = D("data");
        if(!empty($_GET['condition'])){
            $order = $_GET['condition'];
            if($order = 'addCustomerTime'){
                $order = 'addCustomerTime desc';
            }
            if(session("authority") == 3){
                $data['action'] = session('name');
                $arr = $dataModel->where($data)->order($order)->select();
            }else{
                $arr = $dataModel->order($order)->select();
            }
        }elseif(!empty($_POST['search'])){
            if(session("authority") == 3){
                $data['action'] = session('name');
                $data['case_number'] = $_POST['search'];
                $arr = $dataModel->where($data)->select();
            }else{
                $data['case_number'] = $_POST['search'];
                $arr = $dataModel->where($data)->select();
            }
        }else{
            if(session("authority") == 3){
                $data['action'] = session('name');
                $arr = $dataModel->where($data)->select();
            }else{
                $arr = $dataModel->select();
            }
        }
        $this->assign("data", $arr);
        $authority = session("authority");
        $this->assign("authority", $authority);
        $this->display();
    }


    /**
     * 显示添加新的订单页
     */
    public function AddNewOrder(){
        $authority = session("authority");
        $this->assign("authority", $authority);
        $this->display();
    }


    /**
     * 添加客户信息
     */
    public function AddCustomerInfor(){
        if(IS_POST){
            $data_model = D("data");
            $arr = I("post.");
            $arr['action'] = session('name');
            $arr['status'] = 'Processing';
            $arr['time'] = time();
            $arr['addCustomerTime'] = time();
            if(empty($arr['case_number'])){
                $this->error("案件号码不能为空");
            }
            if(empty($arr['customer'])){
                $this->error("客户名称不能为空");
            }
            if(empty($arr['recipients'])){
                $this->error("收件人不能为空");
            }
            if($data_model->add($arr)){
                $this->success("添加客户信息成功", U("Index/index"), 1);
            }else{
                $this->error("添加客户信息失败");
            }
            die;
        }
        $this->display();
    }


    /**
     * 添加快递信息
     */
    public function AddExpressInfor(){
        $dataModel = D("data");
        $arr = I("post.");
//      $arr['action'] = session('name');
        $arr['time'] = time();
        $arr['addExpressTime'] = time();
        if(empty($arr['invoice'])){
            $this->error("发票号码不能为空");
        }
        if(empty($arr['invoice_date'])){
            $this->error("开票日期不能为空");
        }
        if(empty($arr['express_number'])){
            $this->error("快递单号不能为空");
        }
        if(empty($arr['express_date'])){
            $this->error("寄件日期不能为空");
        }
        if($dataModel->add($arr)){
            $this->success("添加快递信息成功", U("Index/index"), 1);
        }else{
            $this->error("添加快递信息失败");
        }
    }


    /**
     * 添加追踪日志
     */
    public function AddTrackLog(){
        $this->error("请先提交用户和单号信息");
        $dataModel = D("data");
        $arr = I("post.");
        $arr['action'] = session('name');
        $arr['time'] = time();
        if($dataModel->add($arr)){
            $this->success("添加追踪日志成功", U("Index/index"), 1);
        }else{
            $this->error("添加追踪日志失败");
        }
    }

    /**
     * 退出
     */
    public function loginout(){
        session(null);
        $this->redirect("/");
    }

    /**
     * 修改
     */
    public function modify($id){
        $dataModel = D("Data");
        $arr = $dataModel->find($id);
        $authority = session("authority");
		$this->assign("authority", $authority);
        $this->assign("data", $arr);
        $this->display();
    }
    
    public function updateCustomerInfor(){
        $id = $_GET['id'];
        $data['id'] = $id;
        if(IS_POST) {
            $data_model = D("data");
            $arr = I("post.");
            $lastData = $data_model->find($id);
            if($lastData['addCustomerTime'] == ''){
                $arr['addCustomerTime'] = time();
            }
            $arr['action'] = session('name');
            $arr['time'] = time();
            if (empty($arr['case_number'])) {
                $this->error("案件号码不能为空");
            }
            if (empty($arr['customer'])) {
                $this->error("客户名称不能为空");
            }
            if (empty($arr['recipients'])) {
                $this->error("收件人不能为空");
            }
            $result = $data_model->where($data)->save($arr);
            if ($result) {
                $this->success("修改客户信息成功", U("Index/index"), 1);
            } else {
                $this->error("修改客户信息失败");
            }
        }
    }

    public function updateExpressInfor(){
        $id = $_GET['id'];
        $data['id'] = $id;
        $dataModel = D("data");
        $arr = I("post.");
//      $arr['action'] = session('name');
        $lastData = $dataModel->find($id);
        if($lastData['addExpressTime'] == ''){
            $arr['addExpressTime'] = time();
        }
        $arr['time'] = time();
        if(empty($arr['invoice'])){
            $this->error("发票号码不能为空");
        }
        if(empty($arr['invoice_date'])){
            $this->error("开票日期不能为空");
        }
        if(empty($arr['express_number'])){
            $this->error("快递单号不能为空");
        }
        if(empty($arr['express_date'])){
            $this->error("寄件日期不能为空");
        }
        $result = $dataModel->where($data)->save($arr);
        if($result){
            $this->success("修改快递信息成功", U("Index/index"), 1);
        }else{
            $this->error("修改快递信息失败");
        }
    }

    public function updateTrackLog(){
        $id = $_GET['id'];
        $data['id'] = $id;
        $dataModel = D("data");
        $lastData = $dataModel->find($id);
        if($lastData['case_number'] == '' || $lastData['customer'] == '' || $lastData['recipients'] == '' || $lastData['address'] == '' || $lastData['invoice'] == '' || $lastData['invoice_date'] == '' || $lastData['express_number'] == '' || $lastData['express_date'] == ''){
            $this->error("请确认用户和单号信息填写完整");
        }
        $arr = I("post.");
        $arr['action'] = session('name');
        $arr['time'] = time();
        $result = $dataModel->where($data)->save($arr);
        if($result){
            $this->success("修改追踪日志成功", U("Index/index"), 1);
        }else{
            $this->error("修改追踪日志失败");
        }
    }

    /**
     * 删除
     */
    public function delete($id){
        if(!empty($id)){
            $dataModel = D("data");
            if($dataModel->delete($id)){
                $this->success("删除数据成功");
            }else{
                $this->error("删除数据失败");
            }
        }
    }

    /**
     * 修改订单状态
     */
	public function status(){
	    if(session("authority") == 2){
	        $this->error("没有权限修改订单状态");
	    }
	    $id = $_GET['id'];
	    $data['id'] = $id;
	    $dataModel = D("data");
	    $arr = $dataModel->find($id);
	    if($arr['status'] == 'closed'){
	        $this->error("订单为关闭状态，无法修改");
	    }
	    $arr['status'] = 'closed';
	    $result = $dataModel->where($data)->save($arr);
	    if($result){
	        $this->success("修改订单状态成功", U("Index/index"));
	    }else{
	        $this->error("修改订单状态失败");
	    }
	}

    /**
 * 导出数据
 */
	public function export(){
	    $file_name   = "数据表-".date("Y-m-d H:i:s",time());
	    $file_suffix = "xls";
	    header("Content-Type: application/vnd.ms-excel");
	    header("Content-Disposition: attachment; filename=$file_name.$file_suffix");
	    $dataMdoel=D("data");
	    $arr=$dataMdoel->select();
	    $this->assign('data',$arr);
	    $this->display();
	}
    /**
     * ajax
     */
    public function ajax($user){
        echo $user;
    }

    /**
     * 测试
     */
    public function demo(){
        echo "hello demo";
    }
}