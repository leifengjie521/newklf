// JavaScript Document

/*
	核心：控制 ul 相对于 #slide 容器的定位  left的值
*/
var i=0;
var html;
var k;
$(document).ready(function(e) {
	htmls=$(".lunbo ul").html();
	k=$(".lunbo ul li").length;
	$(".lunbo ul li").eq(0).addClass("curt");
    //切换
	$(".leftclick").click(function(){
		if(!$(".lunbo ul").is(':animated')){
		
		//获取li的个数
		var len=$(".lunbo ul li").length;
		i++;
		//当后面没有li了，必须追加
		if(i+5>len){
			$(".lunbo ul").append(htmls);
			var len=$(".lunbo ul li").length;//追加完成后，获取li的个数
			var ulw=len*(180+60);
			$(".lunbo ul").width(ulw);
			}
		left=-i*240;
		$(".lunbo ul").animate({left:left+'px'},1000);
		}else{
			return false;
			}
		});
		
		//切换
	$(".rightclick").click(function(){
		//alert($("#slide ul").css('z-index'))
		if(!$(".lunbo ul").is(":animated")){
			//获取li的个数
		var len=$(".lunbo ul li").length;
		//alert($("#slide ul").width())
		i--;
		//当后面没有li了，必须追加
	   if(i<0){
		    $(".lunbo ul").prepend(htmls);
		    $(".lunbo ul li").eq(5).removeClass("curt");
			$(".lunbo ul li").eq(0).addClass("curt");
			//有缝
			//alert($(".lunbo ul").width())
			//alert($(".lunbo ul").css("left"))
			$(".lunbo ul").css({"left":'-1205px'});
			// $("#slide ul li").eq(0).removeClass("frist");
			var len=$(".lunbo ul li").length;//追加完成后，获取li的个数
			var ulw=len*(180+60);
			$(".lunbo ul").width(ulw);
			//alert($("#slide ul").width())
			i=k-1;
			
			}
			
		left=-i*240;
		//alert($(".lunbo ul").css("left"))
		$(".lunbo ul").animate({left:left+'px'},1000);
		//alert($(".lunbo ul").css("left"))
			}else{return false;
				}
			
		
		});
});
	
	