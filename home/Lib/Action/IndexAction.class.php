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
    $m = M('test');
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
    public function delete(){
    $m = M('test');
    $num = $m->where("ID='".$_GET['id']."'")->delete();
    //$unm = $m->where('id=193019')->delete();
    //$num = $m->where('ID='.$_GET['id']."'")->delete;
    if ($num !== false) {
    $this->success('删除成功','__APP__/?m=index');
    print($num);
    }else{
    $this->error('删除失败');
    print($num);
    }
    }
    }