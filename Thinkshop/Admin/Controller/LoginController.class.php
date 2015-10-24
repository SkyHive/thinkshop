<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
       $this->display();
    }
    public function login() {
         $log=M('Admin');
         if(I('get.username')) {
          $cuser=array('a_username'=>I('get.username','').trim());
          $rs=$log->where($cuser)->select();
          if(empty($rs)) {
            echo "账户不存在";
          }
         }
         else if($_POST){
           $rs=$log->where($_POST)->find(); 
           if(empty($rs)) {
            $this->error('账号或密码错误');
           }
           else {
            $data['id']=$rs['id'];
            $data['a_logip']=get_client_ip();
            $data['a_logtime']=NOW_TIME;
            $log->save($data);
            session('username',$rs['a_username']);
            session('uid',$rs['id']);
            $this->redirect("Index/index");       
           } 
         }
    }
}