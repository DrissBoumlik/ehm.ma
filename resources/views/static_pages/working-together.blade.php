@extends('layouts.app')
@section('title')
{{ ucfirst(trans('file.menu-top.working-together')) }}
@endsection



@section('content')

@include('layouts.headline', ['headline' => ucfirst(trans('file.menu-top.working-together'))])

<!-- Working Together Section Start -->
<section id="working-together">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1 center">
                <h3>Nous vous donnons l'opportunité pour faire partie de nos fournisseurs.</h2>
            </div>
            <div class="col-md-4 col-md-offset-2 center">
                <h3>Veuillez remplir le formulaire ci-dessous qui sera envoyé à notre service d'approvisionnement.</h3>
            </div>
        </div>
        <div class="row center mt-30">
            <hr class="section-title-line"/>
            <h3 class="section-title uppercase">Formulaire de demande de fournisseur</h3>
        </div>
        <form id="application-form" class="application_message" action="/careers" method="post">
            @csrf
            <div class="row form-section">
                <div class="col-md-12">
                    <div class="row">
                        <h4 class="sub-section-title uppercase center">section 1: {{ trans('file.working-together-form.supplier-id-section.header') }}</h4>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="first-name" type="text" name="first_name" placeholder="{{ trans('file.working-together-form.supplier-id-section.company-name') }}" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="last-name" type="text" name="last_name" placeholder="{{ trans('file.working-together-form.supplier-id-section.full-address') }}" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="email" type="text" name="email" placeholder="{{ trans('file.working-together-form.supplier-id-section.social-security-number') }}" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="phone" type="text" name="phone" placeholder="{{ trans('file.working-together-form.supplier-id-section.patent') }}" />
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <input class="form-control" id="job" type="text" name="job" placeholder="{{ trans('file.working-together-form.supplier-id-section.id-fiscal-number') }}" />
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <input class="form-control" id="diploma" type="text" name="diploma" placeholder="{{ trans('file.working-together-form.supplier-id-section.trade-register-number') }}" />
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <input class="form-control" id="years-exp" type="text" name="years_exp" placeholder="{{ trans('file.working-together-form.supplier-id-section.website') }}" />
                    </div>
                </div>
            </div>
            <div class="row form-section">
                <div class="col-md-12">
                    <div class="row">
                        <h4 class="sub-section-title uppercase center">section 2: {{ trans('file.working-together-form.general-data-section.header') }}</h4>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="first-name" type="text" name="first_name" placeholder="{{ trans('file.working-together-form.general-data-section.creation-date') }}" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="last-name" type="text" name="last_name" placeholder="{{ trans('file.working-together-form.general-data-section.emplouees-count') }}" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="email" type="text" name="email" placeholder="{{ trans('file.working-together-form.general-data-section.main-activity') }}" />
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <input class="form-control" id="phone" type="text" name="phone" placeholder="{{ trans('file.working-together-form.general-data-section.related-activities') }}" />
                    </div>
                    @for($i = 1; $i < 4; $i++)
                    <div class="form-group col-md-4 col-sm-4">
                        <input class="form-control" id="job" type="text" name="job" placeholder="{{ trans('file.working-together-form.general-data-section.turnover') . ' ' . $i}}" />
                    </div>
                    @endfor
                    <div class="col-md-12 mb-10 mt-30">
                        <h4>{{ trans('file.working-together-form.general-data-section.key-customers') }}</h4>
                    </div>
                    @for($i = 1; $i < 4; $i++)
                    <div class="form-group col-md-4 col-sm-4">
                        <input class="form-control" id="job" type="text" name="job" placeholder="{{ trans('file.working-together-form.general-data-section.customer') . ' ' . $i}}" />
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <input class="form-control" id="diploma" type="text" name="diploma" placeholder="{{ trans('file.working-together-form.general-data-section.city') }}" />
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <input class="form-control" id="years-exp" type="text" name="years_exp" placeholder="{{ trans('file.working-together-form.general-data-section.share-turnover') }}" />
                    </div>
                    @endfor
                    <div class="col-md-12 mb-10 mt-30">
                        <h4>{{ trans('file.working-together-form.general-data-section.quality-references    ') }}</h4>
                    </div>

                </div>
            </div>
        </form>
    </div>
</section>

<!-- Working Together Section End -->
@endsection
