// JavaScript Document

/*
	核心：控制 ul 相对于 #slide 容器的定位  left的值
*/
var y=0;
var html;
var h;
$(document).ready(function(e) {
	htm=$(".tjlunbo ul").html();
	h=$(".tjlunbo ul li").length;
	$(".tjlunbo ul li").eq(0).addClass("nic");
    //切换
	$(".up").click(function(){
		if(!$(".tjlunbo ul").is(':animated')){
		
		//获取li的个数
		var len=$(".tjlunbo ul li").length;
		y++;
		//当后面没有li了，必须追加
		if(y+3>len){
			$(".tjlunbo ul").append(htm);
			var len=$(".tjlunbo ul li").length;//追加完成后，获取li的个数
			var ulw=len*(280+40);
			$(".tjlunbo ul").width(ulw);
			}
		left=-y*320;
		$(".tjlunbo ul").animate({left:left+'px'},1000);
		}else{
			return false;
			}
		});
		
		//切换
	$(".down").click(function(){
		//alert($("#slide ul").css('z-index'))
		if(!$(".tjlunbo ul").is(":animated")){
			//获取li的个数
		var len=$(".tjlunbo ul li").length;
		//alert(len*(280+40)-35)
		y--;
		
		//alert($(".lunbo ul").width())
		//当后面没有li了，必须追加
	   if(y<0){
		    $(".tjlunbo ul").prepend(htm);
		    $(".tjlunbo ul li").removeClass("nic");
			$(".tjlunbo ul li").eq(2).addClass("nic");
			//有缝
			
			
			//alert($(".lunbo ul li").width())
			$(".tjlunbo ul").css({"left":'-960px'});
			// $("#slide ul li").eq(0).removeClass("frist");
			var len=$(".tjlunbo ul li").length;//追加完成后，获取li的个数
			//alert(len)
			var ulw=len*(280+40)-35;
			$(".tjlunbo ul").width(ulw);
			//alert($("#slide ul").width())
			y=h-1;
			//alert(y)
			}else{
		$(".tjlunbo ul li").removeClass("nic");
		$(".tjlunbo ul li").eq(y).addClass("nic");
			}
		left=-y*320;
		//alert(left)
		//alert($(".lunbo ul").css("left"))
		$(".tjlunbo ul").animate({left:left+'px'},1000);
		//alert($(".lunbo ul").css("left"))
			}else{return false;
				}

		});
});
	
	