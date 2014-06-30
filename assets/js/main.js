var LutechMobile = {

	positionSection: 0,


	initialize: function(){
		LutechMobile.events();
	},
	
	events: function(){
		$(document).ready(function(){
			LutechMobile.navLink();
			LutechMobile.mapContact();
			LutechMobile.playApp();
			LutechMobile.animateSmartPhone();
		});
	},
	
	navLink: function(){

		var section;

		$('nav ul li a').on('click',function(e){

			section=$(this).attr('href');

			$('html, body').animate({
			    scrollTop: $(section).offset().top-70
			 }, 1500,"easeOutSine");

			$('html, body').clearQueue();
			return false;

		});

		$('nav img.logo').on('click',function(){
		
			$('html, body').animate({
			    scrollTop: $('header').offset().top
			 }, 1500,"easeOutSine");

			$('html, body').clearQueue();
			return false;
		});

		$(window).on('scroll',function(){

			var windowScroll=$(this).scrollTop();
			var header=$('#play').offset().top-80;
			

			if(windowScroll>header){

				$('nav').addClass("fixed");

			}else{

				$('nav').removeClass("fixed");
				
			}

			if($('nav').hasClass("fixed")){

				$(".appMobile").addClass("active");

				setTimeout(function(){
					$(".display .splashScreen").addClass("exit");
				}, 3000);
				
			}

			 $('.hideme').each( function(i){
            
	            var bottom_of_object = $(this).position().top + $(this).outerHeight();
	            var bottom_of_window = $(window).scrollTop() - $(window).height();
	            console.log($(window).scrollTop())
	             console.log($(window).height())
	            console.log(bottom_of_object)

	            console.log(bottom_of_window)
	            /* If the object is completely visible in the window, fade it it */
	            if( bottom_of_window > bottom_of_object ){
	                
	                $(this).removeClass("hideme");
                    
            	}
            
        	}); 
		});
	},
	
	playApp:function(){

		//--- SWIPE WITH MOUSE START
		var marginLt=parseInt($('.contentApp').css("margin-left"),10);
		var cordDownX,cordUpX,result;
		var moviment;


		$('.contentApp').on('mousedown',function(event){	
			cordDownX=event.pageX;

			marginLt=parseInt($('.contentApp').css("margin-left"),10);
		});

		$('.contentApp').on('mouseup',function(){	

			cordUpX=event.pageX;
			result=cordDownX-cordUpX;

				if(result>100){
					moviment=marginLt-260;
					console.log(moviment);
					if(moviment<=0 && moviment>=-520){
						$('.contentApp').animate({marginLeft:(moviment)+"px"});
						//--- ACTIVE LI
						$('.navBar ul li.active').next().addClass("active");
						$('.navBar ul li.active').first().not().removeClass("active");
						$('.appMobile.active').scrollTop(0);
					}
				}

				if(result<-100){
					moviment=marginLt+260;
					console.log(moviment);
					if(moviment<=0 && moviment>=-520){
						$('.contentApp').animate({marginLeft:(moviment)+"px"});
						//--- ACTIVE LI
						$('.navBar ul li.active').prev().addClass("active");
						$('.navBar ul li.active').last().removeClass("active");
						$('.appMobile.active').scrollTop(0);
					}
				}
		});

		//--- SWIPE WITH MOUSE END

		//--- MENU APP 

		$('.navBar ul li').on('click',function(){
			$('.appMobile.active').scrollTop(0);
			$('.contentApp').clearQueue();

			var prec=$('.navBar ul li.active').index();
			marginTot=parseInt($('.contentApp').css("margin-left"),10);
			
			$('.navBar ul li').removeClass("active");
			$(this).addClass("active");

			var pos=$(this).index();
		
			if(prec<pos){

				$('.contentApp').animate({marginLeft:-(260*pos)+"px"});
				$('.contentApp').css("margin-top",0);

			}else{

				
				$('.contentApp').animate({marginLeft:-(260*pos)+"px"});
				$('.contentApp').css("margin-top",0);

			}
		});

	},

	animateSmartPhone:function(){

		$('#features .content img.ipApp').addClass("animation");

	},

	mapContact:function(){

        var map_canvas = document.getElementById('map');
        var map_options = {
          center: new google.maps.LatLng(45.5423409,9.3836073),
          zoom: 12,
          panControl: false,
		zoomControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)

   		var myLatlng = new google.maps.LatLng(45.540097,9.287106);
   		var marker = new google.maps.Marker({
	     	 position: myLatlng,
	      	 map: map,
	     	 title: 'Lutech Mobile'
  		});
      google.maps.event.addDomListener(window, 'load');
  
	}

};

LutechMobile.initialize();