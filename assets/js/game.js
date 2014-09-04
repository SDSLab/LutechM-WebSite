var Game = {

	openMenuApp:function(){
		if (navigator.userAgent.search("MSIE") >= 0) {

		}else{
			$('body').addClass("open");
		}
	},

	verify:function(){
		if($('body').hasClass("msie")){

			window.open('http://invis.io/VT1B7LMDW', 'appcup');
			
		}
	},

	closeMenuApp:function(){
		$('body').removeClass("open");
	}

};
