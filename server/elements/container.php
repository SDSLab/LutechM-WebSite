<div class="section" id="play" ng-init="appChoose='';">
	<div class="row">
		<div class="content">
			<h2 ng-bind-html="text.play.title"></h2>
			<p>{{text.play.subtitle}}</p>
			<div class="apps">
				<ul>
					<li ng-click="appChoose='cup'; descrText=text.play.cup;">
						<i class="fa fa-h-square"></i>
						<p>APPCUP</p>
						<p class="state">ACTIVE</p>
					</li>

					<li ng-click="appChoose='park'; descrText=text.play.park;">
						<i class="icon-parking-meter"></i>
						<p>PARKING</p>
						<p class="state">COMING SOON</p>
					</li>
					<li ng-click="appChoose='cat'; descrText=text.play.cata;">
						<i></i>
						<p>CATALOG</p>
						<p class="state">COMING SOON</p>
					</li>
					<li ng-click="appChoose='cards'; descrText=text.play.cards;">
						<i class="icon-credit-card"></i>
						<p>CROSSLAND</p>
						<p class="state">COMING SOON</p>
					</li>
				</ul>
			</div>
			<div class="contentSim" ng-class="[appChoose]">
				<img class="iphone" src="assets/img/iphone.jpeg">
				<img class="ipad" src="assets/img/catalog.png">
				<?php include 'server/elements/play.html'; ?>
				<div class="descriptionApp">
					<p>{{descrText}}</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section" id="features">
	<div class="row colored">
		<div class="content">
			<h2 ng-bind-html="text.features.title"></h2>
		</div>
	</div>
	<div class="row">
		<div class="content">
			<img class="anydev" src="assets/img/anydevice2.png">
			<h2  ng-bind-html="text.features.anyDevice"></h2>
			<p>{{text.features.anyDeviceSub}}</p>
			<img class="any" src="assets/img/anyapp.png">
			<h2 class="anydevice" ng-bind-html="text.features.anyNeed"></h2>
			<p>{{text.features.anyNeedSub}}</p>
		</div>
	</div>
	<div class="row colored">
		<div class="content tech">
			<h2 ng-bind-html="text.features.tech"></h2>
			<p ng-bind-html="text.features.nativeDev"></p>
			<img class="techimg native" src="assets/img/technative.png">
			
			<p ng-bind-html="text.features.ibrideDev"></p>
			<img class="techimg ibrid" src="assets/img/techibrid.png">
			
		</div>
	</div>
	<div class="row">
		<div class="content">
			<h2 ng-bind-html="text.features.meap"></h2>
			<img class="techimg" src="assets/img/ourmeap.png">
		</div>
	</div>
	<div class="row colored">
		<div class="content">
			<h2 ng-bind-html="text.features.ourServices"></h2>
			<div class="elementService first">
				<i class="icon-stationery-1"></i>
				<h3>Interaction <strong>design</strong></h3>
				<p>{{text.features.interDes}}</p>
			</div>
			<div class="elementService">
				<i class="icon-plugins-1"></i>
				<h3>Platform <strong>development</strong></h3>
				<p>{{text.features.platDev}}</p>
			</div>
			<div class="elementService">
				<i class="icon-bubble-conversation-1"></i>
				<h3>Technical <strong>consulting</strong></h3>
				<p>{{text.features.techCons}}</p>
			</div>
			<div class="elementService">
				<i class="icon-hierarchy-2"></i>
				<h3>Mobile device <strong>management</strong> ( <img src="assets/img/brand2.png"> )</h3>
				<p>{{text.features.mobDev}}</p>
			</div>
			<div class="elementService">
				<i class="icon-message"></i>
				<h3>Mobile <strong> engagement </strong>	( <img class="brand1" src="assets/img/brand1.png">)</h3>
				<p>{{text.features.mobEng}}</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="content">
			<h2 ng-bind-html="text.features.ourPartners"></h2>
			<img class="techimg" src="assets/img/ourpartners.png">
		</div>
	</div>
</div>
<div class="section" id="about">
	<div class="row colored">
		<div class="content">
			<h2 ng-bind-html="text.features.about"></h2>
			<p ng-bind-html="text.features.mobileApp"></p>
			<div class="desk"></div>
		</div>
	</div>
</div>

<div class="section" id="contact">
	<div id="map"></div>
	<div class="mapMobile"><img src="assets/img/mapMob.png"></div>
	<div class="square">
		<div class="listContact">
			<i class="icon-marker-2"></i>
			<p>Via Wolfgang Amadeus Mozart, 47 20093 Cologno Monzese (MI), IT</p>
			<i class="icon-call-1"></i>
			<p>+39 02/25427092</p>
			<i class="icon-mail-1"></i>
			<p>f.pengo@lutechmobile.com</p>
		</div>
	</div>
</div>


