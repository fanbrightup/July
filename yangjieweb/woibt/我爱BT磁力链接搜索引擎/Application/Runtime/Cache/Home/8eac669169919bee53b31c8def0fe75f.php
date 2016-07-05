<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo config("web_name");?> - <?php echo config('web_seo_name');?></title>
<meta name="keywords" content="<?php echo config('web_keywords');?>" />
<meta name="description" content="<?php echo config('web_description');?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="1 days" />
<meta name="document-state" content="dynamic" />
<link href="/template/style2.css" type="text/css" rel="stylesheet"/>
<link rel="shortcut icon" href="/favicon.ico"/>
</head>
<body id="home" onload="document.btform.name.focus();">
	<div id="wrapper">
		<!-- header start -->
		<div id="header">
            <h1 id="logo"><img src="/image/logo.png" height="80px" alt="BT搜(BTSou.cn)"/></h1> 
            <p class="slogan">最懂你的磁力链接搜索引擎</p>
			    <div id="sbox">
                    <form name="btform" action="/">
                        <input type="text" baiduSug="2" autocomplete="off" placeholder="请输入电影、音乐、软件等资源名称" id="input" name="kw" class="stbox"/>
                        <input type="submit" onmouseout="this.className=''" onmousedown="this.className='mousedown'" onmouseover="this.className='hover'" value="搜索" id="sbutton"/>
                    </form>
			    </div>
                <div id="nums">共索引 <span>25712012</span> 条磁力链资源，它们来源于DHT网络和BT种子分享站</div>
		</div>
		<div id="container">
			<div class="main">
				<div class="hotwords">
				    <div class="hwtit"><h4>热搜电影</h4><span><a href="">更多&gt;&gt;</a></span></div>
					<ul class="hwentry">
					<?php $_result=indexhotkeyword();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="HotKey" href="/word/<?php echo urlencode($vo[title]);?>.html"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div class="guanggao"><?php echo myad('8');?></div>
                </div>
                  <!--<div class="fenxiang">
                      <a class="fenxiang" target="_blank" title="亲，好东西一定要分享给小伙伴呀" href="http://connect.qq.com/widget/shareqq/index.html?url=http://www.runbt.com/#qshare&desc=bt种子搜索神器(电影，音乐，软件等各类资源)&title=好东西不解释&summary=只有想不到，没有搜不到&pics=http://www.runbt.com/image/logo.png&style=201&width=32&height=32">求分享，求扩散</a>
                  </div>-->
		    </div>
		<!-- container end -->
    	</div>
	</div>
	<!-- footer start -->
	<div id="footer">
	    <p>Copyright &copy; 2010 - 2014 BT搜<a href="http://www.btsou.cn" title="磁力搜索" target="_blank">磁力搜索</a> <?php echo config('web_url');?><br>声明：BT搜（<?php echo config('web_url');?>）仅实时展示DHT网络动态，不提供任何BT种子和资源文件下载！<?php echo config('web_tongji');?></p>
	</div>
	<!-- footer end -->
<div style="display:none">
</div>
<script charset="GBK" src="http://www.baidu.com/js/opensug.js"></script>
</body>
</html>