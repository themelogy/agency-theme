@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'contact'])
        @lang('themes::contact.title')
    @endcomponent
    <section class="s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
        <div class="divider-15 d-none d-xl-block"></div>
        <div class="container">
            <div class="row c-mb-30 c-mb-md-50">
                <div class="col-md-4 text-center">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="{{ Theme::url('images/icon1.png') }}" alt="Bizi Arayın">
                        </div>
                    </div>
                    <h6>
                        @lang("themes::contact.contact us")
                    </h6>
                    <p class="teaser-content">
                        @setting('theme::phone')
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="{{ Theme::url('images/icon3.png') }}" alt="Bize Yazın">
                        </div>
                    </div>
                    <h6>
                        @lang("themes::contact.write us")
                    </h6>
                    <p class="teaser-content">
                        <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a>
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="border-icon">
                        <div class="teaser-icon">
                            <img src="{{ Theme::url('images/icon2.png') }}" alt="Lokasyon">
                        </div>
                    </div>
                    <h6>
                        @lang("themes::contact.address")
                    </h6>
                    <p class="teaser-content">
                        {!! setting('theme::address') !!}
                    </p>
                </div>
            </div>
            <div class="divider-60 d-none d-xl-block"></div>
            <div class="row">
                <div class="col-lg-12 ">
                    @includeIf('contact::form')
                </div>
                <!--.col-* -->

                <div class="divider-80 d-none d-xl-block"></div>

            </div>
        </div>
    </section>
@stop
