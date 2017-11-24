<?php
/**
 * Created by PhpStorm.
 * User: 80611
 * Date: 2017-11-04
 * Time: 21:06
 */
namespace Home\Model;
use Think\Model;
class AdminModel extends Model{
    /**
     * 获取表的全部信息
     */
    public function getAll(){
        $result = $this->select();
        return $result;
    }
}