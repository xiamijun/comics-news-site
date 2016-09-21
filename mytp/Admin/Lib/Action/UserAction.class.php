<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/11
 * Time: 20:29
 */
class UserAction extends AclAction {
    public function index(){
        $user=M('User');
        $rows=$user->select();
        $this->assign('rows',$rows);
        $this->display();
    }
    
    public function add(){
        $this->display();
    }
    
    public function insert(){
       	$user=M('User');
        $user->password=md5($_POST['password']);
		$user->username=$_POST['username'];
		$user->isadmin='1';
        if ($user->add()){
            $this->success('添加成功',U('index'));
        }
    }
}