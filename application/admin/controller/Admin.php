<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
class Admin extends Controller
{
    function _initialize(){
        if(!session('?username')){
            $this->success('请先登陆','login/login','',1);
        }
    }
    public function lst()
    {
        $list=db('admin')->paginate(3);//分页实现
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>input('password')
            ];

            $validate = Loader::validate('Admin');

            if($validate->check($data)){
                if(db('admin')->insert($data)){
                    return $this->success("管理元添加成功","lst");
                }else{
                    return $this->error("管理员添加失败");
                }
            }else{
                $msg=$validate->getError();
                $this->error($msg);
            }

        }
        return view();
    }
    public function edit(){
        if(request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>input('password'),
                'id'=>input('id')
            ];
            $validate = Loader::validate('Admin');
            if($validate->check($data)){
                 if(db('admin')->update($data)){
                    $this->success('修改成功','lst');
                }else{
                    $this->error('管理员修改失败');
                }
            }else{
                $msg=$validate->getError();
                $this->error($msg);
            }

        }else{
            $id=input('id');
            $user=db('admin')->field('id,username')->where('id',$id)->find();
            $this->assign($user);
            return $this->fetch();
        }

    }
    public function del()           
    {
        $id=input('id');
        if(db('admin')->where('id',$id)->delete()){
            $this->success('删除成功','lst');
        }else{
            $this->error('管理员删除失败');
        }
    }
}
