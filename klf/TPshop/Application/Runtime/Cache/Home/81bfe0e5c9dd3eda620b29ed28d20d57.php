<?php if (!defined('THINK_PATH')) exit();?>
   <!-- 加载头页面 -->
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
    <meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=7" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link rel="stylesheet" type="text/css" href="/TPshop/Public/home/css/shouye.css"/>
	<link rel="stylesheet" type="text/css" href="/TPshop/Public/home/css/ProductsList.css"/>
	<link rel="stylesheet" type="text/css" href="css/ProductDetails.css"/>
 </head>
 <body><!-- 头部-->
<div class="header">
    <!-- 紫色头部-->
	<div class="Zheader">
	   <!-- 紫色居中-->
	   <div class="zcenter">
			<!-- 收藏-->
	        <div class="HSC"><a href="#"><img src="/TPshop/Public/home/images/HSC.jpg" style="width:50px;"/></a></div>
			<!-- 导航-->
			<div class="H-nav">
				<?php if($_SESSION['name'] != ''): ?><p class="hello">您好<a href=""><?php echo ($_SESSION['name']); ?></a></p>
					<p class="mianfeizc"><a href="<?php echo U('Public/loginout');?>">退出</a></p>
				<?php else: ?>
					<p class="hello">您好！请<a href="<?php echo U('Public/login');?>">登陆</a> </p>
					<p class="mianfeizc"><a href="<?php echo U('Public/register');?>">免费注册</a></p><?php endif; ?>	
				
				<p class="MYdd"><a href="MyOrder.html">我的订单</a></p>
				<p class="MyESTTILOS"><a href="MemberCenter.html">我的ESTTILOS<img  class="bottom-jiantou"  src="/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
				<p class="ESTTILOSuser"><a href="MemberCenter.html">ESTILOS 会员</a></p>
				<p class="qiyeCG"><a href="#">企业采购</a></p>
				<p class="phoneESTTILOS"><a href="PhoneLogin.html"><img class="phone-s" src="/TPshop/Public/home/images/phone-S.jpg"/>手机ESTTILOS<img class="bottom-jiantou"  src="/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
				<p class="GZESTTILOS"><a href="#">关注ESTTILOS<img class="bottom-jiantou"  src="/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
				<p class="kffw"><a href="#">客服服务<img class="bottom-jiantou"  src="/TPshop/Public/home/images/xiaoxiajiantou.jpg"/><a></p>
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
			   <div class="logo" ><img src="/TPshop/Public/home/images/logo.jpg" style="width:300px;height:80px;"/></div>
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
				<div class="shopping-card"><a href="ShoppingCrat.html"><img src="/TPshop/Public/home/images/shopping-card.jpg"/></a></div>
			</div>
			<!-- 白色下半部分-->
			<div class="baiseB">
			    <!-- 全部商品-->
				<div class="all-commodity"><a href="ProductsList.html"><img src="/TPshop/Public/home/images/all-commodity.jpg"/></a></div>
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
	    <div class="container-center">
			    <div class="container-top-left">
				    <div class="fenlei">
					    <!--筛选以及返回首页-->
						<div class="saixuan">
						    <div class="fanhui"><p><a href="shouye.html">首页</a> > <a href="#">所有分类</a></P></div>
							<!--筛选条件-->
							<div class="screening"><a href="#"><img src="/TPshop/Public/home/images/screening.jpg"/></a></div>
							<div class="screening-z"><a href="#"><p>筛选条件</p></a></div>
						</div>
						<!--品牌、风格等筛选条件-->
						<div class="screenings-K">
						    <!--品牌-->	
							<div class="brand">
								<div class="brand-title">
								    <p>品牌：</p>
								</div>
								<!--品牌详细-->
								<div class="brand-detailed">
								    <ul class="brand-detailed-First-line">
									    <li><a href="#">哥弟</a></li>
										<li><a href="#">欧洲站</a></li>
										<li><a href="#">欧时力</a></li>
										<li><a href="#">ZARA</a></li> 
										<li><a href="#">00后</a></li>
										<li><a href="#">HSTYLE/韩都衣舍</a></li>
										<li><a href="#">茵曼</a></li>
										<li><a href="#">PEACEBIRD/太平鸟</a></li>
									
									</ul>
									<ul class="brand-detailed-Second-line">
									    <li><a href="#">优衣库</a></li>
										<li><a href="#">秋水伊人</a></li>
										<li><a href="#">La Chapelle/拉夏贝尔</a></li>
										<li><a href="#">彩黛妃</a></li>
										<li><a href="#">云依雪</a></li>
										<li><a href="#">芯园阁</a></li>
										<li><a href="#">朵以</a></li>
									</ul>
								</div>
								<!--品牌多选-->
								<div class="brand-choice">
								    <!--多选按钮-->
									<input class="Select-key" type="button" value="多选" />
								</div>
							</div>
							<!--风格-->
							<div class="style">
							    <div class="style-title">
								    <p>风格：</p>
								</div>
								<!--品牌详细-->
								<div class="style-detailed">
								    <ul>
									
									    <li><a href="#">休闲</a></li>
										<li><a href="#">韩系</a></li>
										<li><a href="#">性感</a></li>
										<li><a href="#">欧美</a></li>
										<li><a href="#">甜美</a></li>
										<li><a href="#">OL</a></li>
										<li><a href="#">复古</a></li>
										<li><a href="#">优雅</a></li>
										<li><a href="#">学院</a></li>
										<li><a href="#">文艺</a></li>
										<li><a href="#">民族</a></li>
									
									</ul>
								</div>
								<!--风格多选-->
								<div class="style-choice">
								    <!--多选按钮-->
									<input class="Select-key-style" type="button" value="多选" />
									<!--更多-->
									<div class="more"><a href="#"><p>更多</p></a></div>
								</div>
							</div>
							<!--款式、细节-->
							<div class="Details">
							    <div class="Details-title">
								    <p>服装款式细节：</p>
								</div>
								<!--品牌详细-->
								<div class="Details-detailed">
								    <ul>
									    <li><a href="#">拼接</a></li>
										<li><a href="#">拉链</a></li>
										<li><a href="#">印花</a></li>
										<li><a href="#">蝴蝶结</a></li>
										<li><a href="#">蕾丝</a></li>
										<li><a href="#">口袋</a></li>
										<li><a href="#">纽扣</a></li>
										<li><a href="#">褶皱</a></li>
										<li><a href="#">系带</a></li>
										<li><a href="#">抽褶</a></li>
									</ul>
								</div>
								<!--风格多选-->
								<div class="Details-choice">
								    <!--多选按钮-->
									<input class="Select-key-Details" type="button" value="多选" />
									<!--更多-->
									<div class="more-Details"><a href="#"><p>更多</p></a></div>
								</div>
							</div>
							<!--女装-->
							<div class="Ladies">
							    <div class="Ladies-title">
								    <p>女装：</p>
								</div>
								<!--女装详细-->
								<div class="Ladies-detailed">
								    <ul>
									    <li><a href="#">连衣裙</a></li>
										<li><a href="#">大码女装</a></li>
										<li><a href="#">T恤</a></li>
										<li><a href="#">针织衫</a></li>
										<li><a href="#">短外套</a></li>
										<li><a href="#">衬衫</a></li>
										<li><a href="#">卫衣/绒衫</a></li>
										<li><a href="#">蕾丝衫/雪纺衫</a></li>
									</ul>
								</div>
								<!--女装多选-->
								<div class="Ladies-choice">
								    <!--多选按钮-->
									<input class="Select-key-Ladies" type="button" value="多选" />
									<!--更多-->
									<div class="more-Ladies"><a href="#"><p>更多</p></a></div>
								</div>
							</div>
							<!--筛选条件-->
							<div class="Screening-conditions">
							    <div class="Screening-conditions-title">
								    <p>筛选条件：</p>
								</div>
								<div class="Screening-conditions-detailed">
								    <ul>
									    <li><a href="#"><p>选购热点<img src="/TPshop/Public/home/images/xiajiantou.jpg"/></p></a></li>
										<li><a href="#"><p>裙长<img src="/TPshop/Public/home/images/xiajiantou.jpg"/></p></a></li>
										<li><a href="#"><p>裤长<img src="/TPshop/Public/home/images/xiajiantou.jpg"/></p></a></li>
										<li><a href="#"><p>腰型<img src="/TPshop/Public/home/images/xiajiantou.jpg"/></p></a></li>
										<li><a href="#"><p>相关分类<img src="/TPshop/Public/home/images/xiajiantou.jpg"/></p></a></li>
									</ul>
								</div>
							</div>
							<!--更多选项 -->
							<div class="More-options">
							    <div class="More-options-K">
								    <a href="#"><p class="More-options-z">更多选项(尺码，颜色等)<img src="/TPshop/Public/home/images/grayxiajiantou.jpg"/></p></a>
								</div>
							</div>
						</div>
						<!--排序分页-->
						<div class="Sort-Paging">
						    <!--排序-->
							<div class="Sort">
							    <p class="Sort-z">排序：</p>
								<!--排序中的按钮-->
								<input  class="Comprehensive-sorting" type="button" value="综合排序"/>
								<input  class="two-fonts" type="button" value="销量"/>
								<input  class="two-fonts" type="button" value="价格"/>
								<input  class="three-fonts" type="button" value="评论数"/>
								<input  class="two-fonts" type="button" value="新品"/>
								<p class="Promotion"><input class="Promotional-options" type="checkbox"/>促销商品</p>
							</div>
							<!--分页-->
							<div class="Paging">
							    <!--页数-->
								<p class="Page-number"><span>1</span>/100</p>
								<!--上一页-->
								<div class="Previous-page"><a href="#"><p>上一页</p></a></div>
								<!--下一页-->
								<div class="Next-page"><a href="#"><p>下一页</p></a></div>
							</div>
						</div>
						<!--配送搜索-->
						<div class="Distribution-Search">
						    <div class="DistributionK">
							    <!--配送下拉框-->
							    <p class="Distribution">配送至：</p>
							    <select class="Distribution-Choice">
							    <option>南昌</option>
							    <option selected="selected">长沙</option>
							    </select>
							    <!--有货、货到付款多选-->
							    <p class="Library"><input class="Library-K" type="checkbox"/>仅显示有货</p>
							    <p class="Library"><input class="Library-K" type="checkbox"/>货到付款</p>
							</div>
							<!--小搜索-->
							<div class="small-Search">
							    <!-- 小搜索框-->
							    <input id="txt"  class="small-Search-K" type="text" />
								<!-- 小搜索按钮-->
							    <input class="small-Search-anniu" type="submit" value="确认" />
							</div>
							<!--店铺商品-->
							<div class="shop-Commodity">
							    <div class="shop"><a href="#"><p>店铺</p></a></div>
								<div class="Commodity"><a href="#"><p>商品</p></a></div>
							</div>
						</div>
					</div>
					<!--产品-->
					<div class="product">
						<ul>
							<?php if(is_array($listinfo)): foreach($listinfo as $key=>$vo): ?><li class="oneli">
									<ul>
										<a href="<?php echo U('Products/info');?>"><img src="/TPshop/Public/home/images/line-one.jpg"/></a>
										<p><span><?php echo ($vo["title"]); ?></span><?php echo ($vo["content"]); ?> <?php echo ($vo["size"]); ?></p>
										<em class="fourli"><?php echo ($vo["price"]); ?></em>
										<h1>长沙有货<a href="#">199条评论</a></h1>
									</ul>
								</li><?php endforeach; endif; ?>
							<!-- <li class="oneli">
								<ul>
									<a href="ProductDetails.html"><img src="/TPshop/Public/home/images/line-one.jpg"/></a>
									<p>雅旦﹒戈乐加长款 OL气质白领丽人冬装女装<span>羊毛呢大衣</span> 加大</p>
									<em class="fourli">¥318.00</em>
									<h1>长沙有货<a href="#">199条评论</a></h1>
								</ul>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="container-top-right">
				    <!--新品热卖-->
					<div class="New-hot "><p>新品热卖</p></div>
					<!--热卖产品-->
					<div class="hot-product">
						<!--热卖产品盒子定位-->
						<div class="hot-product-H">
						    <!--热卖产品1-->
							<div class="hot-product-one">
							    <ul>
								    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/hot-product-one.jpg"/></a></li>
									<li class="li-two">特价：<span>¥148.00</span></li>
									<li class="li-three"><a href="#">诗紊 2015秋冬韩版修身时</a></li>
									<li class="li-four"><a href="#">尚毛呢连衣裙中长款</a></li>
									<li class="li-five"><a href="#">已有<span>0</span>人评价</a></li>
								</ul>
							</div>
							<!--热卖产品2-->
							<div class="hot-product-two">
								<ul>
								    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/hot-product-two.jpg"/></a></li>
									<li class="li-two">特价：<span>¥148.00</span></li>
									<li class="li-three"><a href="#">诗紊 2015秋冬韩版修身时</a></li>
									<li class="li-four"><a href="#">尚毛呢连衣裙中长款</a></li>
									<li class="li-five"><a href="#">已有<span>0</span>人评价</a></li>
								</ul>
							</div>
							<!--热卖产品3-->
							<div class="hot-product-three">
								<ul>
								    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/hot-product-three.jpg"/></a></li>
									<li class="li-two">特价：<span>¥148.00</span></li>
									<li class="li-three"><a href="#">诗紊 2015秋冬韩版修身时</a></li>
									<li class="li-four"><a href="#">尚毛呢连衣裙中长款</a></li>
									<li class="li-five"><a href="#">已有<span>0</span>人评价</a></li>
								</ul>
							</div>
							<!--热卖产品4-->
							<div class="hot-product-four">
							    <ul>
								    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/hot-product-one.jpg"/></a></li>
									<li class="li-two">特价：<span>¥148.00</span></li>
									<li class="li-three"><a href="#">诗紊 2015秋冬韩版修身时</a></li>
									<li class="li-four"><a href="#">尚毛呢连衣裙中长款</a></li>
									<li class="li-five"><a href="#">已有<span>0</span>人评价</a></li>
								</ul>
							</div>
							<!--热卖产品5-->
							<div class="hot-product-five">
							    <ul>
								    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/hot-product-two.jpg"/></a></li>
									<li class="li-two">特价：<span>¥148.00</span></li>
									<li class="li-three"><a href="#">诗紊 2015秋冬韩版修身时</a></li>
									<li class="li-four"><a href="#">尚毛呢连衣裙中长款</a></li>
									<li class="li-five"><a href="#">已有<span>0</span>人评价</a></li>
								</ul>
							</div>
							<!--热卖产品6-->
							<div class="hot-product-six">
								<ul>
								    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/hot-product-three.jpg"/></a></li>
									<li class="li-two">特价：<span>¥148.00</span></li>
									<li class="li-three"><a href="#">诗紊 2015秋冬韩版修身时</a></li>
									<li class="li-four"><a href="#">尚毛呢连衣裙中长款</a></li>
									<li class="li-five"><a href="#">已有<span>0</span>人评价</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			
			<!--身体下半部分-->
			<div class="container-bottom">
			    <!-- 大分页盒子-->
				<div class="Big-Paging-H">
				    <ul>
					    <li class="Big-Paging-left"><a href="#"><p>上一页</p></a></li>
						<li class="s1"><a href="#"><p>1</p></a></li>
						<li class="s2"><a href="#"><p>2</p></a></li>
						<li class="s2"><a href="#"><p>3</p></a></li>
						<li class="s2"><a href="#"><p>4</p></a></li>
						<li class="s3">……</li>
						<li class="Big-Paging-right"><a href="#"><p>下一页</p></a></li>
					</ul>
					<h1>共100页  到第</h1>
					<input class="Paging-input" type="text" />
					<h2> 页</h2>
					<input class="Paging-Confirm" type="submit" value="确认" />
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<!-- 底部-->
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
							<li><img src="/TPshop/Public/home/images/map.jpg"/></li>
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
				<div class="renzheng"><a href="#"><img src="/TPshop/Public/home/images/renzheng.jpg"/></a></div>
		    </div>
		</div>
	</div>
	
 </body>
</html>