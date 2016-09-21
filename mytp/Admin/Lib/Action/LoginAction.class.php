<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/9
 * Time: 19:11
 */
class LoginAction extends Action {
    public function index(){
        $this->display();
    }

    public function check(){
        $user=M('User');

        $fcode=md5($_POST['fcode']);
        $vcode=$_SESSION['verify'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        if ($fcode!=$vcode){
            $this->error('验证码有误',U('index'));
        }else{
            $where="username='{$username}' and password='{$password}' and isadmin='1'";
            $row=$user->where($where)->find();
            if ($row){
                $_SESSION['admin_username']=$username;
                $_SESSION['admin_login']=1;
                $this->success('登录成功',U('Index/index'));
            }else{
                $this->error('登录失败',U('index'));
            }
        }
    }

    public function logout(){

        if (!$_SESSION['admin_login']){
            $this->error('未登录',U('Login/index'));
            exit();
        }

        $_SESSION=array();
        setcookie('PHPSESSID','',time()-3600,'/');
        session_destroy();

        $this->success('退出成功',U('Login/index'));
    }

    public function verify(){
        import('ORG.Util.Image');
        Image::buildImageVerify(4,1,'png',60,30);
    }
}