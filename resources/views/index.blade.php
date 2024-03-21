@extends('layouts.app')


@section('title')
    {{ ucfirst(trans('file.menu-top.home')) }}
@endsection

@section('content')

<div class="container-fluid feature" style="height: 600px;">
    <div class="_container">
        <!--  -->

        <div class="carousel-container">
            <div class="row">
                <div class="carousel slide feature-carousel" data-ride="carousel" id="quote-carousel"
                    data-interval="false">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                        @for ($i = 0; $i < count(Lang::get('file.home-page.slider')); $i++)
                            <div class="item {{ $i == 0 ? 'active' : '' }}">
                                <div class="row">
                                    <div class="feature-txt col-sm-12 col-md-12">
                                        <h1 class="bg-dark-lighter"> {{ trans('file.home-page.slider.slide-' . $i . '.header') }}</h1></br>
                                        <p class="no-margin bg-dark-lighter">{{ trans('file.home-page.slider.slide-' . $i . '.text') }}</p><br />
                                        <button class="btn btn-primary">{{ trans('file.home-page.slider.slide-' . $i . '.button') }}</button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <!-- Carousel Buttons Next/Prev -->
                    <div class="left carousel-control">
                        <a data-slide="prev" href="#quote-carousel" class=""><i
                                class="fa fa-chevron-left"></i></a>
                    </div>
                    <div class="right carousel-control">
                        <a data-slide="next" href="#quote-carousel" class=""><i
                                class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Mission Statement -->
<section class="full-row background-7">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="700ms"
                    style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                    <h2 class="title uppercase">{{ trans('file.home-page.about-us.header') }}<span>{{ trans('file.home-page.about-us.brand') }}</span></h2>
                    <div class="sub-title">
                        <p>{{ trans('file.home-page.about-us.text-1') }}</p>
                        <p>{{ trans('file.home-page.about-us.text-2') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img class="none-mobile" src="images/fruits.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Mission Statement -->


<!-- Products Slide -->
<section class="full-row no-padding products">
    <div class="container-fluid">
        <div class="row">
            <div class="">
                <div class="infinite_slide">
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (1).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">grenade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (2).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">poire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (3).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">myrtille</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (4).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">raisins</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (5).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">kaki</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (6).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">figue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (7).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">pomme</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (8).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">cerise</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-grid">
                            <div class="item-img">
                                <img src="images/products/1 (9).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">prune</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Products Slide -->



<!-- Promo Video -->
<section class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="intro-video">
                    <a class="video-popup" href="https://vimeo.com/173404890" title="video popup"><span
                            class="play flaticon-play-button"></span></a>
                    <!-- Use youtube or Vimeo video link in href, first open the video and just copy the link from url and past here -->
                </div>
            </div>
            <div class="col-md-7">
                <div class="about-txt wow fadeInRight mgl-10" data-wow-delay="300ms"
                    data-wow-duration="500ms">
                    <h2 class="title uppercase"><span>{{ trans('file.home-page.about-us.brand') }}</span> {{ trans('file.home-page.mission.header') }}</h2>
                    <div class="sub-title">
                        <p>{{ trans('file.home-page.mission.text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Promo Video -->

<!-- Services -->
<section class="full-row bg-gray no-padding no-overflow our-services">
    <div class="container-fluid">
        <div class="row flex-box">
            <div class="col-md-5 col-sm-5 choose_us2_banner none-mobile">
                <img src="images/quote/1.png" style="visibility: hidden" alt="">
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="col-md-12 no-padding-mobile padding-80">
                    <h2 class="title wow fadeInRight uppercase center" data-wow-delay="300ms"
                        data-wow-duration="700ms">{{ trans('file.home-page.our-services.header') }}</h2>
                    <div class="text-area">
                        <ul class="choose-reason">
                            @for ($i = 0; $i < count(Lang::get('file.home-page.our-services.services')); $i++)
                            <li {{ $i == count(Lang::get('file.home-page.our-services.services')) - 1 && $i % 2 == 0 ? 'class=full-width' : '' }}>
                                <i class="flaticon-check-1"></i>
                                <div class="li-box">
                                    <h5 class="inner-title">{{ trans('file.home-page.our-services.services.service-' . $i . '.title') }}</h5>
                                    <span>{{ trans('file.home-page.our-services.services.service-' . $i . '.description') }}</span>
                                </div>
                            </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services -->

<!-- Values -->
<section class="full-row our-values">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title down-line text-center wow fadeInUp uppercase" data-wow-delay="300ms"
                    data-wow-duration="700ms">{{ trans('file.home-page.our-values.header') }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service-grid-3 margin-top-15">
                    @for ($i = 0; $i < count(Lang::get('file.home-page.our-values.values')); $i++)
                    <div class="item">
                        <div class="bg-gray item-style-3 text-center">
                            <div class="srvc-icon box-round-white"><span class="{{ trans('file.home-page.our-values.values.value-' . $i . '.icon') }}"></span>
                            </div>
                            <a href="#">
                                <h4 class="inner-title">{{ trans('file.home-page.our-values.values.value-' . $i . '.title') }}</h4>
                            </a>
                            <a class="margin-top-20 btn btn-primary" href="#">{{ trans('file.home-page.our-values.values.value-' . $i . '.button') }}</a>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Values -->

<!-- Events -->
<section class="full-row bg-gray events">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title text-center down-line wow fadeInUp uppercase" data-wow-delay="300ms"
                    data-wow-duration="700ms">{{ trans('file.home-page.events.header') }}</h2>
            </div>
        </div>
        <div class="row margin-top-15">
            <div class="col-md-12">
                <div class="service-grid">
                    @foreach ($events as $event)
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box-image">
                            <div class="grid-img">
                                <a href="tree-plantation.html"><img src="{{ $event->image }}" alt="{{ $event->title }}"></a>
                            </div>
                            <div class="service-grid-txt">
                                <span>{{ (new Carbon\Carbon($event->start_date))->format('F d, Y') }}</span>
                                <h3 class="sec-title uppercase"><a href="tree-plantation.html">{{ \Str::limit($event->title, $limit = 20) }}</a></h3>
                                <p>{{ \Str::limit($event->description, $limit = 60) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center"><a class="btn btn-primary" href="/events">{{ trans('file.home-page.events.button') }}</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Events -->

<section class="assurance-quality">
    <img src="images/_globalgap.png" alt="">
</section>

<!-- Get In Touch Section Start -->
<section class="full-row bg-default get-in-touche">
    <div class="container">
        <div class="row">
            <div class="get-tch full-row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <h4 class="banner-title color-white no-margin">Zenith Center 1er étage, Bureau N101,
                        Avenue Anakhir, Rabat, Maroc info@ehm.ma + 212 (0) 5 30 11 00 00</h4>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 box-right-middle">
                    <a class="btn btn-large" href="#">contactez nous</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get In Touch Section End -->

@endsection
