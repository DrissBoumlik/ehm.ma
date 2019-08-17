<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Unigreen - Gardening and Lawn Care Service HTML5 Template">
	<meta name="keywords"
		content="agriculture, garden design, garden shop, gardening, gardening expert, irrigation, landscape, lawn care, nursery, Tree plantation">
    <meta name="author" content="unicoder">


	<!-- Favicon -->
	<link rel="shortcut icon" href="images/logo/icon.png">

	<!-- Links of css files -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/flaticon.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/color.css') }}" rel="stylesheet">
	<link href="{{ asset('css/default-animation.css') }}" rel="stylesheet">
	<link href="{{ asset('css/extralayers.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('css/settings.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
	<link href="{{ asset('css/bg-color-settings.css') }}" rel="stylesheet"> <!-- Settings CSS -->
	{{--  <link rel="stylesheet" href="{{ asset('styles/base/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}" />  --}}


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <title>@yield('title') - Elite Harvest Maroc</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!--Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">  --}}
    {{--  <link rel='stylesheet' id='use-fontawesome-all-css' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' type='text/css' media='all' />  --}}
    <link href="{{ asset('css/custom-style-bundle.css') }}" rel="stylesheet">

</head>
<body class="page-wrapper">
	<!-- Preloader start -->
	<div class="preloader">
		<div id="cssload-global">
			<div id="cssload-top" class="cssload-mask">
				<div class="cssload-plane"></div>
			</div>
			<div id="cssload-middle" class="cssload-mask">
				<div class="cssload-plane"></div>
			</div>

			<div id="cssload-bottom" class="cssload-mask">
				<div class="cssload-plane"></div>
			</div>
			<div class="loading-text capitalize">{{ trans('file.pre-loader') }}</div>
		</div>
	</div>
	<!-- Preloader start -->

	<div id="page_wrapper">
		<div class="row">
			<!-- Header Section Start -->
			<header id="header" class="nav-style-3 nav-on-top fixed-header">
				<div class="bg-white">
					<div class="container">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
									data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span
										class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
										class="icon-bar"></span> <span class="icon-bar"></span> </button>
								<a class="navbar-brand" href="/"><img class="nav-logo"
										src="images/logo/logo1.png" alt=""><img class="nav-logo"
										src="images/logo/logo1.png" alt=""></a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="navigation nav navbar-nav navbar-right">
									<li class="dropdown">
										<a class="dropdown-toggle capitalize" href="/">{{ trans('file.menu-top.home') }}</a>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle capitalize" data-toggle="dropdown" href="#">{{ trans('file.menu-top.about-us') }} <i
												class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li><a href="#">Elite Harvest Maroc</a></li>
											<li><a href="#">Notre vision</a></li>
											<li><a href="#">Notre mission</a></li>
											<li><a href="#">Nos valeurs</a></li>
											<li><a href="#">Production</a></li>
											<li><a href="#">Réseau</a></li>
											<li><a href="#">Ressources humaines</a></li>
											<li><a href="#">Responsabilité sociale des entreprises</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle capitalize" data-toggle="dropdown" href="/services">{{ trans('file.menu-top.services') }} <i
												class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li><a href="#">Société d’agriculture</a></li>
											<li><a href="#">Le développement agricole</a></li>
											<li><a href="#">Gestion agricole</a></li>
											<li><a href="#">Société de conseil en irrigation</a></li>
											<li><a href="#">Services de laboratoire</a></li>
											<li><a href="#">Aliments</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a class="capitalize" href="/products">{{ trans('file.menu-top.products') }}</a>
									</li>
									<li class="dropdown">
										<a class="capitalize" href="/quality-assurance">{{ trans('file.menu-top.quality-assurances') }}</a>
									</li>
									<li class="dropdown"><a class="dropdown-toggle capitalize"
											href="/events">{{ trans('file.menu-top.events') }}</a>
									</li>
									<li class="dropdown"><a class="dropdown-toggle capitalize" data-toggle="dropdown"
											href="#">{{ trans('file.menu-top.contact-us') }} <i class="fa fa-angle-right"
												aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li><a class="capitalize" href="/contact">{{ trans('file.menu-top.contact-us') }}</a></li>
											<li><a class="capitalize" href="/careers" class="capitalize">{{ trans('file.menu-top.careers') }}</a></li>
											<li><a class="capitalize" href="/working-together">{{ trans('file.menu-top.working-together') }}</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle capitalize" data-toggle="dropdown" href="#">{{ trans('file.menu-top.languages') }} <i
												class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="dropdown-menu lang">
											<li><a href="{{ url('locale/fr') }}"><img src="images/langues/fr.png"> FR</a></li>
											<li><a href="{{ url('locale/en') }}"><img src="images/langues/en.png"> ENG</a></li>
											<li><a href="{{ url('locale/ar') }}"><img src="images/langues/ar.png"> AR</a></li>
										</ul>
									</li>
								</ul>

							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</header>
            <!-- Header Section End -->

            @yield('content')



            <!-- Footer Section Start -->
            <footer id="footer">
                <div class="main-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3 class="footer-title">{{ trans('file.menu-footer-1.header') }}</h3>
                                    <div class="footer-content">
                                        <ul class="ft-list">
                                            <li><a href="tree-plantation.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item1') }}</a></li>
                                            <li><a href="garden-care.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item2') }}</a></li>
                                            <li><a href="watering-garden.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item3') }}</a></li>
                                            <li><a href="garden-design.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item4') }}</a></li>
                                            <li><a href="gutter-repair.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item5') }}</a></li>
                                            <li><a href="lawn-care.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item6') }}</a></li>
                                            <li><a href="land-design.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item7') }}</a></li>
                                            <li><a href="tree-surgery.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-1.item8') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3 class="footer-title">{{ trans('file.menu-footer-2.header') }}</h3>
                                    <div class="footer-content">
                                        <ul class="ft-list">
                                            <li><a href="tree-plantation.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-2.item1') }}</a></li>
                                            <li><a href="garden-care.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-2.item2') }}</a></li>
                                            <li><a href="watering-garden.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-2.item3') }}</a></li>
                                            <li><a href="garden-design.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-2.item4') }}</a>
                                            </li>
                                            <li><a href="gutter-repair.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-2.item5') }}</a></li>
                                            <li><a href="lawn-care.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-2.item6') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3 class="footer-title">{{ trans('file.menu-footer-3.header') }}</h3>
                                    <div class="footer-content">
                                        <ul class="ft-list">
                                            <li><a href="tree-plantation.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-3.item1') }}</a></li>
                                            <li><a href="garden-care.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-3.item2') }}</a></li>
                                            <li><a href="watering-garden.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-3.item3') }}</a></li>
                                            <li><a href="garden-design.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-3.item4') }}</a>
                                            </li>
                                            <li><a href="gutter-repair.html"><i class="fa fa-angle-right"
                                                        aria-hidden="true"></i> {{ trans('file.menu-footer-3.item5') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h3 class="footer-title">Produits</h3>
                                    <div class="footer-content">
                                        <ul class="ins-img">
                                            @for ($i = 0; $i < 9; $i++)
                                            <li><a href="/products"><img src="images/products/1 ({{ $i+1 }}).jpg" alt=""></a>
                                            </li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="media-footer">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ftr-btm">
                    <p>© {{ trans('file.rights') }} {{ now()->year }}</p>
                </div>
            </footer>
            <!-- Footer Section End -->


            <!-- Scroll to top -->
            <div class="scroll-to-top bg-default">
                <a href="#" class="scroll-btn" data-target=".page-wrapper"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
            </div>
            <!-- End Scroll To top -->
        </div>
    </div>

    <!-- Scripts -->
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  --}}
    {{--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  --}}

    <!-- All Javascript Plugin File here -->
	<script src="{{ asset('js/base-js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/base-js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/base-js/bootstrap-select.js') }}"></script>
	<script src="{{ asset('js/base-js/jquery.themepunch.plugins.min.js') }}"></script>
	<script src="{{ asset('js/base-js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('js/base-js/YouTubePopUp.jquery.js') }}"></script>
	<script src="{{ asset('js/base-js/jquery.fancybox.pack.js') }}"></script>
	<script src="{{ asset('js/base-js/jquery.fancybox-media.js') }}"></script>
	<script src="{{ asset('js/base-js/owl.js') }}"></script>
	<script src="{{ asset('js/base-js/mixitup.js') }}"></script>
	<script src="{{ asset('js/base-js/validate.js') }}"></script>
	<script src="{{ asset('js/base-js/wow.js') }}"></script>
	<script src="{{ asset('js/base-js/jquery.countdown.js') }}"></script>
	<script src="{{ asset('js/base-js/jquery.barrating.js') }}"></script>
	<script src="{{ asset('js/base-js/rating.js') }}"></script>
	<script src="{{ asset('js/base-js/jquery.cookie.js') }}"></script>
	<script src="{{ asset('js/base-js/bg-color-settings.js') }}"></script>
	<script src="{{ asset('js/base-js/custom.js') }}"></script>
	{{--  <script src="{{ asset('js/base-js/script.js') }}"></script>  --}}
	<script src="{{ asset('js/script.js') }}"></script>
	<!-- use for map style -->
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPZ-Erd-14Vf2AoPW2Pzlxssf6-2R3PPs"></script>
    <script src="{{ asset('js/base-js/map.scripts.js') }}"></script>

    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  --}}
    {{--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  --}}

    {{--  <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>  --}}

    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>  --}}
    {{--  <!-- Custom Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>  --}}
</body>
</html>
