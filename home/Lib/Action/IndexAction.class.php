<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    /*public function index(){
        $this->assign('str','a new');
        $this->assign('now,time()');
        $this->assign('data','');
        $this->assign('a',1561);
        $this->assign('b',80456);
       $m = M('qhddata');
       $qhddata = $m->select();
       $this->assign('qhddata',$qhddata);
       //dump($qhddata);
       //die();
	   $this->display();
    }*/
    public function index(){
      $m = M('qhddata');
      $re = $m->order('ID desc')->select();
      //判断查询是否成功
      if ($re === NULL) {
        $this->assign('notice','查询失败');
      }else{
        $this->assign('re',$re);
      }
    $this->display();
    //dump($re);
    }
}