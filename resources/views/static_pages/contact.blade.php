@extends('layouts.app')
@section('title')
    {{ ucfirst(trans('file.menu-top.contact-us')) }}
@endsection



@section('content')

@include('layouts.headline', ['headline' => ucfirst(trans('file.menu-top.contact-us'))])


<!-- Contact Section Start -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title text-center">Get In Touch</h2>
                <span class="sub-title box text-center">Elit ultricies adipiscing ornare. Rutrum sapien aliquet mollis. Pretium condimentum. Cursus elit hac fames laoreet non nec facilisis quis dui. </span>
            </div>
            <div class="col-md-12">
                <div class="cnct-detail">
                    <div class="col-md-3 col-sm-6">
                        <div class="cnct-item">
                            <span><i class="fa fa-map-marker"></i></span>
                            <div>3112 Roy Alley Denver, CO 80216, USA</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="cnct-item">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <div><a href="mailto:ehm@gmail.com">ehm@info.com</a><a href="mailto:ehm@gmail.com"> ehm@gmail.com</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="cnct-item">
                            <span><i class="fa fa-phone"></i></span>
                            <div><a href="callto:0123456789">( +1 ) 507-465-6522</a><br><a href="callto:0123456789">( +1 ) 303-931-3781</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="cnct-item">
                            <span><i class="fa fa-home"></i></span>
                            <div>www.unigreengarden.com<br>www.unigreen.org</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="map-sec bg-gray">
                <div class="col-md-7 col-sm-12">
                    <div id="map">

                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="quote-txt padding-50">
                        <h3 class="title capitalize">{{ trans('file.contact-form.header') }}</h3>
                        <span class="sub-title">Integer. Suscipit mattis vehicula tempor praesent, congue ultricies morbi. Auctor vestibulum. Semper dictumst, libero natoque suspendisse nullam. Scelerisque sit hac.</span>
                        <form id="contact-form" class="contact_message" action="/contact" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <input class="form-control" id="name" type="text" name="name" placeholder="{{ trans('file.contact-form.name') }}" />
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input class="form-control" id="email" type="text" name="email" placeholder="{{ trans('file.contact-form.email') }}" />
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="{{ trans('file.contact-form.subject') }}" />
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    <textarea class="form-control" id="message" name="message" placeholder="{{ trans('file.contact-form.message') }}"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-6">
                                    <input class="btn btn-primary" id="send" type="submit" value="{{ trans('file.contact-form.send-btn') }}" />
                                </div>
                                <div class="col-md-12">
                                    <div class="error-handel">
                                        <div id="success">Your email sent Successfully, Thank you.</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

@endsection
