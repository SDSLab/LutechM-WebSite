<div class="section" id="play" ng-init="appChoose='cup';">
	<div class="row">
		<div class="content">
			<h2 ng-bind-html="text.play.title"></h2>
			<p>{{text.play.subtitle}}</p>
			<div class="apps">
				<ul>
					<li class="cup" ng-click="appChoose='cup'; descrText=text.play.cup;" ng-class="{active: appChoose=='cup'}">
						<i class="fa fa-h-square"></i>
						<p>APPCUP</p>
						<p class="state">ACTIVE</p>
					</li>
					<li class="park" ng-click="appChoose='park'; descrText=text.play.park;" ng-class="{active: appChoose=='park'}">
						<i class="icon-parking-meter"></i>
						<p>PARKING</p>
						<p class="state">COMING SOON</p>
					</li>
					<li class="cat" ng-click="appChoose='cat'; descrText=text.play.cat;" ng-class="{active: appChoose=='cat'}">
						<i class="fa fa-shopping-cart"></i>
						<p>CATALOG</p>
						<p class="state">COMING SOON</p>
					</li>
					<li  class="cards" ng-click="appChoose='cards'; descrText=text.play.cards;" ng-class="{active: appChoose=='cards'}">
						<i class="icon-credit-card"></i>
						<p>FIDELITY</p>
						<p class="state">COMING SOON</p>
					</li>
				</ul>
			</div>
			<div class="contentSim" ng-class="[appChoose]">
				<img class="iphone park" src="assets/img/park.png">
				<img class="iphone cards" src="assets/img/cards.png">
				<img class="ipad" src="assets/img/catalog.png">
				<iframe width="396" height="834" src="//invis.io/D61B7LNQV" frameborder="0" scrolling="no" seamless="seamless" allowfullscreen></iframe>
				<div class="descriptionApp">
					<h3>{{text.play.description}}</h3><br>
					<p ng-bind-html="descrText"></p>
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
			<h3 ng-bind-html="text.features.nativeDev"></h3>
			<img class="techimg native" src="assets/img/technative.png">
			
			<h3 ng-bind-html="text.features.ibrideDev"></h3>
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
				<h3>Interaction <strong>Design</strong></h3>
				<p>{{text.features.interDes}}</p>
			</div>
			<div class="elementService">
				<i class="icon-plugins-1"></i>
				<h3>Platform <strong>Development</strong></h3>
				<p>{{text.features.platDev}}</p>
			</div>
			<div class="elementService">
				<i class="icon-bubble-conversation-1"></i>
				<h3>Technical <strong>Consulting</strong></h3>
				<p>{{text.features.techCons}}</p>
			</div>
			<div class="elementService">
				<i class="icon-hierarchy-2"></i>
				<h3>Mobile device <strong>Management</strong> ( <img src="assets/img/brand2.png"> )</h3>
				<p>{{text.features.mobDev}}</p>
			</div>
			<div class="elementService last">
				<i class="icon-message"></i>
				<h3>Mobile <strong> Engagement </strong>	( <img class="brand1" src="assets/img/brand1.png">)</h3>
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
	<div class="mapMobile">
		<a href="https://www.google.it/maps/place/Lutech+S.p.A./@45.540097,9.287106,17z/data=!3m1!4b1!4m2!3m1!1s0x4786b8112a019509:0x2555106c4c0b79c6">
			<img src="assets/img/mapMob.png">
		</a>
	</div>
	<div class="square">
		<div class="listContact">
			<i class="icon-marker-2"></i>
			<p>Via Wolfgang Amadeus Mozart, 47 20093 Cologno Monzese (MI), IT</p>
			<i class="icon-call-1"></i>
			<p>+39 02/25427011</p>
			<i class="icon-mail-1"></i>
			<p>sales@lutechmobile.com</p>
			<i class="icon-business-chart-2"></i>
			<p class="iva">PI: 08161720969 &nbsp;&nbsp;&nbsp;&nbsp; C.S:€10.000,00 i.v</p>
			<p class="copy">Copyright© 2014 – All rights reserved</p>
		</div>
	</div>
</div>


