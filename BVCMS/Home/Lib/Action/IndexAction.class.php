<?php
header('Content-type:text/html;charset=utf-8');
class IndexAction extends Action {
    public function index(){
        $m=M('formal');
        $arr=$m->select();
		$total_result = $m->count("ID");
		$data['Status'] = 'Spare';
		$spare_result = $m->where($data)->count();
        if($arr != ''){
            $count=count($arr)-1;
            $PCName=$arr["$count"]['PCName'];
            $title_1 = substr($PCName, 0,1);
            $title_2 = substr($PCName, 1,2);
            $title_3 = substr($PCName, 3,2);
            $title_4 = substr($PCName, 5,5);
            $title_5 = substr($PCName, 10,5);
            $this->assign('data_1',$title_1);
            $this->assign('data_2',$title_2);
            $this->assign('data_3',$title_3);
            $this->assign('data_4',$title_4);
            $this->assign('data_5',$title_5);
        }
        // foreach($arr as $key=>&$value){
        //     $strlen=strlen($value['remarks']);
        //     if($strlen>36){
        //         $string=substr($value['remarks'],0,15);
        //         $value['remarks']=$string."...";
        //     }
        // }
        $this->assign('data',$arr);
		$this->assign('data_total',$total_result);
		$this->assign('data_spare',$spare_result);		
        $this->display();
    }

    //添加数据
    public function add_show(){
        $this->display();
    }

public function add(){
        // 判断必填项是否填写
        // if($_POST['location'] || $_POST['sn'] || $_POST['computertype'] || $_POST['bucode'] || $_POST['os'] == ''){
        //     $this->error('红色字体必须填写');
        // }
        $data['Location']=$_POST['location'];
        $data['Model']=$_POST['model'];
        $data['SN']=$_POST['sn'];
        $data['ComputerType']=$_POST['computertype'];
        $data['PurchaseDate']=$_POST['purchasedate'];
        $data['ReplaceDate']=$_POST['replacedate'];
        $data['BUCode']=$_POST['bucode'];
        $data['BUDescription']=$_POST['budescription'];
        $data['OS']=$_POST['os'];
        $data['Office']=$_POST['office'];
        $data['Snow']=$_POST['snow'];
        $data['Monitor']=$_POST['monitor'];
        $data['EName']=$_POST['ename'];
        $data['Staff']=$_POST['staff'];
        $data['Dept']=$_POST['dept'];
        $data['Cityray']=$_POST['cityray'];
        $data['CName']=$_POST['cname'];
        $data['JobTitle']=$_POST['jobtitle'];
        $data['ADAccount']=$_POST['adaccount'];
        $data['WorkLocation']=$_POST['worklocation'];
        $data['N1']=$_POST['n1'];
        $data['SBUBL']=$_POST['sbubl'];
        $data['JobFamily']=$_POST['jobfamily'];
        $data['Remark']=$_POST['remark'];
        $data['AssetNo'] = $_POST['AssetNo'];
        $data['BarCode'] = $_POST['BarCode'];
        $data['time']=time();

        //判断电脑的状态
        if($_POST['ename'] == '' || $_POST['ename'] == '待分配'){
            $status = 'Spare';
        }else{
            $status = 'InUse';
        }
        $data['Status'] = $status;

        // 拼接电脑名PC Name
        $title_1=substr($_POST['computertype'], 0,1);
        if($title_1=='D'){
            $title_1='W';
        }
        $title_2=$_POST['os'];
        if($title_2=='Win 7'){
            $title_2='W7';
        }
        $title_3='CN';
        $title_4=$_POST['location'];
        $title_5 = $_POST['pcname'];
        // $title_51=substr((date("Y/m/d H:i:s",time())), 2,2);
        $m=M('formal');
        // $arr=$m->select();
        // if($arr==''){
        //     $id=0;
        // }else{
        //     $count=count($arr)-1;
        //     $id=$arr["$count"]['Id'];
        // }
        // $id=$id+1;
        // if($id<10){
        //     $id='00'.$id;
        // }else if($id>9 && $id<100){
        //     $id='0'.$id;
        // }else{
        //     $id=$id;
        // }
        // $title_5=$title_51.$id;
        $data['PCName']=$title_1.$title_2.$title_3.$title_4.$title_5;

        $count=$m->add($data);

        if($count>0){
            $this->success('添加数据成功','index');
        }else{
            $this->error('添加数据失败');
        }
    }

    //搜索数据
    public function search(){
        $search_key=$_POST['search_key'];
        if($search_key == '选择搜索关键字'){
            $this->error('请选择关键字');
        }
        if($search_key == 'PC Name'){
            $search_key = 'PCName';
        }else if($search_key == 'S/N'){
            $search_key = 'SN';
        }else if($search_key == 'PC Model'){
            $search_key = 'Model';
        }else if($search_key == 'User Name'){
            $search_key = 'EName';
        }else if($search_key == 'BU Code'){
            $search_key = 'BUCode';
        }else if($search_key == 'Dept.'){
            $search_key = 'Dept';
        }
        $search_data=$_POST['search_data'];
        // $data=$_POST['data'];
        // $where['department|username|problem_classification|problem_description|solution_method']=array(array('like',"%$data%"),array('like',"%$data%"),array('like',"%$data%"),array('like',"%$data%"),array('like',"%$data%"));
        $where["$search_key"]=array('like',"%$search_data%");
        $m=M('formal');
        $result=$m->where($where)->select();
		$count = count($result);
        if($result){
            $this->assign('data',$result);
			$this->assign('data_count',$count);
            $this->display("index");
        }else{
            $this->error('不存在这样的数据');
        }
    }

