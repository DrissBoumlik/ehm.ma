@extends('layouts.app')


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
                        <!-- Quote 1 -->
                        <div class="item active">
                            <div class="row">
                                <div class="feature-txt col-sm-12 col-md-12">
                                    <h1 class="bg-dark-lighter">Elite Harvest</h1><br>
                                    <p class="no-margin bg-dark-lighter">Nous inspirons tout le monde à
                                        atteindre l'objectif ultime de « <span class="uppercase">Société
                                            saine</span> »</p><br />
                                    <button class="btn btn-primary">voir plus</button>
                                </div>
                            </div>
                        </div><!-- Quote 2 -->
                        <div class="item">
                            <div class="row">
                                <div class="feature-txt col-sm-12 col-md-12">
                                    <h1 class="bg-dark-lighter">Elite Harvest</h1><br>
                                    <p class="no-margin bg-dark-lighter">Nous inspirons tout le monde à
                                        atteindre l'objectif ultime de « <span class="uppercase">Société
                                            saine</span> »</p><br />
                                    <button class="btn btn-primary">voir plus</button>
                                </div>
                            </div>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <div class="row">
                                <div class="feature-txt col-sm-12 col-md-12">
                                    <h1 class="bg-dark-lighter">Elite Harvest</h1><br>
                                    <p class="no-margin bg-dark-lighter">Nous inspirons tout le monde à
                                        atteindre l'objectif ultime de « <span class="uppercase">Société
                                            saine</span> »</p><br />
                                    <button class="btn btn-primary">voir plus</button>
                                </div>
                            </div>
                        </div>
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
                    <h2 class="title uppercase">à propos d'<span>elite harverst</span></h2>
                    <div class="sub-title">
                        <p>Elite Harvest Maroc (EHM) est l'un des principaux producteurs et distributeurs de
                            fruits frais de la région. Nos principaux objectifs sont la qualité et
                            l’accessibilité économique. Nous cultivons, recherchons, importons et
                            commercialisons une vaste gamme de produits agricoles de haute qualité grâce à
                            une technologie de classe mondiale et à une chaîne de distribution efficace.</p>
                        <p>Nous accordons également la priorité à l'utilisation économique de nos précieuses
                            ressources naturelles - eau, énergie et terres.</p>
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
                <div class="project_slide">
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (1).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">grenade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (2).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">poire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (3).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">myrtille</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (4).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">raisins</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (5).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">kaki</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (6).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">figue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (7).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">pomme</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
                                <img src="images/products/1 (8).jpg" alt="">
                                <div class="overlay"><a href="#" class="btn btn-default">cerise</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="project-grid">
                            <div class="project-img">
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
                    <h2 class="title"><span>ELITE HARVEST</span> EVERYWHERE IN MOROCCO</h2>
                    <div class="sub-title">
                        <p>Elite Harvest Maroc vise l’écriture d’une nouvelle histoire verte sur les terres
                            du Maroc . On est l’un des principaux producteurs et distributeurs des fruits
                            frais quotidiens dans la région et notre objectif principal est toujours la
                            qualité et l’abordabilité . On s’engage dans la croissance , l’approvisionnement
                            , l’importation et la commercialisation d’une vaste gamme de produits agricoles
                            d’une haute qualité à travers la technologie de la classe mondiale et l’efficace
                            chaine de distribution avec l’utilisation la plus économique de notre ressources
                            naturelles conservant l’eau , l’énergie et la terre .</p>
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
                        data-wow-duration="700ms">nos services</h2>
                    <div class="text-area">
                        <ul class="choose-reason">
                            <li>
                                <i class="flaticon-check-1"></i>
                                <div class="li-box">
                                    <h5 class="inner-title">Gestion des projets agricoles</h5>
                                    <span>Nous entreprenons l’agriculture à grande échelle et possédons la
                                        capacité
                                        de fournir des conseils spécialisés et un service de qualité
                                        ...</span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                <div class="li-box">
                                    <h5 class="inner-title">Développemene agricole</h5>
                                    <span>FamNous utilisons les nouvelles technologies avec un accent pointu
                                        sur
                                        les pratiques agricoles détaillées visant à maximiser la quantité de
                                        production...</span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                <div class="li-box">
                                    <h5 class="inner-title">Gestion des fermes</h5>
                                    <span>Nous offrons des services de gestion agricole productifs et
                                        rentables en
                                        utilisant les dernières technologies, combinant les ressources
                                        locales
                                        et internationales…</span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-check-1"></i>
                                <div class="li-box">
                                    <h5 class="inner-title">Conseil en irrigation</h5>
                                    <span>La plupart des entreprises agricoles, grandes ou petites,
                                        dépendent de
                                        l’irrigation pour produire des fruits et légumes frais de grande
                                        qualité. Mais il y a plusieurs défis à relever…</span>
                                </div>
                            </li>
                            <li class="full-width">
                                <i class="flaticon-check-1"></i>
                                <div class="li-box">
                                    <h5 class="inner-title">Services de laboratoire</h5>
                                    <span>Nous voulons contribuer à l’importation des dernières technologies
                                        agricoles et du savoir-faire vers le pays et aussi encourager et
                                        soutenir pour les adapter aux conditions du Maroc…</span>
                                </div>
                            </li>
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
                    data-wow-duration="700ms">nos valeurs</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service-grid-3 margin-top-15">
                    <div class="item">
                        <div class="bg-gray item-style-3 text-center">
                            <div class="srvc-icon box-round-white"><span class="flaticon-nature-3"></span>
                            </div>
                            <a href="tree-plantation.html">
                                <h4 class="inner-title">Adhésion à la qualité</h4>
                            </a>
                            <a class="margin-top-20 btn btn-primary" href="tree-plantation.html">Read
                                More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-gray item-style-3 text-center">
                            <div class="srvc-icon box-round-white"><span class="flaticon-travel"></span>
                            </div>
                            <a href="garden-care.html">
                                <h4 class="inner-title">Favoriser la croissance agricole par l’innovation
                                </h4>
                            </a>
                            <a class="margin-top-20 btn btn-primary" href="garden-care.html">Read More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-gray item-style-3 text-center">
                            <div class="srvc-icon box-round-white"><span class="flaticon-nature-1"></span>
                            </div>
                            <a href="watering-garden.html">
                                <h4 class="inner-title">Travailler avec la durabilité à l’esprit</h4>
                            </a>
                            <a class="margin-top-20 btn btn-primary" href="watering-garden.html">Read
                                More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-gray item-style-3 text-center">
                            <div class="srvc-icon box-round-white"><span class="flaticon-plant"></span>
                            </div>
                            <a href="garden-design.html">
                                <h4 class="inner-title">Agir avec intégrité</h4>
                            </a>
                            <a class="margin-top-20 btn btn-primary" href="garden-design.html">Read More</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="bg-gray item-style-3 text-center">
                            <div class="srvc-icon box-round-white"><span class="flaticon-plant"></span>
                            </div>
                            <a href="garden-design.html">
                                <h4 class="inner-title">Engagement envers la responsabilité sociale</h4>
                            </a>
                            <a class="margin-top-20 btn btn-primary" href="garden-design.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Values -->

