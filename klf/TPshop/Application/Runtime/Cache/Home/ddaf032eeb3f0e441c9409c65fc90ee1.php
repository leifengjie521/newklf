<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
	    <meta charset="utf-8"/>
	    <meta http-equiv="x-ua-compatible" content="ie=7" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	    <link rel="stylesheet" type="text/css" href="/TPshop/Public/Home/css/SignIn.css"/>
	</head>
    <body>
	    <!--头部-->
	    <div class="header">
			<!--头部居中-->
			<div class="header-center">
			    <div class="logo"><img src="/TPshop/Public/Home/images/pinklogo.jpg"/></div>
				<!--欢迎注册-->
				<div class="Welcome-to-register"><p>欢迎登录</p></div>
			</div>
		</div>
	    <!-- 身体-->
	    <div class="container">
		    <div class="container-center">
				<!--登录框盒子-->
				<div class="Sign-in-box">
				    <!--登录标题-->
					<div class="Sign-in-title">
					    <ul>
							<!--快速登录-->
							<li><a class="Quick-login" href="#">快速登录</a></li>
							<!--账户密码登录-->
							<li><a class="Account-login" href="">帐号密码登录</a></li>
						</ul>
					</div>
					<!--登入详细资料-->
					<form action="<?php echo U('public/logincheck');?>" method="post">
						<div class="Login-details-box">
							<div class="login-box">
								<div class="login-box-img"><img src="/TPshop/Public/Home/images/login-box-img1.jpg"/></div>
								<div class="login-text-K"><input class="login-text-box" type="text" name="name"/></div>
							</div>
							<div class="login-box">
								<div class="login-box-img"><img src="/TPshop/Public/Home/images/login-box-img2.jpg"/></div>
								<div class="login-text-K"><input class="login-text-box" type="password" name="pass"/></div>
							</div>
							<!--记住状态-->
							<div class="remember-number"><span><input class="xuan" type="checkbox"/>记住登录状态</span></div>
							<!--登录按钮-->
							<div class="login-button-K"><input class="login-button"  type="submit" value="登&nbsp;&nbsp;&nbsp;&nbsp;录"/></div>
							<!--忘记密码-->
							<div class="forget-password">
								<ul>
									<li class="fplione"><a href="<?php echo U('Public/register');?>">免费注册</a></li>
									<li class="fplitwo"><a href="#">忘记密码？</a></li>
								</ul>
							</div>
							<!--其他登录-->
							<div class="other-landing">
								<!--合作网站-->
								<div class="cooperative-website">
									<div class="cooperative-website-title"><p>使用合作网站账号登录</p></div>
									<div class="login-icon">
										<ul>
											<li><a href="#"><img src="/TPshop/Public/Home/images/login-icon1.jpg"/></a></li>
											<li><a href="#"><img src="/TPshop/Public/Home/images/login-icon2.jpg"/></a></li>
											<li><a href="#"><img src="/TPshop/Public/Home/images/login-icon3.jpg"/></a></li>
										</ul>
									</div>
								</div>
								<!--扫码登录-->
								<div class="scan-code">
									<div class="scan-code-title"><p>扫码登录</p></div>
									<div class="QR-code"><img src="/TPshop/Public/Home/images/QR-code.jpg"/></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	    <!-- 身体-->
	    <div class="footer">
		    <div class="fonter-center">
			    <ul>
				    <li><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">商家入驻</a> | <a href="#">营销中心</a> | <a href="#">友情链接</a> | <a href="#">销售联盟</a> | <a href="#">某某社区</a> | <a href="#">某某公益</a> | <a href="#">某某中心</a> | <a href="#">English Site</a> | <a href="#">Contact  Us</a> </li>
					<li><img src="/TPshop/Public/Home/images/renzheng.jpg"/></li>
				</ul>
			</div>
		</div>
	</body>
</html>