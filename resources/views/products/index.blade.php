@extends('layouts.app')


@section('content')


<!-- Banner Section Start -->
<div id="banner">
    <div class="container">
        <div class="row padding-80">
            <div class="col-md-6 col-sm-6">
                <h2 class="page-title">Products</h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <ul class="page-location">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="#">.</a></li>
                    <li><a class="active" href="#">Products</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->


<!-- Portfolio Section Start -->
<section class="full-row products-grid bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix anim-3-all">
                        <li class="active filter" data-role="button" data-filter="all">ALL products</li>
                        @foreach ($cities as $city)
                        <li class="filter" data-role="button" data-filter=".{{ $city }}">{{ $city }}</li>
                        @endforeach
                        {{--  <li class="filter" data-role="button" data-filter=".kenitra">kenitra</li>
                        <li class="filter" data-role="button" data-filter=".sidi-yahya">sidi yahya</li>
                        <li class="filter" data-role="button" data-filter=".sefrou">sefrou</li>
                        <li class="filter" data-role="button" data-filter=".fes">fes</li>
                        <li class="filter" data-role="button" data-filter=".beni-mellal">benimellal</li>
                        <li class="filter" data-role="button" data-filter=".marrakech">marrakech</li>  --}}
                    </ul>
                </div>
                <!--Filter List-->
                <div class="row filter-list clearfix">
                    @foreach ($products as $product)
                    <!--Column-->
                    <div class="column mix mix_all {{ $product->city }} col-md-4 col-sm-4 col-xs-12">
                        <!--Default Portfolio Item-->
                        <div class="default-portfolio-item" data-toggle="modal" data-target="#modal-{{ $loop->index }}">
                            <div class="inner-box text-center margin-bottom-30">
                                <!--Image Box-->
                                <figure class="image-box"><img src="{{ $product->image }}" alt="">
                                </figure>
                                <div class="overlay-box">
                                    <div class="inner-content">
                                        <div class="port-content">
                                            <div class="glry-hvr-txt">
                                                {{--  <a href="single-project.html">  --}}
                                                    <h4 class="box-title uppercase">{{ $product->name . ' / ' . $product->city}}</h4>
                                                {{--  </a>  --}}
                                                <p>{{ str_limit($product->description, $limit = 60) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{ $loop->index }}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title uppercase" id="myModalLabel">{{ $product->name }}</h4>
                                    </div>
                                    <!--Image Box-->
                                    <figure class="image-box"><img src="{{ $product->image }}" alt="">
                                    </figure>
                                    <div class="modal-body">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row hidden">
            <div class="col-md-12">
                <div class="pagi-area">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Prev</span>
                                </a> </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" aria-label="Next"> <span aria-hidden="true">Next</span> </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->


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


<div class="container hidden">
    <h2 class="uppercase center">products</h2>
    {{--  @foreach ($products as $city => $_products)
    <div class="row">
        <h4 class="uppercase center upperline city">{{ $city }}</h4>
    </div>
    <div class="row">
        @foreach ($_products as $product)
        <div class="col-md-{{ 12/$_products->count() }}">
            <img src="{{ $product->image }}" alt="" class="product-img">
            <h5 class="uppercase center" id="{{ $product->id }}">{{ $product->name }}</h5>
            <p class="justify">{{ $product->description }}</p>
        </div>
        @endforeach
    </div>
    @if ($loop->index != count($products) - 1)
    <hr class="seperate-line"/>
    @endif
    @endforeach  --}}
</div>
@endsection
