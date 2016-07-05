<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo ($title); ?> - <?php echo config('web_name');?></title>
<meta name="keywords" content="<?php echo config('web_keywords');?>"/>
<meta name="description" content="<?php echo config('web_descriptio');?>" />
<link rel="shortcut icon" href="/favicon.ico"/>
<link href="/template/style.css" type="text/css" rel="stylesheet"/>
</head>
<body id="list">
	<div id="wrapper">
		<!-- header start -->
		<div id="header">
		   <h1 id="logo"><a href="/" title="BT搜"><img src="/image/logo-s.png" width="180" height="40" alt="BT搜(BTSou.CN)"/></a></h1> 
		   <div id="sbox">
				<form name="btform" action="/">
					<input type="text" autocomplete="off" id="input" name="kw" placeholder="请输入电影、音乐、软件等资源名称" class="stbox" value="<?php echo ($title); ?>" />
					<input type="submit" onmouseout="this.className=''" onmousedown="this.className='mousedown'" onmouseover="this.className='hover'" value="搜索" id="sbutton"/>
				</form>
			</div>
			<div class="hotwords_left">热搜词:<?php $_result=indexhotkeyword();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="HotKey" href="/word/<?php echo urlencode($vo[title]);?>.html"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
		</div>
		<!-- header end -->
		<!-- container start -->
		<div id="container">
			<div class="leftconbox">
				<ul class="sidenav1">
				<?php echo myad('1');?>
				</ul>
			</div>
			<style>
			.mlist{float:left;width:70%;}
			.guanggao{width:250px;height:250px;float:left;}
			</style>
			<div class="main">
				<ul class="mlist" >
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><div class="T1"><a href="/read/<?php echo ($vo["url"]); ?>.html" target="_blank"><?php echo ($vo["title"]); ?></a></div>
		    <dl class="BotInfo">
<dt><?php echo ($vo["title"]); ?> <?php echo ($vo["size"]); ?> MB</dt>
<dt>....</dt>
<dt>大小:<span><?php echo ($vo["size"]); ?> MB </span> &nbsp;&nbsp;&nbsp;&nbsp;文件数:<span><?php echo ($vo["filenum"]); ?> </span> &nbsp;&nbsp;&nbsp;&nbsp;创建日期:<span> 
<span class="ctime"><?php echo ($vo["creattime"]); ?></span>
 </span></dt>
            </dl>
            <div class="dInfo"><a href="/read/<?php echo ($vo["url"]); ?>.html">[磁力链接] </a>请使用迅雷，旋风，百度云盘离线，115网盘离线等进行下载</div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
			<?php echo myad('2');?>
				<div id="mpages">
				   <div class="pg"><?php echo ($page); ?></div>
				</div>
			</ul>
			<div class="guanggao"><?php echo myad('5');?></div>
			<div class="guanggao"><?php echo myad('6');?></div>
			<div class="guanggao"><?php echo myad('9');?></div>
				<br></br>

			</div>
		</div>
		<!-- container end -->
	</div>
	
    <!-- footer start -->
	<div id="footer">
		<p>Copyright &copy; 2010 - 2014 BT搜 <?php echo config('web_ur');?> <br>声明：BT搜（<?php echo config('web_ur');?>）仅实时展示DHT网络动态，不提供任何BT种子和资源文件下载！<?php echo config('web_tongji');?></p>
	</div>
    <!-- footer end -->
<div style="display:none;"></div>
</body>
</html>