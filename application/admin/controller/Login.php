<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
class Login extends Controller{

    public function login(){
        if(request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>input('password')
            ];
            if(db('admin')->where($data)->find()){
                session('username',$data['username']);
                session('password',$data['password']);
                $this->success('','index/index','',1);
            }else{
                $this->error('登陆失败，请检查用户名和密码');
            }
        }else{
            return view();
        }
    }
    public function logout(){
        session(null);
        $this->success('登出成功','login/login','',1);
    }

}