<?php
/**
 * Created by PhpStorm.
 * User: 80611
 * Date: 2017-11-04
 * Time: 22:59
 */
namespace Home\Model;
use Think\Model;
class CustomerInformationModel extends Model{
    /**
     * 防止sql注入
     */
    protected $insertFields = array();

    /**
     * 自动验证
     */
    protected $_validate = array(
        array('case_number', 'require', '案件号码不能为空', 1),
        array('custome', 'require', '客户名称不能为空', 1),
        array('recepients', 'require', '收件人不能为空', 1),
    );

    /**
     * 获取表的全部信息
     */
    public function getAll(){
        $result = $this->select();
        return $result;
    }
}