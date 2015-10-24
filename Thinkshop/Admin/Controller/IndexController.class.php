<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommentController {
    public function index(){
        $this->display();
    }
    public function left() {
        $this->display('Index/left');
    }
    public function main() {
        $log=M('Admin');
        $data['id']=session('uid');
        $rs=$log->where($data)->find();
         $this->assign('logip',$rs['a_logip']);
        if($rs['a_power']==1) {
            $this->assign('utype','超级管理员');
        }
        else {
            $this->assign('utype','商家管理员'); 
        }
        $this->assign('name',session('username'));
        $this->assign('time',date('Y-m-d H:i:s',time()));
        $this->assign('logtime',date('Y-m-d H:i:s',$rs['a_logtime']));
        $this->display('Index/main');
    }
    public function top() {
       $this->assign('uname',session('username'));
       $this->display('Index/top');
    }
    public function gofront() {
         // $this->redirect("Index/top");
    }
}