@extends("layouts.master")

@section('content')

    @component('partials.components.title', ['breadcrumbs'=>'portfolio.index'])
        Portföyler
    @endcomponent

    <section class="s-pt-50 s-pb-100 gallery-pagination gallery-regular">
        <div class="d-none d-lg-block divider-20"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-8">
                            @portfolioCategories()
                        </div>
                    </div>

                    <div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">
                        @foreach($portfolios as $portfolio)
                        <div class="col-xl-4 col-sm-6 {{ $portfolio->categories->pluck('slug')->implode(' ') }}">

                            <div class="vertical-item item-gallery content-absolute gallery text-center ls">
                                <div class="item-media">
                                    <img src="{{ $portfolio->present()->firstImage(740,500,'fit',80) }}" alt="{{ $portfolio->title }}">
                                    <div class="media-links"></div>
                                </div>
                                <div class="item-content">
                                    <h6>
                                        <a class="tags small-text" href="{{ $portfolio->url }}">{{ $portfolio->title }}</a>
                                        <br>
                                        <a href="{{ $portfolio->url }}">{{ str_limit(strip_tags($portfolio->description), 50) }}</a>
                                    </h6>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>

                    {!! $portfolios->links('portfolio::partials.pagination') !!}

                </div>
            </div>
        </div>
        <div class="d-none d-lg-block divider-105"></div>
    </section>

@endsection