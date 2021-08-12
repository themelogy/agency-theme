<footer class="page_footer corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="divider-20 d-none d-xl-block"></div>
                <div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
                    <div class="footer-logo"><img class="margin-negative" src="{{ Theme::url('img/logo-w.svg') }}" alt="@setting('theme::company-name')"></div>
                    @includeIf('partials.components.socials')
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="divider-20 d-none d-lg-block"></div>
            <div class="col-md-12 text-center">
                @lang('themes::theme.footer.copyrights', ['date'=>\Carbon\Carbon::now()->format('Y'), 'company'=>setting('theme::company-name')])
            </div>
            <div class="divider-20 d-none d-lg-block"></div>
        </div>
    </div>
</section>