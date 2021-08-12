@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'blog'])
        @lang('themes::blog.title')
    @endcomponent
    <section class="s-pt-50 s-pb-130 c-gutter-60 post5">
        <div class="container">
            <div class="row">

                <div class="d-none d-lg-block divider-65"></div>

                <main class="offset-lg-1 col-lg-10">
                    <article class="vertical-item post type-post status-publish format-standard has-post-thumbnail">
                        @if($img = $post->present()->firstImage(1170,600,'fit',80))
                            <div class="post-thumb">
                                <img src="{{ $img }}" alt="{{ $post->title }}">
                            </div>
                        @endif
                        <div class="item-content hero-bg blog-post">
                            <div class="entry-content">
                                {!! $post->content !!}
                            </div>
                        </div>
                        <div class="entry-meta ds with_padding">
                            <div class="entry-author">
                                <span class="author vcard">
                                    <a class="url fn n"
                                       href="{{ $post->author->url }}">{{ $post->author->fullname }}</a>
                                </span>
                            </div>
                            <!-- .entry-author -->
                            <div>
                                <i class="fa fa-calendar color-main fs-14"></i>
                                <time datetime="2017-06-10T10:14:59+00:00">{{ $post->created_at->formatLocalized('%d.%M.%y') }}</time>
                            </div>
                            <!-- .entry-date -->
                            <div class="blog-adds">
                                <span>
                                    <i class="fa fa-eye color-main fs-14"></i>
                                    <span>{{ $post->counter }}</span>
                                </span>
                            </div>
                            @if($post->tags()->count()>0)
                                <div class="tags">
                                <span>
                                    <i class="fa fa-tags color-main fs-14"></i>tags:
                                </span>
                                    @foreach($post->tags as $tag)
                                        <a class="tags" href="{{ $tag->url }}">{{ $tag->name }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </article>
                    <nav class="navigation" role="navigation">
                        <div class="nav-links">
                            @if($post->present()->previous)
                            <div class="previous-link">
                                <a href="{{ $post->present()->previous->url }}" rel="prev">
                                    <i class="fa fa-chevron-left"></i>
                                    <span>Önceki Yazı</span>
                                </a>
                            </div>
                            @endif
                            @if($post->present()->next)
                            <div class="next-link float-right">
                                <a href="{{ $post->present()->next->url }}" rel="next">
                                    <span>Sonraki Yazı</span>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                            @endif
                        </div>
                    </nav>
                    <div class="d-none d-lg-block divider-70"></div>
                    @blogFindByCategory($post->category->slug, 3, 'related')
                </main>

                <div class="d-none d-lg-block divider-75"></div>
            </div>

        </div>
    </section>
@endsection