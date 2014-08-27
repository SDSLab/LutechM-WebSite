<div class="section" id="play">
	<div class="row">
		<div class="content">
			<h2 ng-bind-html="text.play.title"></h2>
			<p>{{text.play.subtitle}}</p>
			<div class="apps">
				<ul>
					<li>
						<i class="fa fa-h-square"></i><p>APPCUP</p>
					</li>

					<li>
						<i class="icon-parking-meter"></i><p>PARKING</p>
					</li>
					<li>
						<i></i><p>CATALOG</p>
					</li>
					<li>
						<i></i><p>CROSSLAND</p>
					</li>
					<li>
						<i class="icon-credit-card"></i><p>MY CARDS</p>
					</li>
				</ul>
			</div>
			<img class="iphone" src="assets/img/iphone5sB.jpeg">
			<?php include 'server/elements/play.html'; ?>
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
			<img src="assets/img/anydevice2.png">
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
			<div class="elementService"><i class="icon-stationery-1"></i><p>Interaction <strong>design</strong></p></div>
			<div class="elementService"><i class="icon-plugins-1"></i><p>Platform <strong>development</strong></p></div>
			<div class="elementService"><i class="icon-bubble-conversation-1"></i><p>Technical <strong>consulting</strong></p></div>
			<div class="elementService down"><i class="icon-hierarchy-2"></i><p>Mobile device <strong>management</strong> ( <img src="assets/img/brand2.png"> )</p></div>
			<div class="elementService down"><i class="icon-message"></i><p>Mobile <strong>engagement</strong>	(<img class="brand1" src="assets/img/brand1.png">)</p></div>
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
			<img class="techimg" src="assets/img/aboutobj.png">
		</div>
	</div>
</div>

<div class="section" id="contact">
	<div id="map"></div>
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


