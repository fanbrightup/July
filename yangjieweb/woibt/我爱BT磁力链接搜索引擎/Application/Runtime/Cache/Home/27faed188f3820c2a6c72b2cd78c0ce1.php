<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo ($title); echo config('web_name');?></title>
<meta name="keywords" content="<?php echo config('web_keywords');?>"/>
<meta name="description" content="<?php echo config('web_description');?>" />
<link rel="shortcut icon" href="/favicon.ico"/>
<link href="/template/style.css" type="text/css" rel="stylesheet"/>
</head>
<body id="content">
	<div id="wrapper">
		<!-- header start -->
		<div id="header">
		   <h1 id="logo"><a href="/" title="BT搜"><img src="/image/logo-s.png" width="180" height="40" alt="BT搜(BTSou.CN)"/></a></h1> 
		   <div id="sbox">
				<form name="btform" action="/">
					<input type="text" autocomplete="off" id="input" name="kw" placeholder="请输入电影、音乐、软件等资源名称" class="stbox" value="" />
					<input type="submit" onmouseout="this.className=''" onmousedown="this.className='mousedown'" onmouseover="this.className='hover'" value="搜索" id="sbutton"/>
				</form>
			</div>
			<div class="hotwords_left">热搜词:
			<?php $_result=indexhotkeyword();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="HotKey" href="/word/<?php echo urlencode($vo[title]);?>.html"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<!-- header end -->
		<!-- container start -->
		<div id="container">
		<style>
		.mainleft{width:70%;float:left;}
		.mainright{width:250px;height:250px;float:left;}
		</style>
		<div class="mainleft">
			<div class="leftconbox">
				<ul class="sidenav1"><?php echo myad('3');?></ul>
			</div>
			<div class="main"><div class="T1"><?php echo ($title); ?></div><dl class="BotInfo"><p>创建日期：<?php echo ($creadtime); ?></p>
			<p>文件大小：<?php echo ($size); ?></p><p>文件数量：<?php echo ($filenum); ?></p>
			
</p><p>磁力链接：<a href="magnet:?xt=urn:btih:<?php echo $_GET['hash'];?>" rel="nofollow">magnet:?xt=urn:btih:<?php echo $_GET['hash'];?></a>&nbsp;请使用迅雷，旋风，百度云盘离线，115网盘离线等进行下载</p><p>文件列表：</p></dl><ol class="flist">
<?php echo ($filelist); ?><p><?php echo myad('4');?></p>
</ol></div>
</div>
          <div class="mainright"><?php echo myad('7');?></div>
		</div>
		<!-- container end -->
	</div>
    <!-- footer start -->
	<div id="footer">
		<p>Copyright &copy; 2010 - 2014 BT搜 <?php echo config('web_url');?> <br>声明：BT搜（<?php echo config('web_url');?>）仅实时展示DHT网络动态，不提供任何BT种子和资源文件下载！<?php echo config('web_tongji');?></p>
	</div>
    <!-- footer end -->
<div style="display:none;"></div>
</body>

</html>