<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="/template/admin/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/template/admin/js/jquery.js"></script>
<script type="text/javascript" src="/template/admin/js/system.js"></script>
<script type="text/javascript" charset="utf-8" src="/template/admin/js/keditor/kindeditor-min.js"></script>
<script type="text/javascript" charset="utf-8" src="/template/admin/js/keditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/template/admin/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="/template/admin/js/artdialog/plugins/iframeTools.js"></script>
</head>
<body class="body-main">


<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">系统设置</a></li>
</ul>
<div id="admin_right_b">
<script>
$(function() {
	$("#web_close_true").click(function(){
		$("#web_close_reason").show();
	});
	$("#web_close_false").click(function(){
		$("#web_close_reason").hide();
	});
	$("#dosave").click(function(){
		showDialog();
		$.ajax({
			type:"post",
			url:"?m=config&a=update&_t="+Math.random()*10,
			data:$("form").serialize(),
			dataType:'json',
			timeout:28000,
			global:false,
			success:function(data){
				if(data.status==1){
					showAlert('success','恭喜你，修改成功');
				}else{
					showAlert('error',data.info);
				}
			}
		});
	 return false;
	});
});
</script>
<form method="post">
  <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" id="config0">
    <tr class="tdbg">
      <td width="150" align="right">网站名称：</td>
      <td class="tdbg"><input name="con[web_name]" type="text" class="input" value="<?php echo ($config['web_name']); ?>" size="40"></td>
    </tr>
	<tr class="tdbg">
      <td align="right">首页长标题：</td>
      <td class="tdbg"><input name="con[web_seo_name]" type="text" class="input" value="<?php echo ($config['web_seo_name']); ?>" size="40">　<span>首页长标题，显示在网站名称后面</span></td>
    </tr>
    <tr class="tdbg">
      <td align="right">网站地址：</td>
      <td><input name="con[web_url]" type="text" class="input" value="<?php echo ($config['web_url']); ?>" size="40">　<span>你的网址,以<font color=red>http://</font>开头,<font color=red>/</font>结尾</font></span></td>
    </tr>

	<!-- <tr class="tdbg">
      <td align="right">淘宝客PID：</td>
      <td><input name="con[alimama_pid]" type="text" class="input" value="" size="40">　<span>阿里妈妈的淘宝客PID , 如:<font color=red>mm_12345678_x_x</font></span></td>
    </tr> -->

	<tr class="tdbg">
      <td align="right">首页关键字：</td>
      <td><input name="con[web_keywords]" type="text" class="input" value="<?php echo ($config['web_keywords']); ?>" style="width:440px">　<span>首页关键字keywords,以半角逗号隔开</span></td>
    </tr>

	<tr class="tdbg">
      <td align="right">首页网站描述：</td>
      <td><textarea name="con[web_description]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['web_description']); ?></textarea></td>
    </tr>
	
	<tr class="tdbg">
      <td align="right">搜 索 热 词：</td>
      <td><input name="con[hotkw]" type="text" class="input" value="<?php echo ($config['hotkw']); ?>" style="width:440px">　<span>首页搜索热词,以半角逗号隔开</span></td>
    </tr>

    <tr class="tdbg">
      <td align="right">网站备案号：</td>
      <td class="tdbg"><input name="con[web_beian]" type="text" class="input" value="<?php echo ($config['web_beian']); ?>" size="40"></td>
    </tr>

	<tr class="tdbg">
      <td align="right">统计代码：</td>
      <td><textarea name="con[web_tongji]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['web_tongji']); ?></textarea></td>
    </tr>
   <tr class="tdbg">
      <td align="right">生成静态文件：</td>
      <td><select name="con[mark_html]">　
	  <option value="1" <?php if(($config['mark_html']) == "1"): ?>selected<?php endif; ?>>开启</option>
	   <option value="0" <?php if(($config['mark_html']) == "0"): ?>selected<?php endif; ?>>关闭</option>
	  </select><span>开启后系统将会根据访客访问的页面进行生成页面的静态文件</span></td>
    </tr>
	

	<tr class="tdbg">
      <td align="right">默认模板：</td>
      <td><select name="con[DEFAULT_THEME]">
	    <?php if(is_array($temp)): $i = 0; $__LIST__ = $temp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo); ?>" <?php if(($config['DEFAULT_THEME']) == $vo): ?>selected<?php endif; ?>><?php echo ($vo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	  	</select>　<span>位于template文件夹下</span>      </td>
    </tr>

	


	</table>

	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
    <tr class="tdbg">
	  <td width="130" align="center" class="tdbg">&nbsp;</td>
      <td><div class="aui_buttons"  style="text-align:left;"><button type="submit" id="dosave" class="aui_state_highlight">保存设置</button> <button type="reset" class="aui_state_highlight">重置</button></div></td>
    </tr>
	</table>
	</form>
<div class="runtime"></div>  
</div>
</body>
</html>