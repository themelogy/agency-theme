@isset($absolute)<div class="header_absolute s-pb-30">@endisset
    <header class="page_header ds">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-11">
                    <a href="@homepage" class="logo text-center">
                        <img src="{{ Theme::url('img/logo-w.svg') }}" alt="">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        {!! Menu::render('header', \Themes\Agency\Presenter\HeaderMenuPresenter::class) !!}
                    </nav>
                    <!-- eof main nav -->
                </div>
                <div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
                    <div class="header_phone">
                        <h6>
                            {!! setting('theme::phone') !!}
                        </h6>
                    </div>
                </div>
                <div class="search-box">
                    <input type="text" name="search" placeholder="Arama Yap" class="search-text">
                    <a href="#" class="search-btn">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu">
            <span></span>
        </span>
    </header>
@isset($absolute)</div>@endisset
<span class="toggle_menu_side header-slide"><span></span></span>