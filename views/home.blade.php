@extends('layouts.master', ['absolute'=>true])

@section('content')
    @themeSlide('anasayfa', 'home.slide')
    <div class="divider-10 d-block d-sm-none"></div>
    @include('page::widgets.home.about')
    @findPageId('4', 'home.services')
    {!! Block::get('home-widget-process') !!}
    @portfolioLatest(20, 'home.works')
{{--    @include('modules.employee.widgets.home.team')--}}
    @blogLatestPosts(3, 'home.resources')
{{--    @include('modules.blog.widgets.home.latest')--}}
{{--    @include('modules.guestbook.widgets.home.latest')--}}
{{--    @include('modules.contact.widgets.home.lets-talk')--}}
@stop
