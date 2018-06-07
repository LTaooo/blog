<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    function __construct(){
        if(!session('?username')){
            $this->success('请先登陆','login/login','',1);
        }
    }
    public function index()
    {
        return view('index',['username'=>session('username')]);
    }
}
