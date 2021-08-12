<section class="page_title ls s-py-50 corner-title invise overflow-visible">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{ $slot }}</h1>
                @isset($breadcrumbs)
                {!! Breadcrumbs::render($breadcrumbs) !!}
                @endisset
                <div class="divider-15 d-none d-xl-block"></div>
            </div>
        </div>
    </div>
</section>