var LutechMobile = {

	positionSection: 0,


	initialize: function(){
		LutechMobile.events();
	},
	
	events: function(){

		$(document).ready(function(){
			LutechMobile.mapContact();
			LutechMobile.openMenu();
			window.location.hash="en";
		});

		$(window).on('scroll',function(){

			LutechMobile.navScroll();
		});

		$(window).load(function(){
			$(".loader").fadeOut("slow");
		});

	},
	
	navScroll:function(){

		var windowScroll=$(window).scrollTop();
		var header=$('header').offset().top+$('header').outerHeight()-80;
		
		if(windowScroll>header){

			$('nav').addClass("fixed");

		}else{

			$('nav').removeClass("fixed");

		}
	},

	openMenu:function(){
		$('nav i.fa-bars').on("click",function(){
			console.log("entrato")
			if($('nav').hasClass("visible")){
			$('nav').removeClass("visible");
		}else{
			$('nav').addClass("visible");
		}
		});
		
	},

	langChange:function(lang){
		window.location.hash=lang;
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
	},
	
	openMenuApp:function(){
		$('.display').addClass("open");
	}

};

LutechMobile.initialize();