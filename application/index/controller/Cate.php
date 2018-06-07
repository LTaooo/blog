<?php
namespace app\index\controller;
use \think\Request;
use think\Db;
use think\View;
use think\Controller;
class Cate extends Base
{
    public function index()
    {
        $list=db('article')->where('cate',input('cate'))->select();
        $this->assign('list',$list);
        return $this->fetch();
    }

}
