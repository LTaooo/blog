<?php
namespace app\index\controller;
use \think\Request;
use think\Db;
use think\View;
class Article extends Base
{
    public function index()
    {
        $id=input('id');
        db('article')->where('id','=',$id)->setInc('click');
        $list=db('article')->where('id',$id)->find();
        // dump($list);die;
        #推荐
        $tuijian=db('article')->order('add_time desc')->limit(4)->select();
        $this->assign('tuijian',$tuijian);
        return view('article',$list);
    }

}
