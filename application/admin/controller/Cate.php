<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
class Cate extends Controller
{
    public function lst()
    {
        $list=db('cate')->paginate(3);//分页实现
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost()){
            $data=[
                'cate'=>input('cate')
            ];
            $rules = [
                'cate'  => 'unique:cate',
            ];
            $validate = new \think\Validate($rules);

            if($validate->check($data)){
                if(db('cate')->insert($data)){
                    return $this->success("栏目添加成功","lst");
                }else{
                    return $this->error("栏目添加失败");
                }
            }else{
                
                $this->error($validate->getError());
            }

        }
        return view();
    }
    public function edit(){
        if(request()->isPost()){
            $data=[
                'cate'=>input('cate')
            ];
            $rules = [
                'cate'  => 'unique:cate',
            ];
            $validate = new \think\Validate($rules);
            if($validate->check($data)){
                 if(db('cate')->update($data)){
                    $this->success('修改成功','lst');
                }else{
                    $this->error('修改失败');
                }
            }else{
                $msg=$validate->getError();
                $this->error($msg);
            }

        }else{
            $id=input('id');
            $list=db('cate')->where('id',$id)->find();
            $this->assign($list);
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