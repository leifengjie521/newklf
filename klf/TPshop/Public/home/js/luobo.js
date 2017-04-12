// JavaScript Document
		var j=0;
		var time
		var first_ul=0;
		var last_ul=0;
        $(document).ready(function() {
			
			/*给第一个ul添加背景图片*/
           /* $('.first li').each(function(index,element){
			      $(this).css('background','url(images/banner'+index+'.jpg)');
			})*/
			/*给第二个ul的li添加背景图片*/
			//var html=$('.first').html();
			//$('.last').html(html);
		
			$('.first').attr('static',true)
			$('.last').attr('static',false)
			/*下一张图片*/
			/*$('.next').click( function(){
				first_ul=parseInt($('.first').css('left'));
				last_ul=parseInt($('.last').css('left'));
				if(j==$('.nav li').length-1)
				{j=0;}
				else{j++}
				$('.nav li').removeClass();
				$('.nav li').eq(j).addClass('cur');
				next()})*/
			
			/*上一张图片*/
			/*$('.prve').click( function(){
				first_ul=parseInt($('.first').css('left'));
				last_ul=parseInt($('.last').css('left'));
				if(j==0)
				{j=$('.nav li').length-1;}
				else{j--}
				$('.nav li').removeClass();
				$('.nav li').eq(j).addClass('cur');
				prve()})*/
			
			/*自动切换*/
			// function auto(){
			// 	alert(1)
			// 	first_ul=parseInt($('.first').css('left'));
			// 	last_ul=parseInt($('.last').css('left'));
			// 	if(j==$('.nav li').length-1)
			// 	{j=0;}
			// 	else{j++}
			// 	$('.nav li').removeClass();
			// 	$('.nav li').eq(j).addClass('cur');
			// 	next()
			// }
			/*鼠标经过左右按钮时自动切换的属性*/
			
			// var time=window.setInterval(function auto(){
			// 	first_ul=parseInt($('.first').css('left'));
			// 	last_ul=parseInt($('.last').css('left'));
			// 	if(j==$('.nav li').length-1)
			// 	{j=0;}
			// 	else{j++}
			// 	$('.nav li').removeClass();
			// 	$('.nav li').eq(j).addClass('cur');
			// 	next();
			// },1000)
			
			time=window.setInterval("auto()",3000);
			
			 $('.last,.first').hover(
			 function()
			 {
				 window.clearInterval(time);
			 	
			 },function()
			 {
			 time=window.setInterval("auto()",3000)
					
			 })
			/*导航鼠标经过属性*/
			
			$('.banner dt').hover(
			function(){
				if($('.first,.last').is(':animated'))
				  {
					  $('.first,.last').stop(true,true);
					  return false;
				 }
				window.clearInterval(time);
				var i=$(this).index();
				first_ul=parseInt($('.first').css('left'));
				last_ul=parseInt($('.last').css('left'));
				$('.banner dt').removeClass();
				$(this).addClass('bg');
				if(i>j)
				{
					j=i;
					//进入if说明是当前页面显示第一个ul
					if($('.first').attr('static'))
					{
					first_ul=(i-1)*-1600;
					}
					else{
					last_ul=(i-1)*-1600;
					}
					
					next()
				}
				else
				{
				    if(j!=0&&j!=i){
						j=i;
						if($('.first').attr('static'))//进入if说明是当前页面显示第一个ul
						{
						first_ul=(i+1)*-1600;
						}
						else{
						last_ul=(i+1)*-1600;
						}
					    prve()
					}
				}
				
			},function(){
				clearInterval(time)
			})
			
        });
function auto(){
				first_ul=parseInt($('.first').css('left'));
				last_ul=parseInt($('.last').css('left'));
				var len=$('.banner dt').length-1;
				if(j==len){
					j=0;
				}else{
					j++;
				}
				$('.banner dt').removeClass();
				$('.banner dt').eq(j).addClass('bg');
				next()
			}
function prve()
			{
				 if($('.first,.last').is(':animated'))
				  {
					  $('.first,.last').stop(true,true);
					  return false;
				 }
				  if(first_ul<=0&&first_ul>-6400)
				  {
				      $('.first').animate({'left':first_ul+1600});
					  $('.last').css('left','-6400px');
					  if(first_ul=='0')
					  {
						  $('.last').animate({'left':'-6400px'})
						  $('.first').attr('static',false)
			              $('.last').attr('static',true)
					  }
				  }
				  else
				  {
					  $('.last').animate({'left':last_ul+1600})
					  $('.first').css('left','-6400px');
					  if(last_ul=='0')
					  {
						  $('.first').animate({'left':'-4800px'})
						  $('.first').attr('static',true)
			              $('.last').attr('static',false)
					  }
				  }
			}
function next()
			{
			      if($('.first,.last').is(':animated'))
				  {
					  $('.first,.last').stop(true,true);
					  return false;
				 }
				  if(first_ul<=0&&first_ul>-6400)
				  {
				      $('.first').animate({'left':first_ul-1600});
					  $('.last').css('left','1600px');
					  if(first_ul=='-4800')
					  {
						  $('.last').animate({'left':0})
						  $('.first').attr('static',false);
			              $('.last').attr('static',true);
					  }
				  }
				  else
				  {
					  $('.last').animate({'left':last_ul-1600})
					  $('.first').css('left','1600px');
					  if(last_ul=='-4800')
					  {
						  $('.first').animate({'left':'0'});
						  $('.first').attr('static',true);
			              $('.last').attr('static',false);
					  };
				  }
			}