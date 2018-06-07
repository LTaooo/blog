<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\TP\tp5\public/../application/index\view\search\index.html";i:1528124508;s:64:"D:\phpStudy\WWW\TP\tp5\application\index\view\common\header.html";i:1528119867;s:62:"D:\phpStudy\WWW\TP\tp5\application\index\view\common\foot.html";i:1527261585;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>童老师ThinkPHP交流群：484519446</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="童老师ThinkPHP交流群：484519446" />
<meta name="description" content="童老师ThinkPHP交流群：484519446" /> 
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="http://lttp.com/tp5/public/static/index/style/lady.css" type="text/css" rel="stylesheet" />
<!-- <link href="http://www.topthink.com/Public/static/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" /> -->
<script type='text/javascript' src='http://lttp.com/tp5/public/static/index/style/ismobile.js'></script>
</head>

<body>

        	
<div class="ladytop">
    <div class="nav">
        <div class="left"><a href="<?php echo url('index/index'); ?>"><img src="http://lttp.com/tp5/public/static/index/images/hunshang.png" alt="wed114婚尚"></a></div>
        <div class="right">
        <div class="box">
            <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('cate/index',array('cate'=>$vo['cate'])); ?>" ><?php echo $vo['cate']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        </div>
    </div>
</div>

<!-- <div class="hotmenu">
	<div class="con">热门标签：<a href='qiwenqushi/'>奇闻趣事</a> <a href=''>生活妙招</a> <a href='xingzuo/'>星座</a> <a href='qinzi/'>亲子</a> <a href='qiche/'>汽车</a> <a href='chongwubaike/'>宠物百科</a> <a href='jiaji/'>家居</a> </div>
</div> -->

<!--顶部通栏-->


<div class="position">搜索：<span style="color:#f00; font-weight:bold;"><?php echo \think\Request::instance()->request('keyword'); ?></span> </div>

<div class="overall">

	<div class="left">
				
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="xnews2">
				<div class="pic"><a target="_blank" href="<?php echo url('article/index',array('id'=>$vo['id'])); ?>">
					<img src="<?php echo SITE_URL.'/'.$vo['pic']; ?>" alt=""/></a>
				</div>
				<div class="dec">
					<h3><a target="_blank" href="<?php echo url('article/index',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></h3>
					<div class="time"><?php echo date("Y-m-d",$vo['add_time']); ?></div>
					<p><?php echo $vo['content']; ?></p>
					<!-- <div class="time"><a href='z97712.html'>聚餐</a>  </div> -->
				</div>
			
			</div>
			<?php endforeach; endif; else: echo "" ;endif; ?>	

				
				<div class="pages">
				<div class="plist" >
				</div>
				</div>
	</div>
	
	
</div>
<div class="footerd">
        <ul>
            <li>Copyright &#169; 2008-2015  all rights reserved 版权所有</li> 
        </ul>
    </div>

</body>
</html>