<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>康乐富支付后台功能</title>

<link href="/klf/TPshop/Public/dwz/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/klf/TPshop/Public/dwz/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/klf/TPshop/Public/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="/klf/TPshop/Public/dwz/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="shortcut icon" type="image/x-icon" href="/klf/TPshop/Public/dwz/image/klf.jpg" media="screen" />

<!--[if IE]>
<link href="/klf/TPshop/Public/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->

<!--[if lt IE 9]><script src="/klf/TPshop/Public/dwz/js/speedup.js" type="text/javascript"></script><script src="/klf/TPshop/Public/dwz/js/jquery-1.11.3.min.js" type="text/javascript"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="/klf/TPshop/Public/dwz/js/jquery-2.1.4.min.js" type="text/javascript"></script><!--<![endif]-->

<script src="/klf/TPshop/Public/dwz/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/jquery.validate.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/xheditor/xheditor-1.2.2.min.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/xheditor/xheditor_lang/zh-cn.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/uploadify/scripts/jquery.uploadify.js" type="text/javascript"></script>

<!-- svg图表  supports Firefox 3.0+, Safari 3.0+, Chrome 5.0+, Opera 9.5+ and Internet Explorer 6.0+ -->
<script type="text/javascript" src="/klf/TPshop/Public/dwz/chart/raphael.js"></script>
<script type="text/javascript" src="/klf/TPshop/Public/dwz/chart/g.raphael.js"></script>
<script type="text/javascript" src="/klf/TPshop/Public/dwz/chart/g.bar.js"></script>
<script type="text/javascript" src="/klf/TPshop/Public/dwz/chart/g.line.js"></script>
<script type="text/javascript" src="/klf/TPshop/Public/dwz/chart/g.pie.js"></script>
<script type="text/javascript" src="/klf/TPshop/Public/dwz/chart/g.dot.js"></script>

<script src="/klf/TPshop/Public/dwz/js/dwz.core.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.util.date.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.validate.method.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.barDrag.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.drag.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.tree.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.accordion.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.ui.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.theme.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.switchEnv.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.alertMsg.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.contextmenu.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.navTab.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.tab.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.resize.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.dialog.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.dialogDrag.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.sortDrag.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.cssTable.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.stable.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.taskBar.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.ajax.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.pagination.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.database.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.datepicker.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.effects.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.panel.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.checkbox.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.history.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.combox.js" type="text/javascript"></script>
<script src="/klf/TPshop/Public/dwz/js/dwz.print.js" type="text/javascript"></script>



<script src="/klf/TPshop/Public/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	DWZ.init("/klf/TPshop/Public/dwz/dwz.frag.xml", {
		loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"login.html",	// 跳到登录页面
		//弹窗状态
		statusCode:{ok:1, error:0}, //【可选】
		//分页
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		//弹窗状态
		keys: {statusCode:"status", message:"info"}, //【可选】
		ui:{hideMode:'offsets'}, //【可选】hideMode:navTab组件切换的隐藏方式，支持的值有’display’，’offsets’负数偏移位置的值，默认值为’display’
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"/klf/TPshop/Public/dwz/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
});
</script>
</head>

