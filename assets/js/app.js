(function(){
	
	var app=angular.module('myApp',['duScroll','ngSanitize','ngResource']).value('duScrollDuration', 1500);
	
	app.controller('LanguageController', function($scope,$http,$location){
			var location=null;
	        var lang=null;
	       
        $(window).on('hashchange', function(){
        	location=$location.path();
	        lang=location.split("/");
	        console.log(lang)
         
	        if(lang[1]=="it"){
	            $http.get('server/models/ita.json').success(function(data) {
			      $scope.text = data;
			      console.log($scope.text);
		    	});
		    	$('.language a.it').addClass("active");
		    	$('.language a.en').removeClass("active");
	        }
	        if(lang[1]=="en"){
	            $http.get('server/models/eng.json').success(function(data) {
			      $scope.text = data;
			      console.log($scope.text);
		    	});  
		    	$('.language a.en').addClass("active");
		    	$('.language a.it').removeClass("active");      
	        }
        });
	});

	app.controller('AppCupController', function($scope){

		$scope.check = function(imageName) {
		    if (imageName=="effettuati" || imageName=="prenotati" || imageName=="new") {
		       $scope.imageName="home";
		       $scope.headerPage="";
		    }
		     if (imageName=="pay") {
		       $scope.imageName="effettuati";
		       $scope.headerPage='Lista <b>Appuntamenti</b>';
		    }
		}

	});

})();