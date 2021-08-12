<section class="s-pt-5 s-pb-130">
    <div class="container">
        <div class="divider-80 d-none d-lg-block"></div>
        <div class="row c-mt-30">
            @foreach($brands as $brand)
            @if($img = $brand->files->first())
            <div class="col-6 col-md-2  animate" data-animation="fadeInUp">
                <div class="img-thumbnail text-center" style="padding: 40px 20px;min-height: 180px">
                    <a target="_blank" href="{{ $brand->website }}">
                        <img style="height: 80px; margin-bottom: 10px;" src="{{ $img->path }}" alt="{{ $brand->title }}"><br/>
                        {{ $brand->title }}
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="divider-75 d-none d-lg-block"></div>
    </div>
</section>