<body>
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<div style="color:#A20000;font-weight:bold;font-family:'楷体';font-size:24px;padding-top:10px;padding-left:5px;"><img style="width:50px;height:30px;"src="/klf/TPshop/Public/dwz/image/klf.jpg" alt="" />临汾康乐富健康管家云支付后台管理系统</div>
				<ul class="nav">
					
					<li><a href="#" target="_blank">您好<?php echo ($data); ?></a></li>
					<!-- <li id="switchEnvBox"><a href="javascript:">（<span>北京</span>）切换城市</a>
						<ul>
							<li><a href="sidebar_1.html">北京</a></li>
							<li><a href="sidebar_2.html">上海</a></li>
							<li><a href="sidebar_2.html">南京</a></li>
							<li><a href="sidebar_2.html">深圳</a></li>
							<li><a href="sidebar_2.html">广州</a></li>
							<li><a href="sidebar_2.html">天津</a></li>
							<li><a href="sidebar_2.html">杭州</a></li>
						</ul>
					</li> -->
					<li><a href="<?php echo U('Public/loginout');?>">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="purple"><div class="selected">紫色</div></li>
					<li theme="default"><div>蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<!-- <li theme="red"><div>红色</div></li> -->
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>

			<!-- navMenu -->
			
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

				<div class="accordion" fillSpace="sidebar">
					<div class="accordionHeader">
						<h2><span>Folder</span>后台管理</h2>
					</div>
					<!-- 左侧导航栏 界面组件start -->
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<?php if($data == 001): ?><li><a>体检中心</a>
								<ul>
									<li><a href="<?php echo U('Tijianone/lists');?>" target="navTab" rel="main">体检项目</a></li>
									<li><a href="<?php echo U('Tijiantwo/lists');?>" target="navTab" rel="main">体检收款明细</a></li>
								</ul>
							</li>
							<?php elseif($data == 002): ?>
							<li><a>健身中心</a>
								<ul>
									<li><a href="<?php echo U('Jiankang/lists');?>" target="navTab" rel="main">健身项目</a></li>
									<li><a href="<?php echo U('Jsmingxi/lists');?>" target="navTab" rel="main">健身收款明细</a></li>
								</ul>
							</li>
							<?php elseif($data == 003): ?>
							<li><a>养生中心</a>
								<ul>
									<li><a href="<?php echo U('Yangsheng/lists');?>" target="navTab" rel="main">养生项目</a></li>
									<li><a href="<?php echo U('Ysmingxi/lists');?>" target="navTab" rel="main">养生收款明细</a></li>
								</ul>
							</li>
							<?php elseif($data == 004): ?>
							<li><a>财务系统</a>
								<ul>
									<li><a href="<?php echo U('caiwu/lists');?>" target="navTab" rel="main">财务收款明细</a></li>
								</ul>
							</li>
							<?php elseif($data == 999999): ?>
							<li><a>科室与服务项目</a>
								<ul>
									<li><a href="<?php echo U('keshi/lists');?>" target="navTab" rel="main">科室名称</a></li>
									<li><a href="<?php echo U('fuwu/lists');?>" target="navTab" rel="main">服务名称</a></li>
								</ul>
							</li>
							<li><a>体检中心</a>
								<ul>
									<!-- <li><a href="<?php echo U('Tijianone/lists');?>" target="navTab" rel="main">体检项目</a></li> -->
									<li><a href="<?php echo U('Tijiantwo/lists');?>" target="navTab" rel="main">体检收款明细</a></li>
								</ul>
							</li>
							
							<li><a>健身中心</a>
								<ul>
									<!-- <li><a href="<?php echo U('Jiankang/lists');?>" target="navTab" rel="main">健身项目</a></li> -->
									<li><a href="<?php echo U('Jsmingxi/lists');?>" target="navTab" rel="main">健身收款明细</a></li>
								</ul>
							</li>
							
							<li><a>养生中心</a>
								<ul>
									<!-- <li><a href="<?php echo U('Yangsheng/lists');?>" target="navTab" rel="main">养生项目</a></li> -->
									<li><a href="<?php echo U('Ysmingxi/lists');?>" target="navTab" rel="main">养生收款明细</a></li>
								</ul>
							</li>
							<li><a>财务系统</a>
								<ul>
									<li><a href="<?php echo U('caiwu/lists');?>" target="navTab" rel="main">财务收款明细</a></li>
								</ul>
							</li><?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<!-- 右侧上长框 -->
						</div>
						<div class="pageFormContent" layoutH="80" style="margin-right:230px">
							<!-- 右侧大框 -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">Copyright &copy; 2010 <a href="demo_page2.html" target="dialog">DWZ团队</a> 京ICP备15053290号-2</div>

</body>
</html>