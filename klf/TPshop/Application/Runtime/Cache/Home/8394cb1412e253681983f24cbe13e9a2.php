<?php if (!defined('THINK_PATH')) exit();?><!-- 加载头页面 -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
    <meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=7" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link rel="stylesheet" type="text/css" href="/TPshop/Public/home/css/shouye.css"/>
	<link rel="stylesheet" type="text/css" href="/TPshop/Public/home/css/ProductsList.css"/>
	<link rel="stylesheet" type="text/css" href="/TPshop/Public/home/css/ProductDetails.css"/>
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
		    <!--产品信息-->
			<div class="Product-information">
			    <!--返回-->
				<div class="Return">
				    <p><a href="shouye.html">首页</a><span>></span><a href="#">服装鞋帽</a><span>></span><a href="#">女装</a><span>></span><a href="#">连衣裙</a><span>></span>ESTILOS2015秋装新款女装印花瘦身连衣裙HH152</p>
				</div>
				<div class="Product-information-box">
					<!--图片缩放-->
					<div class="Product-information-left">
					    <!--大图-->
						<div class="Product-big-image"><img src="/TPshop/Public/home/images/Product-big-image.jpg"/></div>
						<!--小图-->
						<div class="small-images-box">
						    <ul>
							    <li class="jiantou"><a href="#"><</a></li>
								<li><a href="#" class="small-images-one"><img src="/TPshop/Public/home/images/xiaotu1.jpg"/></a></li>
								<li><a href="#" class="small-images-two"><img src="/TPshop/Public/home/images/xiaotu2.jpg"/></a></li>
								<li><a href="#" class="small-images-two"><img src="/TPshop/Public/home/images/xiaotu3.jpg"/></a></li>
								<li><a href="#" class="small-images-two"><img src="/TPshop/Public/home/images/xiaotu4.jpg"/></a></li>
								<li><a href="#" class="small-images-two"><img src="/TPshop/Public/home/images/xiaotu5.jpg"/></a></li>
								<li class="jiantou"><a href="#">></a></li>
							</ul>
						</div>
						<p>商品编号：A62134718<span><a class="fenxiang" href="#"><img src="/TPshop/Public/home/images/fenxiang.jpg"/>分享</a><a href="#"><img src="/TPshop/Public/home/images/guanzhu.jpg"/>关注</a></span></p>
					</div>
					<!--图片缩放右边-->
					<div class="Product-information-right">
					    <!--商品标题-->
						<div class="Commodity-title">
						    <ul>
							    <li class="title-one">estilos2015秋装新款女装印花瘦身连衣裙hh152</li>
								<li class="title-two">双十一秋冬热卖狂欢节 热卖爆品全线5折新降价 秋冬特惠低至69元 赠品抢不停！</li>
							</ul>
						</div>
						<!--商品购买-->
						<div class="Price-shopping">
							<!--购买-->
							<div class="shopping">
							    <div class="Production-test-price">
								    <ul class="Production-test-price-ul-one">
									    <li>参考价</li>
										<li>易购价</li>
									</ul>
									<ul class="Production-test-price-ul-two">
									    <li>￥Undefined</li>
										<li class="Production-test-price-ul-two-li-two">￥<span>148.00<span></li>
										<li><p><img src="/TPshop/Public/home/images/baisexing.jpg"/>4.2分 共有5条评论</p></li>
									</ul>
								</div>
								<!--尺码颜色-->
								<div class="Size-color">
								    <div class="Size-color-title">
									    <ul class="Size-color-ul-one">
									        <li class="Size-color-ul-one-li-one">送至</li>
										    <li>服务</li>
										    <li class="Size-color-ul-one-li-three">颜色</li>
										    <li>尺码</li>
									    </ul>
									</div>
									<!--购买详情-->
									<div class="Purchase-details">
										<!--送至-->
										<div class="Send-to"><select><option>江西 南昌 青山湖区</option><option selected="selected">湖南 长沙 芙蓉区</option></select></div>
										<!--服务-->
										<div class="Service">
										    <div class="Service-one"><p>由“ESTILOS衣柜旗舰店”直接销售，并提供售后服务<a href="#"><img src="/TPshop/Public/home/images/aliww.jpg"/>和我联系</a></p></div>
											<div class="Service-two">
											    <div class="ren"><a href="#"><div class="red-d">任</div>任性付</a></div>
												<div class="Staging"><a href="#"><img src="/TPshop/Public/home/images/Staging.jpg"/> <p>分期付款</p></a></div>
												<div class="Quality-goods"><a href="#"><div class="red-d">保</div>保证正品</a></div>
											</div>
										</div>
										<!--颜色-->
										<div class="color-img"><a href="#"><img src="/TPshop/Public/home/images/color-img.jpg"/></a></div>
										<!--尺码-->
										<div class="size-k">
										    <div class="size-s"><a href="#">M</a></div>
											<div class="size-s"><a href="#">S</a></div>
											<div class="size-s"><a href="#">L</a></div>
										</div>
									</div>
								</div>
								<!-- 购买、加入购物车、收藏-->
								<div class="Buy-Collection">
								    <!--立即购买-->
									<input class="Buy" type="button" value="立即购买" />
									<!--加入购物-->
									<input class="Join" type="button" value="加入购物车" />
									<!--收藏-->
									<input class="Collection" type="button" value="收藏" />
								</div>
							</div>
							<!--同类商品-->
							<div class="Similar">
							    <div class="qihangdian-k">
								    <ul>
									    <li class="qihangdian-k-li-one">ESTILOS 商家</li>
										<li class="qihangdian-k-li-two">正品保障，售后无忧</li>
										<li class="qihangdian-k-li-three">商家：<a href="#">ESTILOS旗舰店</a></li>
										<li>商家满意度<span>与同行业相比</span></li>
										<li>商家评分：4.74分<span><img src="/TPshop/Public/home/images/huangjiantou.jpg"/>36.92%</span></li>
										<li>服务态度：4.87分<span><img src="/TPshop/Public/home/images/huangjiantou.jpg"/>36.92%</span></li>
										<li>物流速度：4.91分<span><img src="/TPshop/Public/home/images/huangjiantou.jpg"/>36.92%</span></li>
									</ul>
								</div>
								<div class="Company-phone">
								    <ul class="Company-phone-ul-one">
									    <li>公司：</li>
										<li class="Company-phone-ul-one-li-two">TEL：</li>
									</ul>
									<ul class="Company-phone-ul-two">
									    <li>长沙ESTILOS电商集团</li>
										<li class="Company-phone-ul-two-li-two">有限公司</li>
										<li>400-8862</li>
									</ul>
								</div>
								<!--进入店铺-->
								<div class="in-shop">
								    <!--进入店铺-->
									<input class="in" type="button" value="进入店铺" />
									<!--收藏店铺-->
									<input class="collection-shop" type="button" value="收藏店铺" />
								
								</div>
								<!--同类推荐-->
								<div class="Similar-recommendation">
								    <ul>
									    <li class="Similar-recommendation-lione">同类推荐</li>
										<li class="Similar-recommendation-litwo"><a href="#">换一组</a></li>
									</ul>
								</div>
								<!--同类推荐产品信息-->
								<div class="Similar-goods">
								    <div class="Similar-goods-img"><a href="#"><img src="/TPshop/Public/home/images/Similar-goods-img.jpg"/></a></div>
									<div class="Similar-goods-xx">
										<ul>
									        <li><a href="#">针织连衣裙 2015秋季新款女装韩版OL通勤</a><li>
										    <li class="Similar-goods-xx-last">￥188.0<li>
									    </ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--产品详情-->
			<div class="Product-details">
				<!-- 产品详细左边-->
				<div class="Product-details-left">
				    <div class="like-it-friend"><p>喜欢它的朋友还喜欢</p></div>
					<div class="like-it-friend-Product">
					    <div class="like-it-friend-product">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/like1.jpg"/></a></li>
								<li class="like-it-li">ESTILOS 2015秋装韩版时尚新品青年连帽显瘦纯棉团中长款卫衣DL5007 藏蓝色 M<span>￥148.00</span></li>
							</ul>
						</div>
						<div class="like-it-friend-product">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/like1.jpg"/></a></li>
								<li class="like-it-li">ESTILOS 2015秋装韩版时尚新品青年连帽显瘦纯棉团中长款卫衣DL5007 藏蓝色 M<span>￥148.00</span></li>
							</ul>
						</div>
						<div class="like-it-friend-product">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/like1.jpg"/></a></li>
								<li class="like-it-li">ESTILOS 2015秋装韩版时尚新品青年连帽显瘦纯棉团中长款卫衣DL5007 藏蓝色 M<span>￥148.00</span></li>
							</ul>
						</div>
						<div class="like-it-friend-product">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/like1.jpg"/></a></li>
								<li class="like-it-li">ESTILOS 2015秋装韩版时尚新品青年连帽显瘦纯棉团中长款卫衣DL5007 藏蓝色 M<span>￥148.00</span></li>
							</ul>
						</div>
						<div class="like-it-friend-product">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/like1.jpg"/></a></li>
								<li class="like-it-li">ESTILOS 2015秋装韩版时尚新品青年连帽显瘦纯棉团中长款卫衣DL5007 藏蓝色 M<span>￥148.00</span></li>
							</ul>
						</div>
						<div class="like-it-friend-product">
					        <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/like1.jpg"/></a></li>
								<li class="like-it-li">ESTILOS 2015秋装韩版时尚新品青年连帽显瘦纯棉团中长款卫衣DL5007 藏蓝色 M<span>￥148.00</span></li>
							</ul>
						</div>
						<div class="like-it-friend-product">
						    <ul>
							    <li><a href="#"><img src="/TPshop/Public/home/images/like1.jpg"/></a></li>
								<li class="like-it-li">ESTILOS 2015秋装韩版时尚新品青年连帽显瘦纯棉团中长款卫衣DL5007 藏蓝色 M<span>￥148.00</span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- 产品详细右边边-->
				<div class="Product-details-right">
				    <!--产品介绍信息的盒子-->
					<div class="Commodity-Introduction">
					    <div class="Commodity-Introduction-title">
						    <div class="Commodity-Introduction-small"><a href="#"><p>商品详情</p></a></div>
							<div class="Commodity-Introduction-title-Other">
							    <div class="title-Other">
								    <ul>
									    <li><a href="#" class="title-Other-li-a">累计评价</a></li>
										<li><img src="/TPshop/Public/home/images/blue-d.jpg"/><a href="#" class="title-Other-li-a">月成交记录</a></li>
										<li><img src="/TPshop/Public/home/images/blue-d.jpg"/><a href="#" class="title-Other-li-a">售后服务</a></li>
										<li><img src="/TPshop/Public/home/images/blue-d.jpg"/><a href="#" class="title-Other-li-a">客户端首单  满100送50</a></li>
									</ul>
								</div>
								<!--加入购物车2-->
								<div class="Join-in-shopping"><a href="#"><p>加入购物车</p></a></div>
							</div>
						</div>
						<!--参数-->
						<div class="Product-parameters">
						    <ul>
							    <li>商品名称：ESTILOS2015秋冬装新</li>
								<li>商品毛重：1.1KG</li>
								<li>厚度：适中 </li>
								<li>使用年龄：20-28周岁</li>
								<li>适用类型：职场 </li>
								<li>成分分量：81%（含）-90%</li>
								<li>衣长：中长款</li>
							</ul>
							<ul>
							    <li>商品编号：124456566</li>
								<li>商品产地：中国大陆</li>
								<li>领型：翻领 </li>
								<li>图案：纯色</li>
								<li>尺码：XL </li>
								<li>面料：粗话呢</li>
								<li>里料图案：纯色</li>
							</ul>
							<ul>
							    <li>店铺： ESTILOS旗舰店</li>
								<li>货号：2012</li>
								<li>颜色：多色/渐变色 </li>
								<li>里料材质：涤纶</li>
								<li>版型：直筒型 </li>
								<li>袖长：长袖</li>
								<li>上市时间：2015年秋季</li>
							</ul>
							<ul>
							    <li>上架时间：2015-09-26 11：06：08 </li>
								<li>风格：日韩</li>
								<li>材质：毛呢大衣料 </li>
								<li>服装版型：修身</li>
								<li>流行元素：其他</li>
								<li>衣门襟：单排扣</li>
							</ul>
						</div>
					</div>
					<!--产品图片-->
					<div class="Product-details-big-img"><img src="/TPshop/Public/home/images/Product-details-big-img.jpg"/></div>
					<!--累计评论-->
					<div class="Cumulative-product-theory">
					    <!-- 累计评论标题-->
						<div class="Cumulative-product-theory-title"><p>累计品论</p></div>
						<!-- 用户描述盒子-->
						<div class="Description-box">
						    <!--描述相符-->
							<div class="Match">
							    <ul>
								    <li><p>与描述相符</p></li>
									<li><img src="/TPshop/Public/home/images/Match-img.jpg"/></li>
								</ul>
							</div>
							<!--大家描述-->
							<div class="We-describe">
								<p>大<br/>家<br/>都<br/>写<br/>到<br/>的</p>
								<ul>
								    <li>质量很好（50）</li>
									<li>质量很好（50）</li>
									<li>质量很好（50）</li>
								</ul>
							</div>
						</div>
						<!--全部评价-->
							<div class="All-evaluation">
							    <div class="All-e"><a href="#"><p>全部评价（320）</p></a></div>
								<div class="other-evaluation">
								    <ul>
									    <li><a href="#">好评（311）</a></li>
										<li><a href="#">中评（8）</a></li>
										<li><a href="#">差评（1）</a></li>
									</ul>
								</div>
							</div>
					</div>
					<!--评价心得-->
					<div class="Evaluation-experience">
					    <div class="experience-one">
						    <div class="Evaluation-experience-title">
							    <ul>
								    <li class="experience-lione">评价心得</li>
									<li class="experience-litwo">顾客满意度</li>
									<li class="experience-lithree">购买信息</li>
									<li class="experience-lifour">评论者</li>
								</ul>
							</div>
							<div class="Detailed-evaluation-one">
								<!--评论心得-->
								<div class="Detailed-evaluations">
								    <ul>
									    <li class="Delione">面料和颜色没什么变化旧衣服有点偏小  2015-10-15  12：34</li>
										<li class="Delitwo"><a href="#">回复<span>（0）</span></a></li>
										<li class="Delithree"><a href="#">赞（0）</a></li>
									</ul>
								</div>
								<!--顾客满意度-->
								<div class="Customer-satisfaction"><img <img src="/TPshop/Public/home/images/Customer-satisfaction.jpg"/></div>
								<!--购买信息-->
								<div class="Purchase-informations">
								    <ul>
									    <li>颜色：格子黄色</li>
										<li>型号：160（建议160左右穿）</li>
									</ul>
								</div>
								<!--评论者-->
								<div class="The-reviewers"><p><img src="/TPshop/Public/home/images/The-reviewers.jpg"/>tsfk</p></div>
							</div>
							<div class="Reply-k">
								<div><input  class="Replys"   type="text"/></div>
							</div>
						</div>
						<!--第二个评论-->
						<div class="experience-two">
						    <div class="Detailed-evaluation-one">
								<!--评论心得-->
								<div class="Detailed-evaluations">
								    <ul>
									    <li class="Delione">衣服很不错，没色差，不掉色，跟图片一样！  2015-10-25  12:00</li>
										<li class="Delitwo"><a href="#">回复<span>（0）</span></a></li>
										<li class="Delithree"><a href="#">赞（0）</a></li>
									</ul>
								</div>
								<!--顾客满意度-->
								<div class="Customer-satisfaction"><img <img src="/TPshop/Public/home/images/Customer-satisfaction.jpg"/></div>
								<!--购买信息-->
								<div class="Purchase-informations">
								    <ul>
									    <li>颜色：格子黄色</li>
										<li>型号：160（建议160左右穿）</li>
									</ul>
								</div>
								<!--评论者-->
								<div class="The-reviewers"><p><img src="/TPshop/Public/home/images/The-reviewers.jpg"/>uffer</p></div>
							</div>
						</div>
						<!--灰色小分页-->
						<div class="gray-Paging">
						    <ul>
							    <li class="Paging-ul-lione"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>……</li>
								<li><a href="#">12</a></li>
								<li><input class="Next-page-t" type="button" value="下一页"/></li>
							</ul>
						</div>
					</div>
					<!--成交记录-->
					<div class="Transaction-records">
					    <!--成交记录紫色标题-->
						<div class="Transaction-records-title"><p>月成交记录287件</p></div>
						<!--详细成交记录-->
						<div class="transaction-records">
						    <div class="Buyer-information">
							    <ul>
								    <li class="BIlione">买家<a href="#">[登录后可见]</a></li>
									<li class="BIlitwo">款式/型号</li>
									<li class="BIlithree">数量</li>
									<li class="BIlifour">成交时间</li>
								</ul>
							</div>
							<div class="buyer">
							    <!--用户信息-->
								<div class="buyer-information"><p><img src="/TPshop/Public/home/images/The-reviewers.jpg"/>t***8<img src="/TPshop/Public/home/images/yellowz.jpg"/></p></div>
								<!--款式尺码颜色-->
								<div class="Model">
								    <ul>
									    <li>颜色分类：075深红</li>
										<li>尺码:160/80A/S</li>
									</ul>
								</div>
								<!--数量-->
								<div class="numbers"><p>1</p></div>
								<!--成交时间-->
								<div class="Closing-time">
								    <ul>
									    <li>2015-10-25</li>
										<li>14:15</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--猜你喜欢-->
			<div class="Guess-you-like">
			    <div class="Guess-you-like-title">
				    <div class="red-T"></div>
					<div class="title-like"><p>猜你喜欢</p></div>
					<div class="Guess-you-like-goods">
					    <div class="guess-goods">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/guess-goods.jpg"/></a></li>
								<li><a href="#">ESTILOS 韩版2015秋装韩版年连帽纯棉团中长款</a></li>
								<li>￥208.00</li>
							<ul>
						</div>
						<div class="guess-goods">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/guess-goods.jpg"/></a></li>
								<li><a href="#">ESTILOS 韩版2015秋装韩版年连帽纯棉团中长款</a></li>
								<li>￥208.00</li>
							<ul>
						</div>
						<div class="guess-goods">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/guess-goods.jpg"/></a></li>
								<li><a href="#">ESTILOS 韩版2015秋装韩版年连帽纯棉团中长款</a></li>
								<li>￥208.00</li>
							<ul>
						</div>
						<div class="guess-goods">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/guess-goods.jpg"/></a></li>
								<li><a href="#">ESTILOS 韩版2015秋装韩版年连帽纯棉团中长款</a></li>
								<li>￥208.00</li>
							<ul>
						</div>
						<div class="guess-goods">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/guess-goods.jpg"/></a></li>
								<li><a href="#">ESTILOS 韩版2015秋装韩版年连帽纯棉团中长款</a></li>
								<li>￥208.00</li>
							<ul>
						</div>
						<div class="guess-goods">
						    <ul>
							    <li><a href="ProductDetails.html"><img src="/TPshop/Public/home/images/guess-goods.jpg"/></a></li>
								<li><a href="#">ESTILOS 韩版2015秋装韩版年连帽纯棉团中长款</a></li>
								<li>￥208.00</li>
							<ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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