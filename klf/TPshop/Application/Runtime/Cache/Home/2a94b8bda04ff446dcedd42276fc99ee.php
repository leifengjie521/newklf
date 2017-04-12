<?php if (!defined('THINK_PATH')) exit();?>
 <!-- 加载头页面 -->
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
    <meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=7" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link rel="stylesheet" type="text/css" href="/klf/TPshop/Public/home/css/shouye.css"/>
	<link rel="stylesheet" type="text/css" href="/klf/TPshop/Public/home/css/ProductsList.css"/>
	<link rel="stylesheet" type="text/css" href="/klf/TPshop/Public/home/css/ProductDetails.css"/>
 </head>
 <body><!-- 头部-->
<div class="header">
    <!-- 紫色头部-->
	<div class="Zheader">
	   <!-- 紫色居中-->
	   <div class="zcenter">
			<!-- 收藏-->
	        <div class="HSC"><a href="#"><img src="/klf/TPshop/Public/home/images/HSC.jpg" style="width:50px;"/></a></div>
			<!-- 导航-->
			<div class="H-nav">
				<?php if($_SESSION['name'] != ''): ?><p class="hello">您好<a href=""><?php echo ($_SESSION['name']); ?></a></p>
					<p class="mianfeizc"><a href="<?php echo U('Public/loginout');?>">退出</a></p>
				<?php else: ?>
					<p class="hello">您好！请<a href="<?php echo U('Public/login');?>">登陆</a> </p>
					<p class="mianfeizc"><a href="<?php echo U('Public/register');?>">免费注册</a></p><?php endif; ?>	
				
				<p class="MYdd"><a href="MyOrder.html">我的订单</a></p>
				<p class="MyESTTILOS"><a href="MemberCenter.html">我的ESTTILOS<img  class="bottom-jiantou"  src="/klf/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
				<p class="ESTTILOSuser"><a href="MemberCenter.html">ESTILOS 会员</a></p>
				<p class="qiyeCG"><a href="#">企业采购</a></p>
				<p class="phoneESTTILOS"><a href="PhoneLogin.html"><img class="phone-s" src="/klf/TPshop/Public/home/images/phone-S.jpg"/>手机ESTTILOS<img class="bottom-jiantou"  src="/klf/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
				<p class="GZESTTILOS"><a href="#">关注ESTTILOS<img class="bottom-jiantou"  src="/klf/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
				<p class="kffw"><a href="#">客服服务<img class="bottom-jiantou"  src="/klf/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
				<p class="WZ-nav"><a href="#">网站导航</a></p>
			</div>
		</div>
	</div>
    <!-- 白色头部-->
    <div class="Bheader" style="height:196;">
		 <!-- 白色居中-->
	    <div class="bcenter">
			<!-- 白色上半部分-->
			<div class="baiseT">
			    <!--  logo-->
			   <div class="logo" ><img src="/klf/TPshop/Public/home/images/logo.jpg" style="width:300px;height:80px;"/></div>
			    <!--搜索-->
			    <div class="SSH">
				    <!-- 搜索框盒子-->
				    <div class="SSKH">
					    <!-- 搜索框-->
						<input class="sousuoK" type="text" />
						<!-- 搜索按钮-->
						<input class="anniu" type="submit" value="搜索" />
				    </div>
				    <!-- 热门搜索-->
				    <div class="hotSSH">
					    <ul class="hotH">
							<li><span class="hot-sousuo">热门搜索：</span><a href="#"  class="cooltj">潮流推荐</a></li>
							<li><a href="#">时尚尖货</a></li>
							<li><a href="#">新品上市</a></li>
							<li class="zuihou"><a href="#">百搭时装</a></li>
						</ul>
					</div>
			    </div>
				<div class="shopping-card"><a href="ShoppingCrat.html"><img src="/klf/TPshop/Public/home/images/shopping-card.jpg"/></a></div>
			</div>
			<!-- 白色下半部分-->
			<div class="baiseB">
			    <!-- 全部商品-->
				<div class="all-commodity"><a href="ProductsList.html"><img src="/klf/TPshop/Public/home/images/all-commodity.jpg"/></a></div>
				<!--大导航-->
				<div class="big-hav">
				    <ul>
						<?php if(is_array($nav)): foreach($nav as $key=>$vo): ?><li><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
					    <!-- <li><a href="shouye.html">首页</a></li>
						<li><a href="#">所有商品</a></li>
						<li><a href="#"  class="new-tuijian">新品推荐</a></li>
						<li><a href="#">一周保包邮专场</a></li>
						<li><a href="#">T恤/忖衫</a></li>
						<li><a href="#">连衣裙</a></li>
						<li><a href="#">蕾丝/雪纺</a></li>
						<li><a href="#">上装</a></li>
						<li><a href="#">下装</a></li>
						<li class="bhLast"><a href="#">商城同款</a></li> -->
					</ul>
			    </div>
			</div>
	    </div>
	</div>
