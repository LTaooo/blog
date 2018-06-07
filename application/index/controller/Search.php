<?php
namespace app\index\controller;
use think\Controller;
class Search extends Base{
    public function index(){
        $key=input('keyword');
        $list=db('article')->where('title','LIKE','%'.$key.'%')->select();
        // dump($list);die;
        $this->assign('list',$list);
       return  $this->fetch();
    }
}