<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller
{
    
    public function _initialize() {
       if(!isset($_SESSION['username'])) {
        $this->redirect('Login/index');
       }
    }
}
?>