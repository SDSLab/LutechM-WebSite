(function(){
	
	var app=angular.module('myApp',['duScroll','ngSanitize','ngResource']).value('duScrollDuration', 1500);
	
	app.controller('LanguageController', function($scope,$http){

		$http.get('server/models/eng.json').success(function(data) {
			      $scope.text = data;
			      console.log($scope.text);
			      $scope.lang = "en";
		    	});  
    	$('.language a.en').addClass("active");
    	$('.language a.it').removeClass("active"); 

		$scope.langChange = function(lang){
			if(lang=="it"){
				$http.get('server/models/ita.json').success(function(data) {
			      $scope.text = data;
			      console.log($scope.text);
		    	});
		    	$('.language a.it').addClass("active");
		    	$('.language a.en').removeClass("active");
		    }
		    if(lang=="en"){
	            $http.get('server/models/eng.json').success(function(data) {
			      $scope.text = data;
			      console.log($scope.text);
		    	});  
		    	$('.language a.en').addClass("active");
		    	$('.language a.it').removeClass("active");      
	        }

		}

        });

	app.controller('AppCupController', function($scope){

		$scope.back = function(imageName) {
		    if (imageName=="effettuati" || imageName=="prenotati" || imageName=="new" || imageName=="newpren") {
		       $scope.imageName="home";
		       $scope.headerPage="";
		    }
		     if (imageName=="pay") {
		       $scope.imageName="prenotati";
		       $scope.headerPage='Lista <b>Appuntamenti</b>';
		    }
		    if (imageName=="blank") {
		       $scope.imageName="new";
		       $scope.headerPage='<b>Nuovo</b> Appuntamento';
		    }
		    if (imageName=="detail") {
		       $scope.imageName="blank";
		       $scope.headerPage='Scegli <b>Giorno e Ora</b>';
		    }
		    if (imageName=="checkin") {
		       $scope.imageName="home";
		       $scope.headerPage='';
		    }

		    if (imageName=="home") {
		       $scope.imageName="home";
		       $scope.headerPage='';
		    }

		}

		$scope.addCheck=function(){

		    $(".appcup").addClass("check");
		}

		$scope.check = function(imageName){

			if ($(".appcup").hasClass("check")){
				$scope.imageName="newpren";
				$scope.headerPage='Lista <b>Appuntamenti</b>';
			}else{
				$scope.imageName="prenotati";
				$scope.headerPage='Lista <b>Appuntamenti</b>';
			}
		}

	});

})();