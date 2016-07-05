<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="keywords"
	content="磁力搜索, 磁力链接, BT种子搜索, BT樱桃, BT下载, 在线播放, 云点播" />
<meta name="description"
	content="BT樱桃是一个功能强大的磁力链接搜索引擎，拥有互联网最新最热的BT资源、高效精准的搜索服务、极速稳定的浏览体验，为您提供最好的磁力搜索服务。" />
<meta name="renderer" content="webkit" />
<title>BT樱桃 - 磁力链接搜索引擎</title>
<link href="/template/btcherry/styles/home.css" rel="Stylesheet" />
</head>
<body onload="javascript:document.getElementById('keyword').focus();">
	<div class="page">
		<div class="header">
			<!-- <a style="float: right; line-height: 36px; padding-right: 10px;"
				href="/list">资源索引</a> -->
				<!-- <a style="float: right; line-height: 36px; padding-right: 10px;" href="/convert">上传种子</a> -->
		</div>
		<div class="content">
			<div>
				<img src="http://static.btcherry.com/images/logo.png"
					title="BT樱桃 磁力链接搜索引擎" alt="btcherry" />
			</div>
			<form action="/">
				<div style="padding-top: 20px;">
					<input name="kw" id="keyword" type="text"
						placeholder="搜索影视、明星、游戏、软件..." />
				</div>
				<div style="padding-top: 20px;">
					<input type="submit" value="搜索" id="search" /> <!-- <input
						type="button" value="订阅" id="subscribe"
						onclick="javascript: window.location.href = '/subscribe?keyword=' + document.getElementById('keyword').value;" /> -->
				</div>
				<div class="good">
            <p>当你感到失落，无助时，来这里看看 :-)</p>
            <p>
			<?php $_result=indexhotkeyword();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/word/<?php echo urlencode($vo[title]);?>.html"><?php echo ($vo["title"]); ?></a> &nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
              
                           </p>
        </div>
			</form>
		</div>
		
<div class="footer">
	<hr />
	<div style="width: 64%; margin-left: auto; margin-right: auto;">
		<div style="float: left; width: 12%;">&nbsp;</div>
		<div style="float: left; width: 28%; text-align: left;">
			<div style="font-weight: bold;">BT樱桃</div>
			<span>BT樱桃是一个基于DHT协议的BT资源搜索引擎，所有资源来源于爬虫24小时从DHT网络自动抓取，所有排行数据由程序自动生成。我们不存储任何资源和种子文件，只索引种子meta信息并提供搜索服务。 </span>
		</div>
		<div style="float: left; width: 5%;">&nbsp;</div>
		<div style="float: left; width: 28%; text-align: left;">
			<div style="font-weight: bold;">磁力链接</div>
			<span>磁力链接(<a href="http://en.wikipedia.org/wiki/Magnet_link">Magnet URI Scheme</a>)是一种新型的分享形式，每个链接对应一个BT种子文件。您可以通过软件下载磁力链接指向的资源，例如迅雷、BitComet、QQ旋风，也可以使用云点播服务在线观看影视资源，例如迅雷云播、百度云盘等。
			</span>
		</div>
		<div style="float: left; width: 5%;">&nbsp;</div>
		<div style="float: left; width: 20%; text-align: left;">
			<ul>
 
				<li><a href="/cdn-cgi/l/email-protection#026e6763746b6c657b7142656f636b6e2c616d6f">联系我们</a></li>
			</ul>
		</div>
		<div style="clear: both; margin-bottom: 20px;"></div>
	</div>
</div>
</div>

<script type="text/javascript"> 
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&"/cdn-cgi/l/email-protection"==a.substr(0 ,27)){s='';j=28;r=parseInt(a.substr(j,2),16);for(j+=2;a.length-j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>