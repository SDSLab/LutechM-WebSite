<!DOCTYPE html>	
<html ng-app="myApp">
<head>

	<!-- META -->
	<meta charset="UTF-8">
	<meta name="viewport" id="view" content="user-scalable=0, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 

	<script>
		window.addEventListener("orientationchange", function() {
			document.getElementById("view").setAttribute("content", "width=device-width");
		}, false);
	</script>

	<!-- CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">

	<!-- FONT -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:300,600' rel='stylesheet' type='text/css'>
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- JS -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.min.js"></script>
	<script src="assets/js/lib/angular-scroll.min.js"></script>
	<script src="assets/js/lib/angular-sanitize.min.js"></script>
	<script src="assets/js/lib/angular-route.min.js"></script>
	<script src="assets/js/lib/angular-resource.min.js"></script>
	<script src="assets/js/app.js"></script>
	<script src="assets/js/main.js"></script>

	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

	<!--compatibilita' ie-->
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<link href="css/css/html5reset-1.6.1.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	
	<![endif]-->

	<title>Lutech Mobile </title>
 </head>