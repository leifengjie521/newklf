<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>临汾康乐富云支付平台</title>
<link href="/klf/TPshop/Public/dwz/themes/css/login.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="/klf/TPshop/Public/dwz/image/klf.jpg" media="screen" />
</head>

<body>
	<div id="login">
		<div id="login_header">
			<h1 class="login_logo">
				<!-- <a href="http://demo.dwzjs.com">后台管理平台（图片位置）</a> -->
				<p style="color:red;font-size:48px;">临汾康乐富云支付平台</p>
			</h1>
			<!-- <p style="color:red;font-size:48px;">临汾康乐富云支付平台</p> -->
			<div class="login_headerContent">
				<div class="navList">
					<!-- <ul>
						<li><a href="#">功能1</a></li>
						<li><a href="http://bbs.dwzjs.com">功能2</a></li>
						<li><a href="doc/dwz-user-guide.pdf" target="_blank">功能3</a></li>
					</ul> -->
				</div>
				<!-- <h2 class="login_title">登陆后台管理平台（图片位置）</h2> -->
			</div>
		</div>
		<div id="login_content" style="">
			<div class="loginForm">
				<form action="<?php echo U('Public/logincheck');?>" method="post">
					<center><div style="font-size:36px;color:red;"><b>用户登录</b></div></center><br /><br />
					<p>
						<label>用户名：</label>
						<input type="text" name="name" size="20" class="login_input" style="width:260px;height:24px;"/>
					</p>
					<p>
						<label>密码：</label>
						<input type="password" name="pass" size="20" class="login_input" style="width:260px;height:24px;"/>
					</p>
					<!-- <p>
						<label>验证码：</label>
						<input class="code" type="text" name="yzm" size="5" /><br /><br /><br />
						<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo U('Public/yzm');?>" alt="" width="75" height="24" onclick="this.src='<?php echo U('public/yzm');?>?rnd=' + Math.random();"/></span>
					</p> -->
					<div class="login_bar">
						<input class="sub" type="submit" value=" " />
					</div>
				</form>
			</div>
			<div class="login_banner"><img src="/klf/TPshop/Public/dwz/image/klf.jpg" style="width:280px;height:260px;"/><img src="/klf/TPshop/Public/dwz/image/klf_lf.jpg" style="width:300px;height:260px;"/></div>
			<div class="login_main">
				<div class="login_inner">
					<b><p style="font-size:20px;">使命：普及保健意识，改变健康理念</p></b>
					<b><p style="font-size:20px;">追求：比您更关爱您的健康</p></b>
					<b><p style="font-size:20px;">战略：健康多元化，健康智能化，健康国际化</p></b>
					<b><p style="font-size:20px;">理念：诚信，服务，质量</p></b>
					<b><p style="font-size:20px;">文化：关爱生命，呵护健康，服务大众</b></p>
					<b><p style="font-size:20px;">健康，快乐，富有</p></b>
					<b><p style="font-size:20px;">精神：敬业，发展民族企业；专业，造福人类健康</p></b>
					<b><p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></b>
				</div>
			</div>
		</div>
		<div id="login_footer" style="margin-left:300px;">
			Copyright &copy; 2017 山西临汾康乐富网络部研发. All Rights Reserved.
		</div>
	</div>
</body>
</html>