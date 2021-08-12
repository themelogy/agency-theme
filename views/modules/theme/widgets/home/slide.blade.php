<section class="page_slider main_slider">
    <div class="flexslider" data-nav="true" data-dots="false">
        <ul class="slides">
            @foreach($slides as $slide)
            @if($slide->video)
            <li class="ds text-center slide1">
                <span class="flexslider-overlay"></span>
                <span class="embed-responsive embed-responsive-16by9">
                    <iframe src="{{ $slide->video }}?feature=oembed&amp;;showinfo=0&amp;;autoplay=1&amp;;controls=0&amp;;mute=1&amp;;loop=1" allowfullscreen=""></iframe>
                </span>
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <p class="text-uppercase intro_after_featured_word">{{ $slide->sub_title }}</p>
                                    </div>

                                    <div class="intro_layer" data-animation="slideRight">
                                        <h2 class="text-uppercase intro_featured_word">
                                            {{ $slide->title }}
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        {!! $slide->content !!}
                                    </div>
                                    @if($slide->link_type != 'none')
                                        <div class="intro_layer page-bottom" data-animation="expandUp">
                                            <a target="{{ $slide->present()->link->target }}" class="btn btn-maincolor" href="{{ $slide->present()->link->url }}">{{ $slide->present()->link->title }}</a>
                                        </div>
                                    @endif
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
            @else
            <li class="ds text-center slide2">
                <span class="flexslider-overlay"></span>
                <img src="{{ Theme::url('images/slide_02.jpg') }}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h3 class="text-lowercase intro_before_featured_word">
                                            {{ $slide->sub_title }}
                                        </h3>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h2 class="text-uppercase intro_featured_word">
                                            {{ $slide->title }}
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="pullDown">
                                        <p class="text-uppercase intro_after_featured_word">
                                            {!! $slide->content !!}
                                        </p>
                                    </div>
                                    @if($slide->link_type != 'none')
                                    <div class="intro_layer page-bottom" data-animation="expandUp">
                                        <a target="{{ $slide->present()->link->target }}" class="btn btn-maincolor" href="{{ $slide->present()->link->url }}">{{ $slide->present()->link->title }}</a>
                                    </div>
                                    @endif
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
            @endif
            @endforeach
        </ul>
    </div>
    <!-- eof flexslider -->
    <div class="flexslider-bottom d-none d-xl-block">
        <a href="#about" class="mouse-button animated floating"></a>
    </div>
</section>