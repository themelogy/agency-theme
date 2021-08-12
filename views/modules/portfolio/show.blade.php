@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'portfolio.view'])
        {{ $portfolio->title }}
    @endcomponent
    <section class="s-pt-50  s-pb-100 c-gutter-60 gallery-item2">
        <div class="d-none d-lg-block divider-60"></div>
        <div class="container">
            <div class="row">
                <main class="col-lg-7 col-xl-8">
                    <div class="vertical-item">
                        <div class="item-media">
                            <div class="owl-carousel" data-margin="0" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-nav="false" data-dots="true">
                                @foreach($portfolio->present()->images(1170,null,'resize',80) as $img)
                                <a href="{{ $img }}" class="photoswipe-link" data-width="1170">
                                    <img src="{{ $img }}" alt="{{ $portfolio->title }}">
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="item-content">
                            {!! $portfolio->description !!}
                        </div>
                    </div>
                    <div class="d-none d-xl-block">

                    </div>
                </main>
                <aside class="col-lg-5 col-xl-4">
                    <div class="widget widget_project_info">
                        <h6>Proje Hakkında</h6>
                        <table class="table border-bottom">
                            <tbody>
                            <tr>
                                <td>Tarih:</td>
                                <td>{{ $portfolio->created_at->formatLocalized('%d %B %Y') }}</td>
                            </tr>
                            <tr>
                                <td>Website:</td>
                                <td><a target="_blank" href="{{ $portfolio->website }}">{{ $portfolio->website }}</a></td>
                            </tr>
                            <tr>
                                <td>Kategori:</td>
                                <td class="tags">
                                    {!!
                                        $portfolio->categories()->get()->map(
                                            function($category){
                                                return '<a href="'.$category->url.'">'.$category->title.'</a>';
                                            }
                                        )->implode('<br/>')
                                    !!}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="widget widget_service">
                        <h6>Projede Kullanılan Teknolojiler</h6>
                        {!! $portfolio->settings->tech_desc->{locale()} !!}
                    </div>
                </aside>
            </div>
        </div>
        <div class="d-none d-lg-block divider-105"></div>
    </section>
@stop
