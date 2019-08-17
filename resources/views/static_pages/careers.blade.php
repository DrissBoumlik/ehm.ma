@extends('layouts.app')
@section('title')
{{ ucfirst(trans('file.menu-top.careers')) }}
@endsection



@section('content')

@include('layouts.headline', ['headline' => ucfirst(trans('file.menu-top.careers'))])


<!-- Contact Section Start -->
<section id="careers">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img src="/images/tree.png" alt="">
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="quote-txt padding-50">
                    <h3 class="title capitalize">{{ trans('file.contact-form.header') }}</h3>
                    <span class="sub-title">Integer. Suscipit mattis vehicula tempor praesent, congue ultricies morbi. Auctor vestibulum. Semper dictumst, libero natoque suspendisse nullam. Scelerisque sit hac.</span>
                    <form id="application-form" class="application_message" action="/careers" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <input class="form-control" id="first-name" type="text" name="first_name" placeholder="{{ trans('file.career-form.first-name') }}" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <input class="form-control" id="last-name" type="text" name="last_name" placeholder="{{ trans('file.career-form.last-name') }}" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <input class="form-control" id="email" type="text" name="email" placeholder="{{ trans('file.career-form.email') }}" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <input class="form-control" id="phone" type="text" name="phone" placeholder="{{ trans('file.career-form.phone') }}" />
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <input class="form-control" id="job" type="text" name="job" placeholder="{{ trans('file.career-form.job') }}" />
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <input class="form-control" id="diploma" type="text" name="diploma" placeholder="{{ trans('file.career-form.diploma') }}" />
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <input class="form-control" id="years-exp" type="text" name="years_exp" placeholder="{{ trans('file.career-form.years-exp') }}" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <div class="custom-file">
                                    <input type="file" class="form-control" id="upload-cv" name="upload_cv">
                                    <label class="custom-file-label" for="upload-cv">{{ trans('file.career-form.upload-cv') }}</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <div class="custom-file">
                                    <input type="file" class="form-control" id="upload-letter" name="upload_letter">
                                    <label class="custom-file-label" for="upload-letter">{{ trans('file.career-form.upload-letter') }}</label>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <textarea class="form-control message" id="application_message" name="application_message" placeholder="{{ trans('file.career-form.message') }}"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-6">
                                <input class="btn btn-primary" id="send" type="submit" value="send" />
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
</section>
<!-- Contact Section End -->

@endsection
