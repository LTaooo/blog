<?php
namespace app\index\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize()
    {

        $redian=db('article')->order('click desc')->field('id,title')->limit(8)->select();
    	$cateres=db('cate')->order('id asc')->select();
    	$this->assign(array(
            'cateres'=>$cateres,
            ));
            // dump($redian);die;
        $this->assign('redian',$redian);
    }
}
