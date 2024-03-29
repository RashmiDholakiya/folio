<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> Arsenaltech - Portfolio Management </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->

		{!! HTML::style('css/bootstrap.min.css') !!}
		{!! HTML::style("css/font-awesome.min.css") !!}

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		{!! HTML::style("css/smartadmin-production-plugins.min.css") !!}
		{!! HTML::style("css/smartadmin-production.min.css") !!}
		{!! HTML::style("css/smartadmin-skins.min.css") !!}

		<!-- SmartAdmin RTL Support  -->
		{!! HTML::style("css/smartadmin-rtl.min.css") !!}

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		{!! HTML::style("css/your_style.css") !!} -->


		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="{{ url("img/splash/sptouch-icon-iphone.png") }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ url("img/splash/touch-icon-ipad.png") }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ url("img/splash/touch-icon-iphone-retina.png") }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ url("img/splash/touch-icon-ipad-retina.png") }}">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="{{ url("img/splash/ipad-landscape.png") }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="{{ url("img/splash/ipad-portrait.png") }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="{{ url("img/splash/iphone.png") }}" media="screen and (max-device-width: 320px)">

	</head>
	

	<body class="">

		<!-- HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> {!! HTML::image("img/logo.png", "Admin")  !!}  </span>
				<!-- END LOGO PLACEHOLDER -->

			</div>

			<!-- pulled right: nav area -->
			<div class="pull-right">
				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->
				

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="{{URL::to('logout')}}" title="Sign Out" ><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->




				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->
				
			

			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">



			<!-- NAVIGATION : This navigation is also responsive-->
			<nav>
				<ul>
					<li class="{{ set_active(['/']) }}">
						<a href="{{ url("/") }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
					</li>

				    <li class="{{ set_active(['project*']) }}">
                        <a href="{{ url('project') }}" ><i class="fa fa-lg fa-fw fa-inbox"></i> <span
                                class="menu-item-parent">Projects</span></a>
                    </li>
				
					<li class="{{ set_active(['shared-cost*']) }}">
                        <a href="{{ url('shared-cost') }}"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Shared Cost</span></a>
					<li class="{{ set_active(['staff','staff/*']) }}">
					<a href="{{ url('staff') }}"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Staff</span></a></li>
					<li class="{{ set_active(['staff-rate*']) }}">
					<a href="{{ url('staff-rate') }}"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">Staff Rate</span></a></li>
					<li class="top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span
									class="menu-item-parent">Reports</span></a>
						<ul>
							<li class="{{ set_active(['report/project']) }}">
								<a href="{{ url('report/project') }}"><i class="fa fa-stack-overflow"></i> Project Performance</a>
							</li>
							<li class="{{ set_active(['report/monthly']) }}">
								<a href="{{ url('report/monthly') }}"><i class="fa fa-cube"></i> Monthly Performance</a>
							</li>

						</ul>
					</li>
			  </ul>
		  </nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>
		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content">

                   @yield('content')

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->


		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


		<!-- IMPORTANT: APP CONFIG -->
		{!! HTML::script("js/app.config.js") !!}

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		{!! HTML::script("js/plugin/jquery-touch/jquery.ui.touch-punch.min.js") !!}

		<!-- BOOTSTRAP JS -->
		{!! HTML::script("js/bootstrap/bootstrap.min.js") !!}


		<!-- JARVIS WIDGETS -->
		{!! HTML::script("js/smartwidgets/jarvis.widget.min.js") !!}


		<!-- JQUERY VALIDATE -->
		{!! HTML::script("js/plugin/jquery-validate/jquery.validate.min.js") !!}

		<!-- JQUERY MASKED INPUT -->
		{!! HTML::script("js/plugin/masked-input/jquery.maskedinput.min.js") !!}

		<!-- JQUERY SELECT2 INPUT -->
		{!! HTML::script("js/plugin/select2/select2.min.js") !!}

		<!-- JQUERY UI + Bootstrap Slider -->
		{!! HTML::script("js/plugin/bootstrap-slider/bootstrap-slider.min.js") !!}

		<!-- browser msie issue fix -->
		{!! HTML::script("js/plugin/msie-fix/jquery.mb.browser.min.js") !!}

		<!-- FastClick: For mobile devices -->
		{!! HTML::script("js/plugin/fastclick/fastclick.min.js") !!}

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->


		<!-- MAIN APP JS FILE -->
		{!! HTML::script("js/app.min.js") !!}


		<script>
			$(document).ready(function() {


				$('.ui-tabs').tabs();
                $('.ui-tabs').show();



			});



		</script>


	</body>

</html>