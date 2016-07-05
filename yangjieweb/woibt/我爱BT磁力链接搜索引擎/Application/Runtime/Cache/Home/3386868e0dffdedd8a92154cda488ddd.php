<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link href="/template/btcherry/styles/bootstrap.min.css" rel="Stylesheet" />
<link href="/template/btcherry/styles/shared.css" rel="Stylesheet" />
<meta name="renderer" content="webkit" />

<title><?php echo ($title); ?> - 磁力链接搜索引擎</title>
<meta name="keywords" content="<?php echo ($title); ?>, 磁力链接, BT下载<?php echo ($title); ?>, 迅雷下载<?php echo ($title); ?>, 在线播放<?php echo ($title); ?>, 磁力搜索<?php echo ($title); ?>" />
<meta name="description" content="查看关于<?php echo ($title); ?>的热门资源" />
<script type="text/javascript" src="/template/btcherry/js/jquery.min.js"></script>
</head>
<body>
	<div class="page">
		<div class="header">
			<table style="width: 100%; border: none;">
				<tr>
					<td>
						<form action="/">
							<a href="/"><img src="http://static.btcherry.com/images/logo.png" title="BT樱桃 磁力链接搜索引擎" alt="btcherry" style="vertical-align: middle; margin-right: 7px;" /></a> <input name="kw"
								id="keyword" class="keyword" type="text" placeholder="搜索影视、明星、游戏、软件..." value="<?php echo ($title); ?>" /> <input type="submit" value="搜索" id="search" class="search" />
						</form>
					</td>
					<td align="right"><!-- <a class="func_link" href="/list">资源索引</a> --> <!-- <a class="func_link" href="/convert">上传种子</a> --></td>
				</tr>
			</table>
		</div>
<div id="content">
	<div style="text-align: left; padding-left: 150px; padding-right: 150px;">
	
		<!--<script src='http://www.avads.cn:100/s.aspx?action=2&id=503&u=89'></script>-->
		<div style="padding-top: 10px; padding-bottom: 10px;">
			<div style="float: right; text-align: center;">
		
				<!--广告位 160*445   -->
				</div>
		</div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="r">
				<a href="/read/<?php echo ($vo["url"]); ?>.html" target="_blank" class="link">
					<h5 class="h"><?php echo replace_str($vo['title'],$title);?></h5>
				</a>
				<div>
					<span style="padding-right: 10px; vertical-align: middle;">收录时间：<span
						class="prop_val"><?php echo ($vo["creattime"]); ?></span></span> <span
						style="padding-right: 10px; vertical-align: middle;">大小：<span
						class="prop_val"><?php echo ($vo["size"]); ?></span></span> <span
						style="padding-right: 10px; vertical-align: middle;">文件数：<span
						class="prop_val"><?php echo ($vo["filenum"]); ?></span></span> <a
						href="<?php echo ($vo["link"]); ?>">
						<img src="http://static.btcherry.com/images/link.png"
						style="vertical-align: middle;" alt="磁力链接" /> <span
						style="vertical-align: middle; margin-left: 2px;">磁力链接</span>
					</a>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
		
		
		
		<div class="r" style="max-width: 700px; ">
            <ul id="pagination" class="pagination-sm" style="width: 100%;">
            </ul>
        </div>
        <div style="clear: both;"></div>
		<?php if($pagenum > 10){?>
			<script type="text/javascript" src="/template/btcherry/js/jquery.twbsPagination.min.js"></script>
            <script type="text/javascript">
                //$(function () {
                    $("#pagination").twbsPagination({
                        totalPages: <?php echo $pagenum;?>,
                        visiblePages: 10,
                        startPage: <?php echo $p;?>,
                        href: '/word/<?php echo $_GET['word'];?>_{{number}}.html',
                        first: '首页', 
                        prev: '上一页', 
                        next: '下一页', 
                        last: '尾页'
                    });
                //});
            </script>
		<?php }?>
	</div>
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
 
				<li><a href="/cdn-cgi/l/email-protection#b2ded7d3c4dbdcd5cbc1f2d5dfd3dbde9cd1dddf">联系我们</a></li>
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