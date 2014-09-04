<header>
	<nav>
		<i class="fa fa-bars"></i>
		<a href="#main" du-smooth-scroll><img class="logo white" src="assets/img/logoB.png"></a>
		<a href="#main" du-smooth-scroll><img class="logo black" src="assets/img/logoG.png"></a>
		<ul>
			<li><a href="#play" du-smooth-scroll du-scrollspy offset="70">{{text.header.play}}</a>
			</li><li><a href="#features" du-smooth-scroll du-scrollspy offset="70">{{text.header.features}}</a>
			</li><li><a href="#about" du-smooth-scroll du-scrollspy offset="70">{{text.header.about}}</a>
			</li><li><a href="#contact" du-smooth-scroll du-scrollspy offset="70">{{text.header.contact}}</a>
			</li>
		</ul>
		<div class="language" ng-init="lang='en'">
			<a ng-click="lang='it'; langChange(lang,appChoose);" class="it"><img src="assets/img/it.png"></a>
			<a ng-click="lang='en'; langChange(lang,appChoose);" class="en"><img src="assets/img/en.png"></a>
		</div>
	</nav>
	<div class="presentation">
		<h1 ng-bind-html="text.header.title"></h1>
		<i class="icon-arrow-65"></i>
	</div>
</header>