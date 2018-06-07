<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Loader;
class Article extends Controller{
    function _initialize(){
        if(!session('?username')){
            $this->success('请先登陆','login/login','',1);
        }
    }
    public function add()
    {

        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'author'=>input('author'),
                'descr'=>input('descr'),
                'content'=>input('content'),
                'state'=>input('state'),
                'add_time'=>time(),
                'cate'=>input('cate')
            ];
            $file = request()->file('pic');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public\static\uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 jpg
                    // echo $info->getExtension();
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getSaveName();
                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getFilename(); 
                    $data['pic']='public\static\uploads\\'.$info->getSaveName();//转义
                }else{
                    // 上传失败获取错误信息
                    $this->error($file->getError());
                }
            }
            if(db('article')->insert($data)){
                $this->success('添加成功','lst');
            }else{
                $this->error('添加失败');
            }
        }else{
            $list=db('cate')->select();
            // dump($list);die;
            $this->assign('list',$list);
            return $this->fetch();
        }           

    }
    public function lst()
    {
        $list=db('article')->paginate(3);//分页实现
        $this->assign('list',$list);
        
        return $this->fetch();
    }
    public function edit()
    {
        if(request()->isPost()){
            $data=[
                'title'=>input('title'),
                'author'=>input('author'),
                'descr'=>input('descr'),
                'content'=>input('content'),
                'state'=>input('state'),
                'add_time'=>time(),
                'id'=>input('id'),
                'cate'=>input('cate')
            ];
            $file = request()->file('pic');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public\static\uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 jpg
                    // echo $info->getExtension();
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getSaveName();
                    // 输出 42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getFilename(); 
                    $data['pic']='public\static\uploads\\'.$info->getSaveName();//转义
                }else{
                    // 上传失败获取错误信息
                    $this->error($file->getError());
                }
            }
            if(db('article')->update($data)){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
        }else{
            $id=input('id');
            $list=db('article')->where('id',$id)->find();
            $list['cates']=db('cate')->select();
            // dump($list);die;
            return view('',$list);

        }

    }
    public function delete(){
        if(request()->isGet()){
            $id=input('id');
            if(db('article')->where('id',$id)->delete()){
                // $filename=db('article')->field('pic')->where('id',$id)->find();
                // @unlink(SITE_URL.'/public/static/uploads'.$filename);
                $this->success('删除成功','lst');
            }else{
                $this->error('删除失败');
            }
        }else{
            $this->error('请选择删除目标','lst',0);
        }
    }
}