<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\TP\tp5\public/../application/admin\view\article\edit.html";i:1528114224;s:61:"D:\phpStudy\WWW\TP\tp5\application\admin\view\common\top.html";i:1527605408;s:62:"D:\phpStudy\WWW\TP\tp5\application\admin\view\common\left.html";i:1527696574;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://lttp.com/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://lttp.com/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://lttp.com/tp5/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://lttp.com/tp5/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://lttp.com/tp5/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://lttp.com/tp5/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://lttp.com/tp5/public/static/admin/style/animate.css" rel="stylesheet">
    <script src="http://lttp.com/tp5/public/static/admin/ueditor/ueditor.config.js"></script>
    <script src="http://lttp.com/tp5/public/static/admin/ueditor/ueditor.all.min.js"></script>
    <script src="http://lttp.com/tp5/public/static/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="<?php echo url('index/index'); ?>" class="navbar-brand">
                        <small>
                                <img src="http://lttp.com/tp5/public/static/admin/images/logo.png" alt="">
                            </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="http://lttp.com/tp5/public/static/admin/images/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="dropdown-footer">
                                        <a href="<?php echo url('login/logout'); ?>">
                                                退出登录
                                            </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="/admin/user/changePwd.html">
                                                修改密码
                                            </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                                no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>  

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                        <span class="menu-text">
                            管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li> 

        <li>
            <a href="" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文章</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                        <span class="menu-text">
                            文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li> 

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">栏目</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lst'); ?>">
                        <span class="menu-text">
                            栏目列表                                 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>                            
        </li>  
                        
        
    </ul>
    <!-- /Sidebar Menu -->
</div>  
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs"> 
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('article/lst'); ?>">文章管理</a>
                    </li>
                                        <li class="active">添加文章</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">编辑文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label no-padding-right">标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" placeholder="" name="title" value="<?php echo $title; ?>" type="text">
                            </div>
                            <p class="help-block col-sm-4 red" id="bitian1">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">作者</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="author" placeholder="" name="author" value="<?php echo $author; ?>" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">栏目</label>
                            <div class="col-sm-6">
                                <select name="cate" id="">
                                    <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['cate'] != $cate): ?>
                                        <option value="<?php echo $vo['cate']; ?>"><?php echo $vo['cate']; ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo $vo['cate']; ?>" selected="selected"><?php echo $vo['cate']; ?></option>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章描述</label>
                            <div class="col-sm-6">
                                <!-- <input class="form-control" id="password" placeholder="" name="password" required="" type="text"> -->
                                <textarea name="descr" class="form-control"  ><?php echo $descr; ?></textarea>
                            </div>
                        </div>

                        <input type="hidden" value="<?php echo $id; ?>">
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                <input placeholder="" name="pic" type="file">
                                <?php if($pic == ''): ?>
                                    暂无缩略图
                                <?php else: ?>
                                    <img src="<?php echo SITE_URL.'/'.$pic; ?>" alt="" height="50" width="50"> 
                                <?php endif; ?>
                            </div>
                        </div>


                        <input type="hidden" name="state" value="1">
                        
                        
                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">文章内容</label>
                            <div class="col-sm-6">
                                <textarea id="content"  placeholder="" name="content" required="" ><?php echo $content; ?></textarea>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>        
                        

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" id="bitian2">
                                <button type="submit" class="btn btn-default">修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

        <!--Basic Scripts-->
    <script src="http://lttp.com/tp5/public/static/admin/style/jquery_002.js"></script>
    <script src="http://lttp.com/tp5/public/static/admin/style/bootstrap.js"></script>
    <script src="http://lttp.com/tp5/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://lttp.com/tp5/public/static/admin/style/beyond.js/"></script>
    <script>
        UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400});
    </script>


</body></html>