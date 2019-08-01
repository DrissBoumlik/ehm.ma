(function($) {
	"use strict";
	//Cache jQuery Selector
	var $window		     = $(window),
		$carousel	     = $('.work-carousel'),
		$dropdown	     = $('.dropdown-toggle'),
		$header		     = $('#header'),
		$our_team	     = $('.our_team_member'),
		$client_feedback = $('.client-feedback'),
		$srv_slide	     = $('.service-slider'),
		$recent_slider	 = $('.recent-product-slider'),
		$single_pro_imge = $('.single-product-slider'),
		$projectimg	     = $('.project-images'),
		$brand		     = $('.partner-slider'),
		$contact	     = $('#contact-form'),
		$apply           = $('#application-form'),
		$related_product = $('.related-product'),
		$service_grid	 = $('.service-grids'),
		$service_grid_2	 = $('.service-grid-3'),
		$project_grid	 = $('.infinite_slide'),
		$testimonial	 = $('.client-testimonial2'),
		$recent_review	 = $('.recent-review');

	/* Table of jQuery settings list

		1. Preloader For Hide loader
		2. Bootstrap slider pause time
		3. dropdown submenu on hover in desktopand dropdown sub menu on click in mobile
		4. Cart dropdown submenu on hover in desktopand dropdown sub menu on click in mobile
		5. Update Header Style + Scroll to Top Unigreen
		6. Submenu Dropdown Toggle
		7. Auto active class adding with navigation
		8. Event time counter settings
		9. Revolution Slider
		10. Our Team Carousel Unigreen
		11. Client Feedback coursul Unigreen
		12. Single Service Slider Unigreen
		13. Recent Product Slider Unigreen
		14. Single Product image Slider Unigreen
		15. Related Product Unigreen
		16. Service Grid Slide
		17. Project Grid Slide
		18. Testimonial Slide Unigreen
		19. Recent Review Slide Unigreen
		20. Use for Accordion Box
		21. Fact Counter For Achivement Counting  Unigreen
		22. LightBox / Fancybox
		23. Gallery With Filters List
		24. Scroll to a Specific Div
		25. Click Search Icon and Open Search Field
		26. Contact Form Validation
		27. Elements Animation
		28. When document is Scrollig, do
		29. When document is loading, do
		30. Youtube and Vimeo video popup control

	*/

	// 1. Preloader For Hide loader  Unigreen
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(500).fadeOut(500);
			$('body').removeClass('page-load');
		}
	}

	// 2. Bootstrap slider pause time
	$('.carousel').carousel({
	  interval: 6000,  // Slider Pause time
	  pause: "hover"
	});

	// 3. dropdown submenu on hover in desktopand dropdown sub menu on click in mobile

	$('#bs-example-navbar-collapse-1').each(function() {
		$dropdown.on('click', function(){
			if($window.width() < 992){
				if($(this).parent('.dropdown').hasClass('visible')){
					$(this).parent('.dropdown').children('.dropdown-menu').first().stop(true, true).slideUp(300);
					$(this).parent('.dropdown').removeClass('visible');
				}
				else{
					$(this).parent('.dropdown').children('.dropdown-menu').stop(true, true).slideDown(300);
					$(this).parent('.dropdown').addClass('visible');
				}
			}
		});

		$window.on('resize', function(){
			if($window.width() > 991){
				$('.dropdown-menu').removeAttr('style');
				$('.dropdown ').removeClass('visible');
			}
		});

	});

	// 4. Cart dropdown submenu on hover in desktopand dropdown sub menu on click in mobile
	$('#bs-example-navbar-collapse-1').each(function() {

			$('.cart-dropdown').click(function(e) {
				if($window.width() > 992){
					e.stopPropagation();
				}
			});
	});

	// 5. Update Header Style + Scroll to Top Unigreen
	function headerStyle() {
		if($header.length){
			var windowpos = $window.scrollTop();
			if (windowpos >= 200) {
				$header.addClass('fixed-header');
			} else {
				$header.removeClass('fixed-header');
			}
		}
	}

	// 6. Submenu Dropdown Toggle
	if($('.main-menu li.dropdown ul').length){
		$('.main-menu li.dropdown').append('<div class="dropdown-btn"></div>');

		//Dropdown Button
		$('.main-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});

		//Disable dropdown parent link
		$('.navigation li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}

	// 7. Auto active class adding with navigation
	$window.on('load', function(){
		var current = location.pathname;
		var $path = current.substring(current.lastIndexOf('http://unicoderbd.com/') + 1);
		$('.navbar-nav li a').each(function(e){
			var $this = $(this);
			// if the current path is like this link, make it active
			if($path == $this.attr('href')){
				$this.parent('li').addClass('active');
			}
			else if($path == ''){
				$('.navbar-nav li.first').addClass('active');
			}
		})
	})

	 // 8. Event time counter settings
	  $('[data-countdown]').each(function() {
		var $this = $(this),
			finalDate = $(this).data('countdown');

		$this.countdown(finalDate, function(event) {
		  $this.html(event.strftime('<span>%D<br><i>Days</i></span> <span>%H<br><i>Hour</i></span> <span>%M<br><i>Min</i></span> <span>%S<br><i>Sec</i></span>'));
		});
	  });

	// 9. Revolution Slider
	if($('.revolution-slider .tp-banner').length){

		jQuery('.revolution-slider .tp-banner').show().revolution({

		  dottedOverlay:"none",
			delay:16000,
			startwidth:1170,
			startheight:800,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:"round",

			touchenabled:"on",
			onHoverStop:"on",

			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			keyboardNavigation:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:50,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			spinner:"spinner4",

			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			videoJsPath:"rs-plugin/videojs/",
			fullScreenOffsetContainer: ""
	  });

	}

	// 10. Our Team Carousel Unigreen
	if ($our_team.length) {
		$our_team.owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			autoplayHoverPause:false,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span>PREV</span>', '<span>NEXT</span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1024:{
					items:3
				},
				1200:{
					items:4
				}
			}
		});
	}

	// 11. Client Feedback coursul Unigreen
	if ($client_feedback.length) {
		$client_feedback.owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			autoplayHoverPause:true,
			autoplay: true,
			smartSpeed: 700,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			responsive:{
				0:{
					items:1,
					slideBy:2
				},
				600:{
					items:1,
					slideBy:1
				},
				760:{
					items:1,
					slideBy:1
				},
				1024:{
					items:2,
					slideBy:2
				},
				1200:{
					items:2,
					slideBy:2
				}
			}
		});
	}

	// 12. Single Service Slider Unigreen
	if ($srv_slide.length) {
		$srv_slide.owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			dots: true,
			autoplayHoverPause:false,
			autoplay: true,
			smartSpeed: 700,
			animateOut: 'slideOutUp',
  			animateIn: 'slideInUp',
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				760:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});
	}

	// 13. Recent Product Slider Unigreen
	if ($recent_slider.length) {
		$recent_slider.owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots: false,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			autoplayHoverPause:false,
			autoplay: false,
			smartSpeed: 700,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				760:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});
	}

	// 14. Single Product image Slider Unigreen
	if ($single_pro_imge.length) {
		$single_pro_imge.owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots: false,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			autoplayHoverPause:false,
			autoplay: false,
			smartSpeed: 700,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				760:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});
	}

	// 15. Related Product Unigreen
	if ($related_product.length) {
		$related_product.owlCarousel({
			loop:true,
			margin:20,
			nav:false,
			dots: false,
			autoplayHoverPause:true,
			autoplay: true,
			smartSpeed: 400,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				760:{
					items:2
				},
				1024:{
					items:2
				},
				1100:{
					items:3
				}
			}
		});
	}

	// 16. Service Grid Slide
	if ($service_grid.length) {
		$service_grid.owlCarousel({
			loop:true,
			margin:20,
			nav:false,
			dots: true,
			autoplayHoverPause:true,
			autoplay: false,
			smartSpeed: 400,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			responsive:{
				0:{
					items:1,
					slideBy:1
				},
				600:{
					items:2,
					slideBy:2
				},
				760:{
					items:2,
					slideBy:2
				},
				1024:{
					items:2,
					slideBy:2
				},
				1100:{
					items:4,
					slideBy:4
				}
			}
		});
	}

	// 17. Service Grid Slide 2
	if ($service_grid_2.length) {
		$service_grid_2.owlCarousel({
			loop:false,
			margin:20,
			nav:false,
			dots: false,
			autoplayHoverPause:true,
			autoplay: false,
			smartSpeed: 400,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			responsive:{
				0:{
					items:1,
					slideBy:1
				},
				600:{
					items:2,
					slideBy:2
				},
				760:{
					items:2,
					slideBy:2
				},
				1024:{
					items:2,
					slideBy:2
				},
				1100:{
					items:5,
					slideBy:0
				}
			}
		});
	}

	// 18. Project Grid Slide
	if ($project_grid.length) {
		$project_grid.owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			dots: true,
			autoplayHoverPause:true,
			autoplay: true,
			smartSpeed: 400,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			responsive:{
				0:{
					items:1,
					slideBy:1
				},
				600:{
					items:2,
					slideBy:2
				},
				760:{
					items:2,
					slideBy:2
				},
				1024:{
					items:2,
					slideBy:2
				},
				1100:{
					items:4,
					slideBy:4
				}
			}
		});
	}

	// 19. Testimonial Slide Unigreen
	if ($testimonial.length) {
		$testimonial.owlCarousel({
			loop:true,
			margin:20,
			nav:true,
			dots: false,
			autoplayHoverPause:true,
			autoplay: true,
			smartSpeed: 400,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				760:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});
	}

	// 20. Recent Review Slide Unigreen
	if ($recent_review.length) {
		$recent_review.owlCarousel({
			loop:true,
			margin:20,
			nav:false,
			dots: true,
			autoplayHoverPause:true,
			autoplay: true,
			smartSpeed: 400,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				760:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});
	}

	// 21. Use for Accordion Box
	if($('.according_details').length){
		$('.according_title').on('click', function() {

			if($(this).hasClass('active')){
				$(this).addClass('active');
			}

			//if ($(this).next('.according_details').is(':visible')){
//				$(this).removeClass('active');
//			}
			else{
				$('.according_title').removeClass('active');
				$('.according_details').slideUp(300);
				$(this).addClass('active');
				$(this).next('.according_details').slideDown(300);
			}
		});
	}

	// 22. Fact Counter For Achivement Counting  Unigreen
	function factCounter() {
		if($('.fact-counter').length){
			$('.fact-counter .count.animated').each(function() {

				var $t = $(this),
					n = $t.find(".count-num").attr("data-stop"),
					r = parseInt($t.find(".count-num").attr("data-speed"), 10);

				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function() {
							$t.find(".count-num").text(Math.floor(this.countNum));
						},
						complete: function() {
							$t.find(".count-num").text(this.countNum);
						}
					});
				}

				//set skill building height

					var size = $(this).children('.progress-bar').attr('aria-valuenow');
					$(this).children('.progress-bar').css('width', size+'%');

			});
		}
	}

	// 23. LightBox / Fancybox
	if($('.img_view').length) {
		$('.img_view').fancybox({
			openEffect  : 'elastic',
			closeEffect : 'elastic',
			helpers : {
				media : {}
			}
		});
	}

	// 24. Gallery With Filters List
	if($('.filter-list').length){
		$('.filter-list').mixItUp({});
	}

	// 25. Scroll to a Specific Div
	if($('.scroll-btn').length){
		$(".scroll-btn").on('click', function(e) {
			e.preventDefault();
			var HeaderHeight = $('.header-lower').height();
			var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
            scrollTop: $(target).offset().top }, 1000);

		});
	}

	// 26. Click Search Icon and Open Search Field

	var $srcicon = $('.hvr-src a'),
		$srcfield = $('#search');
	$srcicon.on('click', function(event){
		event.preventDefault();
		$srcfield.addClass('visible');
		event.stopPropagation();
	});

	$('.src-close').on('click', function(){
		$srcfield.removeClass('visible');
	});

	$srcfield.on('click', function(event){
		event.stopPropagation();
	});

	$window.on('click', function(event){
		$srcfield.removeClass('visible');
	});

	// 27. Contact Form Validation
	if($contact.length){
		$contact.validate({  //#contact-form contact form id
			rules: {
				name: {
					required: true    // Field name here
				},
				email: {
					required: true, // Field name here
					email: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			},

			messages: {
                name: "Please enter your Name", //Write here your error message that you want to show in contact form
                email: "Please enter valid Email", //Write here your error message that you want to show in contact form
                subject: "Please enter your Subject", //Write here your error message that you want to show in contact form
				message: "Please write your Message" //Write here your error message that you want to show in contact form
            },

            submitHandler: function (form) {
                $('#send').attr({'disabled' : 'true', 'value' : 'Sending...' });
                $.ajax({
                    type: "POST",
                    url: "contact",
                    data: $(form).serialize(),
                    success: function (response) {
                        $('#send').removeAttr('disabled').attr('value', 'Send');
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 5000);
                        console.log(response);
                        // form.reset();
                    },
                    error: function() {
                        $('#send').removeAttr('disabled').attr('value', 'Send');
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 5000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

		});
    }

    // 27-bis. Apply Form Validation
	if($apply.length){

		$apply.validate({  //#contact-form contact form id
			rules: {
				first_name: {
					required: true    // Field name here
                },
                last_name: {
					required: true    // Field name here
				},
				email: {
					required: true, // Field name here
					email: true
                },
                phone: {
					required: true    // Field name here
				},
				job: {
					required: true
                },
                diploma: {
					required: true    // Field name here
                },
                years_exp: {
					required: true    // Field name here
                },
                upload_cv: {
					required: true    // Field name here
                },
                upload_letter: {
					required: true    // Field name here
				},
				application_message: {
					required: true
				}
			},

			messages: {
                first_name: "Please enter your First Name", //Write here your error message that you want to show in contact form
                last_name: "Please enter your Last Name", //Write here your error message that you want to show in contact form
                email: "Please enter valid Email", //Write here your error message that you want to show in contact form
                phone: "Please enter valid Phone", //Write here your error message that you want to show in contact form
                job: "Please enter the job", //Write here your error message that you want to show in contact form
                diploma: "Please enter your diploma", //Write here your error message that you want to show in contact form
                years_exp: "Please enter a valid number", //Write here your error message that you want to show in contact form
                upload_cv: "Please upload your cv", //Write here your error message that you want to show in contact form
                upload_letter: "Please upload your letter", //Write here your error message that you want to show in contact form
				application_: "Please write your Message" //Write here your error message that you want to show in contact form
            },

            submitHandler: function (form) {

                var formdata = false;
                console.log(window.FormData);
                if (window.FormData){
                    formdata = new FormData(form);
                }
                console.log(formdata);
                // return;
                $('#send').attr({'disabled' : 'true', 'value' : 'Sending...' });
                $.ajax({
                    type: "POST",
                    url: "careers",
                    data: formdata, //$(form).serialize(),
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        $('#send').removeAttr('disabled').attr('value', 'Send');
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 5000);
                        console.log(response);
                        // form.reset();
                    },
                    error: function() {
                        $('#send').removeAttr('disabled').attr('value', 'Send');
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 5000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

		});
	}

	// 28. Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}

	// 29. Acive scroll top button
	function jumptotop(){
		var $scrollsize = $window.scrollTop();
		if($scrollsize > 300){
			$('.scroll-to-top').fadeIn(1000);
		}
		else {
			$('.scroll-to-top').fadeOut(1000);
		}
	}

   // 30. When document is Scrollig, do

	$window.on('scroll', function() {
		jumptotop();
		headerStyle();
		factCounter();
	});

   // 31. When document is loading, do

	$window.on('load', function() {
		handlePreloader();
		//enableMasonry();
	});

	// 32. Youtube and Vimeo video popup control
	jQuery(function(){
		jQuery("a.video-popup").YouTubePopUp();
		//jQuery("a.video-popup").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
	});

	// 16. Put slider space for nav not in mini screen
	 if(document.querySelector('.nav-on-top') !== null) {
		var get_height = jQuery('.nav-on-top').height();
			if(get_height > 0 && $window.width() > 991){
			jQuery('#banner, #slider').css('margin-top', get_height);
		}
		$window.on('resize', function(){
			if($window.width() < 991){
				jQuery('#banner, #slider').css('padding-top', '0');
			}
			else {
				jQuery('#banner, #slider').css('margin-top', get_height);
			}
		});
	 }
	 if(document.querySelector('.nav-on-banner') !== null) {
		var get_height = jQuery('.nav-on-banner').height();
			if(get_height > 0 && $window.width() > 991){
			jQuery('#banner').css('padding-top', get_height);
		}
		$window.on('resize', function(){
			if($window.width() < 991){
				jQuery('#banner').css('padding-top', '0');
			}
			else {
				jQuery('#banner').css('padding-top', get_height);
			}
		});
	 }

})(jQuery);
