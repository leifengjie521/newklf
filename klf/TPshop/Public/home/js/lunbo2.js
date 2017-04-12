// JavaScript Document

/*
	核心：控制 ul 相对于 #slide 容器的定位  left的值
*/
var y=0;
var html;
var h;
$(document).ready(function(e) {
	htm=$(".lunbo2 ul").html();
	h=$(".lunbo2 ul li").length;
	//$(".lunbo2 ul li").eq(0).addClass("nic");
    //切换
	$(".up").click(function(){
		if(!$(".lunbo2 ul").is(':animated')){
		
		//获取li的个数
		var len=$(".lunbo2 ul li").length;
		y++;
		//当后面没有li了，必须追加
		if(y+3>len){
			$(".lunbo2 ul").append(htm);
			var len=$(".lunbo2 ul li").length;//追加完成后，获取li的个数
			var ulw=len*(280+50);
			$(".lunbo2 ul").width(ulw);
			}
		left=-y*330;
		$(".lunbo2 ul").animate({left:left+'px'},1000);
		}else{
			return false;
			}
		});
		
		//切换
	$(".down").click(function(){
		//alert($("#slide ul").css('z-index'))
		if(!$(".lunbo2 ul").is(":animated")){
			//获取li的个数
		var len=$(".lunbo2 ul li").length;
		//alert(len*(280+40)-35)
		y--;
		
		//alert($(".lunbo ul").width())
		//当后面没有li了，必须追加
	   if(y<0){
		    $(".lunbo2 ul").prepend(htm);
		    //$(".lunbo2 ul li").removeClass("nic");
			//$(".lunbo2 ul li").eq(2).addClass("nic");
			//有缝
			
			
			//alert($(".lunbo ul li").width())
			$(".lunbo2 ul").css({"left":'-990px'});
			// $("#slide ul li").eq(0).removeClass("frist");
			var len=$(".lunbo2 ul li").length;//追加完成后，获取li的个数
			//alert(len)
			var ulw=len*(280+50);
			$(".lunbo2 ul").width(ulw);
			//alert($("#slide ul").width())
			y=h-1;
			//alert(y)
			}else{
		//$(".lunbo2 ul li").removeClass("nic");
		//$(".lunbo2 ul li").eq(y).addClass("nic");
			}
		left=-y*330;
		//alert(left)
		//alert($(".lunbo ul").css("left"))
		$(".lunbo2 ul").animate({left:left+'px'},1000);
		//alert($(".lunbo ul").css("left"))
			}else{return false;
				}

		});
});
	
	