<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"D:\phpStudy\WWW\TP\tp5\public/../application/index\view\article\article.html";i:1528127021;s:64:"D:\phpStudy\WWW\TP\tp5\application\index\view\common\header.html";i:1528119867;s:63:"D:\phpStudy\WWW\TP\tp5\application\index\view\common\right.html";i:1528123289;s:62:"D:\phpStudy\WWW\TP\tp5\application\index\view\common\foot.html";i:1527261585;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>童老师ThinkPHP交流群：484519446</title>
        <meta name="keywords" content="童老师ThinkPHP交流群：484519446" />
        <meta name="description" content="童老师ThinkPHP交流群：484519446" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="http://lttp.com/tp5/public/static/index/style/lady.css" type="text/css" rel="stylesheet" />
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
        <script src='/jiehun/goto/my-65547.js' language='javascript'></script>

        <div class="position"><a href='/jiehun/'>主页</a> > <a href='http://lttp.com/tp5/public/static/index/images/'>生活</a> >  </div>

        <div class="overall">
            <div class="left">
                <div class="scrap">
                    <h1><?php echo $title; ?></h1>
                    <div class="spread">
                        <span class="writor">发布时间：<?php echo date('Y-m-d',$add_time); ?></span>
                        <span class="writor">编辑：<?php echo $author; ?></span>
                        <!-- <span class="writor">标签：<a href='/jiehun/z97712.html'>聚餐</a></span> -->
                        <span class="writor">热度:<?php echo $click; ?></span>
                    </div>
                </div>

                <!--百度分享-->
                <script src='/jiehun/goto/my-65542.js' language='javascript'></script>

                <div class="takeaway">
                    <span class="btn arr-left"></span>
                    <p class="jjxq"><?php echo $descr; ?></p>
                    <span class="btn arr-right"></span>
                </div>

                  <script src='/jiehun/goto/my-65541.js' language='javascript'></script>

                <div class="substance"><p><strong><?php echo $content; ?></strong></p></div>
                <div class="biaoqian">
                   
                </div>



        <!-- 相关阅读
        <div class="xgread">
            <div class="til"><h4>相关阅读</h4></div>
            <div class="lef"><!--相关阅读主题链接-->
                <!-- <script src='/jiehun/goto/my-65540.js' language='javascript'></script>
            </div>
            <div class="rig">
                <ul>
                    <li><a href='http://lttp.com/tp5/public/static/index/images/20160907155021.html' target="_blank">蓝牙耳机怎么和手机连接 连接手机及电脑的方法</a></li>
                </ul>
            </div>
        </div> --> 

                <!--频道推荐-->
                <div class="hotsnew">
                    <div class="til"><h4>文章推荐</h4></div>
                    <ul>
                        <?php if(is_array($tuijian) || $tuijian instanceof \think\Collection || $tuijian instanceof \think\Paginator): $i = 0; $__LIST__ = $tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <div class="tu">
                                <a href='http://lttp.com/tp5/public/static/index/images/20160920156275.html' target="_blank">
                                    <img src="<?php echo SITE_URL.'/'.$vo['pic']; ?>" alt=""/>
                                </a>
                            </div>
                            <p>
                                <a href='http://lttp.com/tp5/public/static/index/images/20160920156275.html'><?php echo $vo['title']; ?>
                                </a>
                            </p>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>		
            </div>

            <div class="right">
                <!--右侧各种广告-->
                <!--猜你喜欢-->

				<div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
        <div class="hm-t-container" style="width: 298px;">
            <div class="hm-t-main">
                <div class="hm-t-header">热门点击</div>
                <div class="hm-t-body">
                    <ul class="hm-t-list hm-t-list-img">
                        <?php if(is_array($redian) || $redian instanceof \think\Collection || $redian instanceof \think\Paginator): $i = 0; $__LIST__ = $redian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li class="hm-t-item hm-t-item-img">
                                <a data-pos="0" title="" target="_blank" href="<?php echo url('article/index',array('id'=>$vo['id'])); ?>" class="hm-t-img-title" style="visibility: visible;">
                                    <span><?php echo $vo['title']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
        </div></div></div>
        
        </div></div>
        <div style="height:15px"></div>
        
        <div id="bdcs">
            <div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 --> 
                <div id="default-searchbox" class="bdcs-main bdcs-clearfix">      
                    <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">          
                        <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" 
                        target="_blank" method="get" action="<?php echo url('search/index'); ?>">                                                                     
                            <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" 
                            class="bdcs-search-form-input" name="keyword" autocomplete="off" 
                            style="line-height: 30px; width:220px;">              
                            <input type="submit" value="搜索" id="bdcs-search-form-submit" 
                            class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">                       
                        </form>      
                    </div>                
                    <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">              
                            <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list">
                            </ul>         
                    </div>                  
                    </div>                           
                </div>
            </div>
        
        <div style="height:15px"></div>


                
            </div>
    
</div>


<div class="footerd">
        <ul>
            <li>Copyright &#169; 2008-2015  all rights reserved 版权所有</li> 
        </ul>
    </div>  

        <div style="display:none;"><script src='/jiehun/goto/my-65537.js' language='javascript'></script><script src="/jiehun/images/js/count_zixun.js" language="JavaScript"></script></div>

    </body>
</html>