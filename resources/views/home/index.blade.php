@extends ('master')

@section('css')
<!-- Favicons -->
<link type="image/x-icon" href="{{ asset('template')}}/assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('template')}}/assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/fontawesome/css/all.min.css">
		<!-- Daterangepikcer CSS -->
		<link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/daterangepicker/daterangepicker.css">
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{ asset('template')}}/assets/css/bootstrap-datetimepicker.min.css">
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('template')}}/assets/plugins/select2/css/select2.min.css">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ asset('template')}}/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="{{ asset('template')}}/assets/css/owl.theme.default.min.css">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('template')}}/assets/css/style.css">
   
   <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/revolution/css/navigation.css">

    <!-- inject:css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/css/magnificpopup.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template')}}/css/style.css">
@endsection


@section('header')
<header class="header">
				<div class="header-fixed">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index-2.html" class="navbar-brand logo">
							<img src="{{ asset('template')}}/assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index-2.html" class="menu-logo">
								<img src="{{ asset('template')}}/assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							
							</li>
							<li class="login-link">
								<a href='templateView.user.login'>Login / Signup</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
											<li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('LogIn') }}</a>
						</li>
						<li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
																	</ul>
					
				</nav>
				</div>
			</header>
@endsection


@section('slider')

<section class="rev-slider-2 slider-area-2">
    <div class="trusted-fluid">
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" data-version="5.4.1">
                <ul>	<!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="boxfade" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('template')}}/images/onlinemeet2.jpg"  alt=""  data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-3045-layer-1"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['center','center','center','center']"
                             data-voffset="['-113','-113','-113','-92']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['30','30','30','30']"
                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":410,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+4430","speed":800,"frame":"999","to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 8; white-space: nowrap;">
                            <a class="mfp-iframe video-play-btn" href="../../www.youtube.com/watch8844.html?v=dFBKl1pYn0w" title="Play Video">
                                <span class="fontello icon-play"></span>
                            </a>
                        </div><!-- end tp-caption -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-3045-layer-2"
                             data-x="['center','center','center','center']"
                             data-hoffset="['2','2','2','2']"
                             data-y="['middle','middle','middle','middle']"

                             data-voffset="['25','25','10','15']"

                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['70','60','50','40']"
                             data-lineheight="['80', '70', '62', '50']"
                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":860,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+3430","speed":800,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 9; white-space: nowrap;">
                            <h2 class="slide__title">we provide guideline for</h2>
                        </div><!-- end tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-3045-layer-3"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','2','2','2']"
                             data-y="['middle','middle','middle','middle']"

                             data-voffset="['90','90','60','54']"

                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['70','60','50','40']"
                             data-lineheight="['80', '70', '62', '50']"
                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1270,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2730","speed":800,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 9; white-space: nowrap;">
                           <h2 class="slide__title"> board exam students.</h2>
                        </div><!-- end tp-caption -->

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme"
                             id="slide-3045-layer-4"
                             data-x="['center','center','center','center']"
                             data-hoffset=""
                             data-y="['center','center','center','center']"
                             data-voffset="['191','191','150','128']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1470,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2940","speed":800,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 7; white-space: nowrap;">
                            <a href="#" class="get-btn">
                                get started <span class="fontello icon-angle-double-right"></span>
                            </a>
                        </div><!-- end tp-caption -->
                    </li>

                     <!-- SLIDE  -->
                    <li data-index="rs-3046" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-rotate="0"  data-saveperformance="off"  data-title="Parallax" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('template')}}/images/onlinemettingf.jpg"  alt=""  data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption  tp-resizeme rs-parallaxlevel-3"
                             id="slide-3046-layer-1"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']"
                             data-y="['center','center','center','center']"
                             data-voffset="['-113','-113','-113','-92']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['30','30','30','30']"
                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":410,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+4430","speed":800,"frame":"999","to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 8; white-space: nowrap;">
                            <a class="mfp-iframe video-play-btn" href="../../www.youtube.com/watch8844.html?v=dFBKl1pYn0w" title="Play Video">
                                <span class="fontello icon-play"></span>
                            </a>
                        </div><!-- end tp-caption -->

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2"
                             id="slide-3046-layer-2"
                             data-x="['center','center','center','center']"
                             data-hoffset="['2','2','2','2']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['25','25','10','15']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['70','60','50','40']"
                             data-lineheight="['80', '70', '62', '50']"
                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":860,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+3430","speed":800,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 9; white-space: nowrap;">
                            <h2 class="slide__title">we resolving problem</h2>
                        </div><!-- end tp-caption -->

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-1"
                             id="slide-3046-layer-3"
                             data-x="['center','center','center','center']"
                             data-hoffset="['0','2','2','2']"
                             data-y="['middle','middle','middle','middle']"
                             data-voffset="['90','90','60','54']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-fontsize="['70','60','50','40']"
                             data-lineheight="['80', '70', '62', '50']"
                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1270,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2730","speed":800,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 9; white-space: nowrap;">
                           <h2 class="slide__title">by arranging online meeting.</h2>
                        </div><!-- end tp-caption -->

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-1"
                             id="slide-3046-layer-4"
                             data-x="['center','center','center','center']"
                             data-hoffset=""
                             data-y="['center','center','center','center']"
                             data-voffset="['191','191','150','128']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1470,"speed":800,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2940","speed":800,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 7; white-space: nowrap;">
                            <a href="#" class="get-btn">
                                get started <span class="fontello icon-angle-double-right"></span>
                            </a>
                        </div><!-- end tp-caption -->
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div><!-- end fullwidthabanner -->
        </div><!-- END REVOLUTION SLIDER -->
    </div><!-- end trusted-fluid -->
</section><!-- end rev-slider-2 -->
@endsection



@section('jQuery-area')
<script src="{{ asset('template')}}/assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('template')}}/assets/js/popper.min.js"></script>
		<script src="{{ asset('template')}}/assets/js/bootstrap.min.js"></script>
		<!-- Select2 JS -->
		<script src="{{ asset('template')}}/assets/plugins/select2/js/select2.min.js"></script>
		<!-- Datetimepicker JS -->
		<script src="{{ asset('template')}}/assets/js/moment.min.js"></script>
		<script src="{{ asset('template')}}/assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="{{ asset('template')}}/assets/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Owl Carousel -->
		<script src="{{ asset('template')}}/assets/js/owl.carousel.min.js"></script>		
		<!-- Sticky Sidebar JS -->
        <script src="{{ asset('template')}}/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="{{ asset('template')}}/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		<!-- Circle Progress JS -->
		<!-- <script src="assets/js/circle-progress.min.js"></script> -->
		<!-- Custom JS -->
		<script src="{{ asset('template')}}/assets/js/script.js"></script>
      <script src="{{ asset('template')}}/js/jquery.min.js"></script>
<script src="{{ asset('template')}}/js/popper.min.js"></script>
<script src="{{ asset('template')}}/js/bootstrap.min.js"></script>
<script src="{{ asset('template')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('template')}}/js/magnificpopup.js"></script>
<script src="{{ asset('template')}}/js/waypoints.min.js"></script>
<script src="{{ asset('template')}}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('template')}}/js/main.js"></script>

<!-- Slider Revolution core JavaScript files -->
<script src="{{ asset('template')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('template')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ asset('template')}}/js/rev-slider-script-2.js"></script>
<script>

    //magnificpopup video
    (function($){
        $(document).ready(function() {
            $('.video-play-btn').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    })(jQuery)


    // counter up
    $('.counter').counterUp({
        delay: 50,
        time: 5000
    });


@endsection





