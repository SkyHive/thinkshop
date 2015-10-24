<?php
namespace Home\Behavior;
class ShowTestBehavior {
    //自己定义的行为类
    //行为扩展的执行入口必须是run
    public function run(&$params) {
        if(C('TEST_PARAM')) {
            echo "RUNTEST Behavior".$params;
        }
    }
}
?>