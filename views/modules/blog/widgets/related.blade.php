<div class="related-post">
    <div class="row c-gutter-20 c-mb-30 c-mb-0">
        @foreach($posts as $post)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="vertical-item content-absolute">
                <div class="item-media">
                    <img src="{{ $post->present()->firstImage(800,600,'fit',80) }}" alt="{{ $post->title }}">
                </div>
                <div class="item-content ds">
                    <p>
                        <a href="{{ $post->url }}">{{ $post->title }}</a>
                    </p>
                    <p class="item-meta">
                        <a href="#">{{ $post->created_at->formatLocalized('%d.%M.%y') }}</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>