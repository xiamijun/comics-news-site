<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/11
 * Time: 19:57
 */
class AclAction extends Action{
    public function _initialize(){
        if (!$_SESSION['admin_login']){
            $this->error('未登录',U('Login/index'));
            exit();
        }
    }
}