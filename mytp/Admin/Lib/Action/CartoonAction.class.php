<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/10
 * Time: 14:59
 */
class CartoonAction extends AclAction {


    public function add(){
        $this->display();
    }

    public function insert(){
        $cartoon=M('Cartoon');
        $cartoon->create();
        $cartoon->time=time();
        if($cartoon->add()){
            $this->success('发布成功',U('add'));
        }
    }
    
    public function index(){
        $cartoon=M('Cartoon');
        $rows=$cartoon->select();
        $this->assign('rows',$rows);
        $this->display();
    }
}