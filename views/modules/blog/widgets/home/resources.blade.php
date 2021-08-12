<section class="ms book-item s-pb-30 s-pb-lg-25">
    <div class="corner corner-light"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-block text-center">
                    <div class="btn-book-section overflow-visible">
                        <a href="#" class="btn btn-maincolor">Blog</a>
                    </div>
                    <div class="img-wrap text-center">
                        <img src="{{ Theme::url('img/vertical_line.png') }}" alt="vertical line">
                        <div class="divider-35"></div>
                    </div>
                </div>
            </div>
            <div class="divider-40"></div>
            <div class="row c-gutter-30 c-mb-30 c-mb-lg-0 text-center book">
                @foreach($posts as $post)
                <div class="col-12 col-lg-4">
                    <div class="stage book-1 ls">
                        <img src="{{ $post->present()->firstImage(400,490,'fit',80) }}" alt="{{ $post->title }}">
                        <div class="info">
                            <header>
                                <h6>
                                    <a href="{{ $post->url }}">{{ $post->title }}</a>
                                </h6>
                            </header>
                            <p>
                                {{ str_limit(strip_tags($post->content), 100) }}
                            </p>
                            <p class="small-text link-a">
                                <a href="{{ $post->url }}">@lang('global.buttons.read more')</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="divider-30"></div>
            <div class="text-center img-wrap col-md-12">
                <div>
                    <img src="{{ Theme::url('img/vertical_line.png') }}" alt="vertical line">
                </div>
                <div class="divider-40"></div>
                <a href="{{ route('contact') }}" class="btn btn-outline-maincolor">Projeyi Başlat</a>
                <div class="divider-40"></div>
                <div>
                    <img src="{{ Theme::url('img/vertical_line.png') }}" alt="vertical line">
                </div>
            </div>
        </div>
        <div class="divider-10"></div>
    </div>
</section>