</div>
	<!-- 身体-->
	<div class="container">
	    <div class="Cventer">
		    <div class="one">
			    <!--全部商品详细-->
				<div class="all-commodity-xx">
				    <!--全部商品最新推荐-->
					<div class="allZXTJ">
					    <ul>
						    <li  class="all-commodity-title">最新推荐</li>
							<li><a href="#">牛仔裤</a> | <a href="#">铅笔裤</a> | <a href="#">休闲裤</a> | <a href="#">小脚裤</a></li>
							<li><a href="#">毛呢外套</a> | <a href="#">针织开衫</a> | <a href="#">冬款毛衣</a></li>
							<li><a href="#">毛呢大衣</a> | <a href="#">羊绒大衣</a> | <a href="#">冬款毛衣</a></li>
							<li><a href="#">连衣裙冬</a> | <a href="#">针织连衣裙</a> | <a href="#">长袖连衣裙</a></li>
							<li class="all-last" ><a href="#">长袖T恤</a> | <a href="#">2015新羽绒</a> | <a href="#">套头针织衫</a></li>
						</ul>
					</div>
					<!--全部商品热门活动-->
					<div class="allRMHD">
					    <ul>
						    <li class="all-commodity-title">热门活动</li>
							<li><a href="#">女神秘密花园</a> | <a href="#">秋日女神</a> | <a href="#">原装设计</a></li>
							<li><a href="#">气质小西装</a> | <a href="#">率性牛仔</a> | <a href="#">潮流卫衣</a></li>
							<li><a href="#">潮冬靓衣</a> | <a href="#">毛呢大衣</a> | <a href="#">秋冬皮草</a></li>
							<li><a href="#">羊绒金秋专场</a> | <a href="#">色采购</a> | <a href="#">秋装连衣裙</a></li>
							<li class="all-last" ><a href="#">秋羽绒抢先看</a> | <a href="#">大牌云集秋上新</a></li>
						<ul>
					</div>
					<!--全部商品特色服饰-->
					<div class="allTSFS">
					    <ul>
						    <li class="all-commodity-title2">特色服饰</li>
							<li><a href="#">时尚套装</a> | <a href="#">运动套装</a></li>
							<li><a href="#">大码女装</a> | <a href="#">原创设计师</a></li>
							<li class="all-last" ><a href="#">唐装</a> | <a href="#">旗袍</a></li>
						<ul>
					</div>
				</div>
				<!-- banner-->
				<div class="banner"> 	
				<div id="banner_tabs" class="flexslider">
                    <ul class="slides">
                        <li>
                           <a title="" target="_blank" href="#">
                             
                             <img  class="banner1" alt=""  src="/klf/TPshop/Public/home/images/alpha.png">
                           </a>
                        </li>
                        <li>
                           <a title="" href="#">
                             <img  class="banner2" alt=""  src="/klf/TPshop/Public/home/images/alpha.png">
                           </a>
                        </li>
                        <li>
                          <a title="" href="#">
                             <img class="banner3"  alt="" src="/klf/TPshop/Public/home/images/alpha.png">
                          </a>
                        </li>
                    </ul>
                    <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
                        <li><a class="HDPone"></a></li>
                        <li><a class="HDPtwo"></a></li>
                        <li><a class="HDPthree"></a></li>
                    </ol>
				</div>
                <script src="/klf/TPshop/Public/home/js/jquery-1.10.2.min.js"></script>
                <script src="/klf/TPshop/Public/home/js/slider.js"></script>
                <script src="/klf/TPshop/Public/home/js/slider2.js"></script>
				</div>
				<!--banner右边-->
				<div class="WDSHCYGW">
				    <!--我的时尚穿衣顾问-->
					<div class="CYGW">
					    <ul>
						    <li class="myCYGW"><a href="#">我的时尚穿衣顾问</a></li>
							<li><a href="#">已有人测试</a></li>
						</ul>
					</div>
					<!-- 用户登入信息-->
					<div class="userK">
					    
						<?php if($_SESSION['name'] != ''): ?><div class="user">
								<div class="RTT"><a href="#"><img src="/klf/TPshop/Public/home/images/RTT.jpg" /></a></div>
									<div class="userxx">
										<p style="margin-top:0px;"><a href="#" style="color:#000000 !important;">HI</a></p>
										<p style="margin-bottom:0px;"><a href="#"><?php echo ($_SESSION['name']); ?></a></p>
									</div>	
								</div>
							<!-- <div class="denglu"><a href="<?php echo U('Public/loginout');?>">退出</a></div>	 -->
						<?php else: ?>
							<div class="user">
								<div class="RTT"><a href="#"><img src="/klf/TPshop/Public/home/images/RTT.jpg" /></a></div>
									<div class="userxx">
										<p style="margin-top:0px;"><a href="#" style="color:#000000 !important;">HI</a></p>
										<p style="margin-bottom:0px;"><a href="<?php echo U('Public/login');?>">亲你还未登陆哦!</a></p>
									</div>	
								</div>
							<div class="denglu"><a href="<?php echo U('Public/login');?>">马上登陆</a></div><?php endif; ?>
					</div>
					<!--推荐-->
					<div class="tuijian">
					    <p><a href="#">推荐这么穿更美</a></p>
						<div class="tuijiant"><a href="#"><img src="/klf/TPshop/Public/home/images/tuijiant.jpg"/></a></div>
					</div>
					<!-- 逛逛我的专属衣柜-->
					<div class="Guang"><a href="#" ><p class="GuangK">逛逛我的专属衣柜</p></a></div>
				</div>
			</div>
			<!--今日推荐-->
		    <div class="two">
				<ul>
				    <!--今日推荐 -->
					<li class="now-Recommend"><img src="/klf/TPshop/Public/home/images/now-Recommend.jpg"/></li>
					<!--今日推荐图片-->
					<li><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/now-Recommend-T1.jpg"/></a></li>
					<li><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/now-Recommend-T2.jpg"/></a></li>
					<li><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/now-Recommend-T3.jpg"/></a></li>
					<li class="now-Recommend-T-last"><a href="#"><img src="/klf/TPshop/Public/home/images/now-Recommend-T4.jpg"/></a></li>
				</ul>
			</div>
			<!--一周搭配-->
			<div class="three">
				<div class="zhou-title">
				    <span>一周搭配</span>
					<p>每周给你最新鲜的搭配秘笈</p>
				</div>
				<!--星期-->
				<div class="xingqi">
				    <div class="XQDW">
					    <div class="Mon"><a href="#"><p>星期一</p></a></div>
						<div class="Tues"><a href="#"><p class="grayweek">星期二</p></a></div>
						<div class="Wed"><a href="#"><p class="grayweek">星期三</p></a></div>
						<div class="Thur"><a href="#"><p class="grayweek">星期四</p></a></div>
						<div class="Fri"><a href="#"><p class="grayweek">星期五</p></a></div>
						<div class="Sat"><a href="#"><p class="grayweek">星期六</p></a></div>
						<div class="Sun"><a href="#"><p class="grayweek">星期天</p></a></div>
					</div>
				</div>
				<div class="three-big">
				    <!--左箭头-->
					<div class="three-big-left">
					    <a href="#"><img src="/klf/TPshop/Public/home/images/three-big-left.jpg"/></a>
					</div>
					<!-- 大图-->
					<div class="three-big-imp">
					    <a href="#"><img src="/klf/TPshop/Public/home/images/three-big-imp.png"/></a>
					</div>
					<!--推荐产品的5件-->
					<div class="five-commodity">
					    <div class="five-commodity-title">
						    <ul>
							    <li><a href="#" class="gaoleng">高冷女神范</a></li>
								<li><a href="#">复古小清新</a></li>
								<li><a href="#">十足女人味</a></li>
							</ul>
						</div>
						<div class="five-commoditys">
						    <div class="five-commoditys-left">
							    <div class="commoditys-two">
								    <div class="two-title">
									    <div class="two-title-number">2.</div>
										<div class="two-title-xx">
										    <ul>
											    <li class="two-title-xx-top"><a href="ProductDetails.html">立体百褶裙摆</a></li>
												<li class="two-title-xx-bottom"><a href="ProductDetails.html">魅力瘦身自然女神</a></li>
											</ul>
										</div>
									</div>
									<div class="two-img"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/two-img.png"/></a></div>
								</div>
								<div class="commoditys-one">
								    <div class="one-img"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/one-img.png"/></a></div>
									<div class="one-title">
									    <div class="one-title-number">1.</div>
										<div class="one-title-xx">
										    <ul>
											    <li class="one-title-xx-top"><a href="ProductDetails.html">时尚秋意草帽</a></li>
												<li class="one-title-xx-bottom"><a href="ProductDetails.html">新淡雅时尚女神</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="five-commoditys-center"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/five-commoditys-center.jpg"/></a></div>
							<div class="five-commoditys-right">
							    <div class="commoditys-three">
								    <div class="three-img"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/three-img.jpg"/></a></div>
									<div class="three-title">
									    <div class="three-title-number">3.</div>
										<div class="three-title-xx">
										    <ul>
											    <li class="three-title-xx-top"><a href="#">英伦复古外套</a></li>
												<li class="three-title-xx-bottom"><a href="#">时尚百搭女王范</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="commoditys-four">
								    <div class="four-img"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/four-img.jpg"/></a></div>
									<div class="four-title">
										<div class="four-title-number">4.</div>
										<div class="four-title-xx">
										    <ul>
												<li class="four-title-xx-top"><a href="#">气质端庄短靴</a></li>
												<li class="four-title-xx-bottom"><a href="#">无与伦比的女神个性</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hanfan">
					    <div class="FASHION-SHOW">
						    <div class="FASHION-SHOW-top"><p>ESTILOS<span>韩范FASHION SHOW</span></p></div>
							<div class="FASHION-SHOW-bottom">
							    <ul>
								    <li class="changsuo"><p>约会 逛街 聚会</p></li>
									<li class="xiangxi">白色清新帽、粉红色印花上衣、加上牛仔小短裙，外配上白色纯洁的包包，简单大方的搭配，清新纯色的优雅，既休闲又舒服，是外出约会、购物逛街、聚会游玩的最佳搭配。</li>
								</ul>
							</div>
						</div>
						<div class="hanfan-img"><a href="#"><img src="/klf/TPshop/Public/home/images/hanfan-img.jpg"/></a></div>
					</div>
					<!--右箭头-->
					<div class="three-big-right">
					    <a href="#"><img src="/klf/TPshop/Public/home/images/three-big-right.jpg"/></a>
					</div>
				</div>
			</div>
			<!--1F-->
		    <div class="four">
			    <div class="one-f"><p>1F<span>青春甜美</span></p></div>
				<div class="four-bottom">
				    <div class="yigui">
					    <div class="zise">
						    <ul class="one-f-one-list">
							    <li><a href="#">长袖连衣裙</a></li>
								<li><a href="#">针织连衣裙</a></li>
								<li><a href="#">气质小西装</a></li>
							</ul>
							<ul class="one-f-two-list">
							    <li><a href="#">牛仔裤</a></li>
								<li><a href="#">小脚裤</a></li>
								<li><a href="#">衬衫</a></li>
							</ul>
							<ul class="one-f-three-list">
							    <li><a href="#">运功套装</a></li>
								<li><a href="#">休闲西装</a></li>
								<li><a href="#">运功套装</a></li>
							</ul>
						</div>
						<div class="yigui-img"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/yigui-img-1.jpg"/></a></div>
						<div class="yigui-bottom">
						    <div class="yigui-bottom-left">
							    <p>衣柜</p>
								<span>—时尚少女系列</span>
							</div>
							<div class="yigui-bottom-right"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/yigui-bottom-right.jpg"/></a></div>
						</div>
					</div>
					<div class="big-img">
						<div class="big-img-one"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/big-img-1.jpg"/></a></div>
					    <div class="big-img-one-BJ"></div>
						<div class="big-img-one-XT">
						    <a href="#"><ul>
							    <li class="big-img-one-XT-one"><img class="left-heixian" src="/klf/TPshop/Public/home/images/left-heixian.jpg"/><p>ESTILOS<span>双十一预告</span></p><img class="right-heixian" src="/klf/TPshop/Public/home/images/left-heixian.jpg"/></li>
								<li class="big-img-one-XT-two"><p>定金付50抵100</p></li>
							</ul></a>
						</div>
					</div>
					<div class="small-img">
					    <div class="small-img-box-one">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/1F-1.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>气质小西装<span>￥299.00</span></p></div>
						</div>
						<div class="small-img-box-two">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/1F-2.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>时尚连衣裙<span>￥399.00</span></p></div>
						</div>
						<div class="small-img-box-three">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/1F-3.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>瘦身小脚裤<span>￥199.00</span></p></div>
						</div>
						<div class="small-img-box-four">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/1F-4.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>率性牛仔<span>￥199.00</span></p></div>
						</div>
					</div>
				</div>
			</div>
			<!--2F-->
			<div class="four">
			    <div class="one-f"><p>2F<span>气质淑女</span></p></div>
				<div class="four-bottom">
				    <div class="yigui">
					    <div class="zise">
						    <ul class="one-f-one-list">
							    <li><a href="#">毛呢大衣</a></li>
								<li><a href="#">冬款毛衣</a></li>
								<li><a href="#">连衣裙冬</a></li>
							</ul>
							<ul class="one-f-two-list">
							    <li><a href="#">针织开衫</a></li>
								<li><a href="#">羊绒大衣</a></li>
								<li><a href="#">率性牛仔</a></li>
							</ul>
							<ul class="one-f-three-list">
							    <li><a href="#">运功套装</a></li>
								<li><a href="#">休闲西装</a></li>
								<li><a href="#">运功套装</a></li>
							</ul>
						</div>
						<div class="yigui-img"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/yigui-img-2.jpg"/></a></div>
						<div class="yigui-bottom">
						    <div class="yigui-bottom-left">
							    <p>衣柜</p>
								<span>—气质淑女系列</span>
							</div>
							<div class="yigui-bottom-right"><a href="#"><img src="/klf/TPshop/Public/home/images/yigui-bottom-right.jpg"/></a></div>
						</div>
					</div>
					<div class="big-img">
						<div class="big-img-one"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/big-img-2.jpg"/></a></div>
					    <div class="big-img-one-BJ"></div>
						<div class="big-img-one-XT">
						    <a href="#"><ul>
							    <li class="big-img-one-XT-one"><img class="left-heixian" src="/klf/TPshop/Public/home/images/left-heixian.jpg"/><p>ESTILOS<span>官方旗航店</span></p><img class="right-heixian" src="/klf/TPshop/Public/home/images/left-heixian.jpg"/></li>
								<li class="big-img-two-XT-two"><p>2015<span>秋冬爆款发布</span></p></li>
							</ul></a>
						</div>
					</div>
					<div class="small-img">
					    <div class="small-img-box-one">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/2F-1.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>休闲西装<span>￥599.00</span></p></div>
						</div>
						<div class="small-img-box-two">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/2F-2.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>针织开衫<span>￥399.00</span></p></div>
						</div>
						<div class="small-img-box-three">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/2F-3.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>连衣裙冬<span>￥599.00</span></p></div>
						</div>
						<div class="small-img-box-four">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/2F-4.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>毛呢大衣<span>￥399.00</span></p></div>
						</div>
					</div>
				</div>
			</div>
			<!--3F-->
			<div class="four">
			    <div class="one-f"><p>3F<span>优雅名媛</span></p></div>
				<div class="four-bottom">
				    <div class="yigui">
					    <div class="zise">
						    <ul class="one-f-one-list">
							    <li><a href="#">毛呢大衣</a></li>
								<li><a href="#">冬款毛衣</a></li>
								<li><a href="#">连衣裙冬</a></li>
							</ul>
							<ul class="one-f-two-list">
							    <li><a href="#">针织开衫</a></li>
								<li><a href="#">羊绒大衣</a></li>
								<li><a href="#">率性牛仔</a></li>
							</ul>
							<ul class="one-f-three-list">
							    <li><a href="#">运功套装</a></li>
								<li><a href="#">休闲西装</a></li>
								<li><a href="#">运功套装</a></li>
							</ul>
						</div>
						<div class="yigui-img"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/yigui-img-3.jpg"/></a></div>
						<div class="yigui-bottom">
						    <div class="yigui-bottom-left">
							    <p>衣柜</p>
								<span>—优雅名媛系列</span>
							</div>
							<div class="yigui-bottom-right"><a href="#"><img src="/klf/TPshop/Public/home/images/yigui-bottom-right.jpg"/></a></div>
						</div>
					</div>
					<div class="big-img">
						<div class="big-img-one"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/big-img-3.jpg"/></a></div>
					    <div class="big-img-one-BJ"></div>
						<div class="big-img-one-XT">
						    <a href="#"><ul>
							    <li class="big-img-one-XT-one"><img class="left-heixian" src="/klf/TPshop/Public/home/images/left-heixian.jpg"/><p>ESTILOS<span>官方旗航店</span></p><img class="right-heixian" src="/klf/TPshop/Public/home/images/left-heixian.jpg"/></li>
								<li class="big-img-two-XT-two"><p>2015<span>秋冬爆款发布</span></p></li>
							</ul></a>
						</div>
					</div>
					<div class="small-img">
					    <div class="small-img-box-one">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/3F-1.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>时尚连衣裙<span>￥299.00</span></p></div>
						</div>
						<div class="small-img-box-two">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/3F-2.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>冬款大衣<span>￥399.00</span></p></div>
						</div>
						<div class="small-img-box-three">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/3F-3.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>时尚连衣裙<span>￥199.00</span></p></div>
						</div>
						<div class="small-img-box-four">
						    <div class="small-img-box"><a href="ProductDetails.html"><img src="/klf/TPshop/Public/home/images/3F-4.jpg"/></a></div>
							<div class="small-img-blackBJ"></div>
							<div class="small-img-whiteZ"><p>休闲套装<span>￥199.00</span></p></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 加载尾部页面 -->
	<!-- 底部-->
	<div class="footer">
	    <div class="footer-center">
		    <div class="gray-footer">
			    <div class="four-views">
					<ul>
					    <li><p>优<span>物有所值优质保障</span></p></li>
						<li><p>快<span>多仓直发闪电配送</span></p></li>
						<li><p>谦<span>物美价廉天天平价</span></p></li>
						<li><p>诚<span>诚信经营品牌保障</span></p></li>
					</ul>
				</div>
				<div class="five-views-district">
				    <div class="five-views">
					    <ul>
						    <li class="five-views-title">购物指南</li>
							<li><a href="#">购物流程</a></li>
							<li><a href="#">会员介绍</a></li>
							<li><a href="#">生活旅行/图狗</a></li>
							<li><a href="#">常见问题</a></li>
							<li><a href="#">联系客服</a></li>
						</ul>
						<ul>
						    <li class="five-views-title">配送方式</li>
							<li><a href="#">上门自提</a></li>
							<li><a href="#">211限时达</a></li>
							<li><a href="#">配送服务查询</a></li>
							<li><a href="#">配送费收取标准</a></li>
							<li><a href="#">海外配送</a></li>
						</ul>
						<ul>
						    <li class="five-views-title">支付方式</li>
							<li><a href="#">货到付款</a></li>
							<li><a href="#">售后服务</a></li>
							<li><a href="#">退款说明</a></li>
							<li><a href="#">返修/退换货</a></li>
							<li><a href="#">取消订单</a></li>
						</ul>
						<ul>
						    <li class="five-views-title">售后服务</li>
							<li><a href="#">货到付款</a></li>
							<li><a href="#">在线支付</a></li>
							<li><a href="#">分期付款</a></li>
							<li><a href="#">工行汇款</a></li>
							<li><a href="#">公司转账</a></li>
						</ul>
						<ul class="five-views-last">
						    <li class="five-views-title">特色服务</li>
							<li><a href="#">夺宝岛</a></li>
							<li><a href="#">DIY装机</a></li>
							<li><a href="#">茶叶E卡</a></li>
							<li><a href="#">延保服务</a></li>
							<li><a href="#">茶叶通信</a></li>
						</ul>
					</div>
					<div class="district">
					    <ul>
						    <li class="district-title">某公司自营覆盖区县</li>
							<li><img src="/klf/TPshop/Public/home/images/map.jpg"/></li>
							<li class="district-article">某公司已向全国2246个区县提供自营配送服务，支持货到付款和售后上门服务。</li>
							<li class="look"><a href="#">查看详情></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="purple-footer">
			    <div class="banquan">
				    <ul>
					    <li><a href="#">关于我们</a>  |  <a href="#">联系我们</a>  |  <a href="#">商家入驻</a>  |  <a href="#">营销中心</a>  |  <a href="#">友情链接</a>  |  <a href="#">销售联盟</a>  |  <a href="#">R2社区</a>  |  <a href="#">R2公益</a>  |  <a href="#">R2中心</a>  |  <a href="#">English Site</a>  |  <a href="#">Contact  Us</a>  </li>
						<li><a href="#">北京市公安局朝阳分局备案编号11010158988502659</a>  |  <a href="#">京ICP证0238859号</a>  |  <a href="#">互联网药品信息服务资格证编号（京）-经营性-2014-0008</a>  |  <a href="#">新出版京零 字第大1200007号</a></li>
						<li><a href="#">音像制品经营许可证苏宿批005号</a>  |  <a href="#">出版物经营许可证编号新出发（苏）批字第N-012号</a>  |  <a href="#">互联网出版许可证编号新出征（京）字150号</a></li>
						<li><a href="#">网路文化经营许可证证京网文 [2014]2148-384号</a>  <a href="#">违法和不良信息举报电话：4006561155</a>  <a href="#">Copyright * 2004-2015</a>  <a href="#">某某MD.com版权所有</a></li>
						<li>多迪旗下网站: <a href="#">360TOP</a>  <a href="#">拍拍网</a>  <a href="#">支付宝在线</a></li>
					</ul>
				</div>
				<div class="renzheng"><a href="#"><img src="/klf/TPshop/Public/home/images/renzheng.jpg"/></a></div>
		    </div>
		</div>
	</div>
 </body>
</html>