<!-- Events -->
<section class="full-row bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title text-center down-line wow fadeInUp uppercase" data-wow-delay="300ms"
                    data-wow-duration="700ms">événements</h2>
                <span class="sub-title box text-center wow fadeIn" data-wow-delay="500ms"
                    data-wow-duration="700ms">Elit ultricies adipiscing ornare. Rutrum sapien aliquet
                    mollis. Pretium condimentum. Cursus elit hac fames laoreet non nec facilisis quis
                    dui.</span>
            </div>
        </div>
        <div class="row margin-top-15">
            <div class="col-md-12">
                <div class="service-grid">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box-image">
                            <div class="grid-img">
                                <a href="tree-plantation.html"><img src="images/our_service/1.png"
                                        alt=""></a>
                            </div>
                            <div class="service-grid-txt">
                                <span>Juin 12, 2017</span>
                                <h3 class="sec-title uppercase"><a href="tree-plantation.html">the award of
                                        the best investor 2017</a></h3>
                                <p>His highness The Prince Moulay Rachid has chaired on Thursday 20th April
                                    2017 the ceremony...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box-image">
                            <div class="grid-img">
                                <a href="tree-plantation.html"><img src="images/our_service/2.png"
                                        alt=""></a>
                            </div>
                            <div class="service-grid-txt">
                                <span>Juin 12, 2017</span>
                                <h3 class="sec-title uppercase"><a href="tree-plantation.html">the award of
                                        the best investor 2017</a></h3>
                                <p>His highness The Prince Moulay Rachid has chaired on Thursday 20th April
                                    2017 the ceremony...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box-image">
                            <div class="grid-img">
                                <a href="tree-plantation.html"><img src="images/our_service/3.png"
                                        alt=""></a>
                            </div>
                            <div class="service-grid-txt">
                                <span>Juin 12, 2017</span>
                                <h3 class="sec-title uppercase"><a href="tree-plantation.html">the award of
                                        the best investor 2017</a></h3>
                                <p>His highness The Prince Moulay Rachid has chaired on Thursday 20th April
                                    2017 the ceremony...</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><a class="btn btn-primary" href="#">Voir Plus</a></div>
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
