<?php
namespace app\index\controller;
use \think\Request;
use think\Db;
use think\Controller;
class Index extends Base
{
    public function index()
    {

            $list=db('article')->order('id desc')->select();
            // dump($list);die;
            $this->assign('list',$list);
            return view();

    }

}