    // 表格排序
    public function order(){
        $order_data=$_GET['order_data'];
        $m=M('formal');
        if($order_data == 'time'){
            $arr=$m->order("$order_data desc")->select();
        }else{
            $arr=$m->order($order_data)->select();
        }
        if($arr){
            $this->assign('data',$arr);
            $this->display("index");
        }else{
            $this->error('不存在这样的数据');
        }
    }

    //删除数据
    public function delete(){
        $id=$_GET['id'];
        $m=M('formal');
        $data['Id'] = $id;
        $data['Status'] = 'Scrapped';
        $count=$m->save($data);

        // $count=$m->delete($id);
        if($count>0){
            $this->success('修改数据成功');
        }else{
            $this->error('修改数据失败');
        }
    }

    //修改数据
    public function modify(){
        $id=$_GET['id'];
        $m=M('formal');

        $data=$m->find($id);
        if($data != ''){
            $PCName = $data['PCName'];
            $title_1 = substr($PCName, 0,1);
            $title_2 = substr($PCName, 1,2);
            $title_3 = substr($PCName, 3,2);
            $title_4 = substr($PCName, 5,5);
            $title_5 = substr($PCName, 10,5);
            $this->assign('data_1',$title_1);
            $this->assign('data_2',$title_2);
            $this->assign('data_3',$title_3);
            $this->assign('data_4',$title_4);
            $this->assign('data_5',$title_5);
        }
        $this->assign('data',$data);
        $this->display();
    }
// 保存数据
    public function save(){
        $data['Id'] = $_GET['id'];
        $data['Location']=$_POST['location'];
        $data['Model']=$_POST['model'];
        $data['SN']=$_POST['sn'];
        $data['ComputerType']=$_POST['computertype'];
        $data['PurchaseDate']=$_POST['purchasedate'];
        $data['ReplaceDate']=$_POST['replacedate'];
        $data['BUCode']=$_POST['bucode'];
        $data['BUDescription']=$_POST['budescription'];
        $data['OS']=$_POST['os'];
        $data['Office']=$_POST['office'];
        $data['Snow']=$_POST['snow'];
        $data['Monitor']=$_POST['monitor'];
        $data['EName']=$_POST['ename'];
        $data['Staff']=$_POST['staff'];
        $data['Dept']=$_POST['dept'];
        $data['Cityray']=$_POST['cityray'];
        $data['CName']=$_POST['cname'];
        $data['JobTitle']=$_POST['jobtitle'];
        $data['ADAccount']=$_POST['adaccount'];
        $data['WorkLocation']=$_POST['worklocation'];
        $data['N1']=$_POST['n1'];
        $data['SBUBL']=$_POST['sbubl'];
        $data['JobFamily']=$_POST['jobfamily'];
        $data['Remark']=$_POST['remark'];
        $data['AssetNo'] = $_POST['AssetNo'];
        $data['BarCode'] = $_POST['BarCode'];
        $data['time']=time();
        
        //判断电脑的状态
        if($_POST['ename'] == '' || $_POST['ename'] == '待分配'){
            $status = 'Spare';
        }else{
            $status = 'InUse';
        }
        $data['Status'] = $status;
		
        // 拼接电脑名PC Name
        $title_1=substr($_POST['computertype'], 0,1);
        if($title_1=='D'){
            $title_1='W';
        }
        $title_2=$_POST['os'];
        if($title_2=='Win 7'){
            $title_2='W7';
        }
        $title_3='CN';
        $title_4=$_POST['location'];
        $title_5 = $_POST['pcname'];
        // $title_51=substr((date("Y/m/d H:i:s",time())), 2,2);
        $m=M('formal');
        // $id = $_GET['id'];
        // if($id<9){
        //     $id='00'.$id;
        // }else if($id>9 && $id<100){
        //     $id='0'.$id;
        // }else{
        //     $id=$id;
        // }
        // $title_5=$title_51.$id;
        $data['PCName']=$title_1.$title_2.$title_3.$title_4.$title_5;

        $count=$m->save($data);
        if($count>0){
            // $this->success('修改数据成功',"Index/index");
            $this->redirect('__URL__/Index/index','',3,'修改数据成功，页面跳转中...');
        }else{
            $this->error('修改数据失败');
        }
    }

    //查看数据
    public function look(){
        $this->display();
    }

    //导出到EXCEL
    public function export(){
        $file_name   = "数据表-".date("Y-m-d H:i:s",time());
        $file_suffix = "xls";
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=$file_name.$file_suffix");
        $m=M('formal');
        $arr=$m->select();
        $this->assign('data',$arr);
        $this->display();
    }

    //接受参数
    public function canshu(){
        $username=$_POST['username'];
        $department=$_POST['department'];
        $age=$_POST['age'];
        var_dump($username);
        var_dump($department);
        var_dump($age);
    }

}