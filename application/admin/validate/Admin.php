<?php
    namespace app\admin\validate;

    use think\Validate;
    
    class Admin extends Validate
    {
        protected $rule = [
            'username'  =>  'min:4|max:16|unique:admin',
            'password'=> 'min:6|max:16'
        ];
        protected $message= [
            'username.min'=>'用户名长度不得小于4个字节',
            'username.max'=>'用户名长度不得大于16个字节',
            'username.unique'=>'用户名重复',
            'password.min'=>'密码长度不得小于6个字节',
            'password.max'=>'密码长度不得大于16个字节',

        ];
    
    }