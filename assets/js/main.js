var LutechMobile = {

	positionSection: 0,


	initialize: function(){
		LutechMobile.events();
	},
	
	events: function(){

		$(window).load(function(){

			LutechMobile.mapContact();
			LutechMobile.navScroll();
			
			$(window).on('scroll',function(){

				LutechMobile.navScroll();
				LutechMobile.animateSmartPhone();

			});
		});

		$(document).ready(function(){
			LutechMobile.navLink();
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
	},

	navScroll:function(){

		var windowScroll=$(window).scrollTop();
		var header=$('#play').offset().top-80;

		if(windowScroll>header){

			$('nav').addClass("fixed");

		}else{

			$('nav').removeClass("fixed");

		}

		if($('nav').hasClass("fixed")){

			$(".contentApp").addClass("cup");

			setTimeout(function(){
				$(".display .splashScreen").addClass("exit");
			}, 3000);
			
		}

	},

	animateSmartPhone:function(){

		var bottomObj=$('#features .content .aniSmart').offset().top+$('#features .content .aniSmart').outerHeight();
		var bottomWind=$(window).scrollTop()+ $(window).height()-50;

		if(bottomWind>bottomObj){

			$('#features .content img.ipApp').addClass("animation");
		}

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