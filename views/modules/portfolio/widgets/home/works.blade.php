<section class="s-pt-75 s-pt-xl-50 gallery-carousel main-gallery container-px-0 ls" id="gallery">
    <div class="container-fluid">
        <div class="img-wrap text-center">
            <img src="{{ Theme::url('img/vertical_line.png') }}" alt="">
            <div class="divider-40 d-block d-sm-none"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-xl-5">
                        <div class="filters gallery-filters small-text text-lg-right">
                            <a href="#" data-filter="*" class="active selected">Tümü</a>
                            @foreach($categories as $category)
                            <a href="#" data-filter=".{{ $category->slug }}">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="owl-carousel gallery-owl-nav" data-autoplay="false" data-responsive-lg="5" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-dots="false" data-filters=".gallery-filters" data-margin="0" data-loop="false">
                    @foreach($portfolios as $portfolio)
                    <div class="vertical-item item-gallery content-absolute text-center ds {{ $portfolio->categories()->get()->pluck('slug')->implode(' ') }}" style="padding: 0 10px;">
                        <div class="item-media">
                            <img src="{{ $portfolio->present()->firstImage(600,600,'fit',80) }}" alt="{{ $portfolio->title }}">
                            <div class="media-links">

                            </div>
                        </div>
                        <div class="item-content">
                            <h6>
                                {!!
                                    $portfolio->categories()->get()->map(
                                        function($category){
                                            return '<a class="small-text not-space" href="'.$category->url.'">'.$category->title.'</a>';
                                        }
                                    )->implode('<br/>')
                                !!}
                            </h6>
                            <h6>
                                <a href="{{ $portfolio->url }}">{{ $portfolio->title }}</a>
                            </h6>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- .owl-carousel-->
            </div>
        </div>
    </div>
</section>