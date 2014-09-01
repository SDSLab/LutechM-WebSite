<?php include 'server/elements/head.php'; ?>
	<body>
		<div class="loader">
			<div class="load">
				<i class="fa fa-circle-o-notch fa-spin"></i>
				<i class="fa fa-desktop"></i>

				<p>For the view of <strong>all contents</strong>,<br> you can access the website in your <strong>desktop</strong> browser. </p><br>
				<p>Per la visualizzazione di <strong>tutti i contenuti</strong>,<br> accedi da <strong>Desktop</strong>.</p>
			</div>
		</div>
		<div id="main"  ng-controller="LanguageController as LangCtrl">
	
				<?php include 'server/elements/header.php'; ?>
				<?php include 'server/elements/container.php'; ?>
			
		</div>
	</body>
</html>