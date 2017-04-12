// JavaScript Document
$(function(){
	$('.category dt').click(function(){
		   
		  
			if($(this).hasClass('bag')){
				$(this).removeClass('bag');
				$(this).next().find('ul').hide();
				}else{
						$('.category dt').removeClass('bag');
						$('.category dt').next().find('ul').hide();
						$(this).addClass('bag');
						$(this).next().find('ul').show();
					}
			
			/*if(cla=='bag'){
				$(this).removeClass()
				  $(this).next().find('ul').hide();
				}else{
					$('.category dd ul').hide()
					$(this).addClass('reds')
					$(this).next().find('ul').show();
					}
	      */
		})
		
			$('.jiag dt').click(function(){
		   	var html=$(this).html();
			var i='<span><p>'+html+'</p><i></i></span>';
			$('.heater h2 .x1').html(i);
			
			/*if(cla=='bag'){
				$(this).removeClass()
				  $(this).next().find('ul').hide();
				}else{
					$('.category dd ul').hide()
					$(this).addClass('reds')
					$(this).next().find('ul').show();
					}
	      */
		})
		
		$('.kuans li').click(function(){
		   	var html=$(this).html();
			var i='<span><p>'+html+'</p><i></i></span>';
			$('.heater h2 .x3').html(i);
			
			/*if(cla=='bag'){
				$(this).removeClass()
				  $(this).next().find('ul').hide();
				}else{
					$('.category dd ul').hide()
					$(this).addClass('reds')
					$(this).next().find('ul').show();
					}
	      */
		})
		
		$('.yonl li').click(function(){
		   	var html=$(this).html();
			var i='<span><p>'+html+'</p><i></i></span>';
			$('.heater h2 .x2').html(i);
			
			/*if(cla=='bag'){
				$(this).removeClass()
				  $(this).next().find('ul').hide();
				}else{
					$('.category dd ul').hide()
					$(this).addClass('reds')
					$(this).next().find('ul').show();
					}
	      */
		})
		
		$('.qingc span').live("click", function(){
			$(this).remove();
			/*if(cla=='bag'){
				$(this).removeClass()
				  $(this).next().find('ul').hide();
				}else{.
					$('.category dd ul').hide()
					$(this).addClass('reds')
					$(this).next().find('ul').show();
					}
	      */
		})
		
		$('.nicb').click(function(){
		var x=$('.jiag dd .b1').val();
		var y=$('.jiag dd .b2').val();
		
		html=x+'-'+y;
		var i='<span><p>'+html+'</p><i></i></span>';
			$('.heater h2 .x1').html(i);
		})
	})