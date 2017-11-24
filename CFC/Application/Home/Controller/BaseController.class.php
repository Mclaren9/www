<?php
/**
 * Created by PhpStorm.
 * User: 80611
 * Date: 2017-11-01
 * Time: 22:55
 */
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller{
    public function __construct()
    {
        parent::__construct();
        $admin = session("name");
        if(!$admin){
            redirect(U("Login/login"));
        }
    }
}