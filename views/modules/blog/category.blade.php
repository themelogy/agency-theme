@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'blog.category'])
        {{ $category->name }}
    @endcomponent

    <section class="s-pt-50 s-pb-130 blog2" id="app">
        <div class="container">

            <div class="d-none d-lg-block divider-60"></div>
            <article
                    class="text-md-left vertical-item blog-padding ls ms post type-post status-publish format-standard has-post-thumbnail sticky"
                    v-for="(item, $index) in list"
                    :key="$index"
                    :data-num="$index + 1">
                <div class="post-thumb" v-if="item.image">
                    <a :href="item.url">
                        <img :src="item.image" :alt="item.title">
                    </a>
                </div>
                <div class="item-content">
                    <div class="row c-gutter-60">
                        <div class="col-md-2">
                            <div class="icons small-text">
                                <p>
                                    <i class="fa fa-calendar color-main fs-14"></i>
                                    <a :href="item.url" v-text="item.created_at"></a>
                                </p>
                                <p>
                                    <i class="fa fa-user color-main fs-14"></i>
                                    <a :href="item.url" v-text="item.author.name"></a>
                                </p>
                                <p>
                                    <i class="fa fa-tags  color-main fs-14"></i>
                                    <a :href="item.category.url" v-text="item.category.name"></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="entry-content">
                                <header class="entry-header">
                                    <h3 class="entry-title">
                                        <a :href="item.url" rel="bookmark" v-text="item.title">
                                        </a>
                                    </h3>
                                </header>
                                <!-- .entry-header -->
                                <p v-html="item.intro">
                                </p>
                                <div class="link">
                                    <a :href="item.url" class="btn-link">@lang('global.buttons.read more')</a>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .item-content -->
                    </div>
                </div>
            </article>
            <!-- #post-## -->

            <infinite-loading @infinite="infiniteHandler">
                <div slot="spinner"><br/>@lang('themes::theme.messages.loading')</div>
                <div slot="no-more"><br/>@lang('themes::blog.messages.no more')</div>
                <div slot="no-results"><br/>@lang('themes::blog.messages.no results')</div>
            </infinite-loading>

            <div class="d-none d-lg-block divider-75"></div>
        </div>

    </section>

@stop

@push('js-inline')
    {!! Theme::script('js/vendor/vue.min.js') !!}
    {!! Theme::script('js/vendor/vue-infinite-loading.js') !!}
    {!! Theme::script('js/vendor/axios.min.js') !!}
    <script>
        const api = '{{ route('api.blog.post.category') }}';
        new Vue({
            el: '#app',
            data() {
                return {
                    page: 1,
                    list: [],
                };
            },
            methods: {
                infiniteHandler($state) {
                    axios.get(api, {
                        params: {
                            page: this.page,
                            category: '{{ $category->slug }}'
                        },
                        headers: {'X-Requested-With': 'XMLHttpRequest'}
                    }).then(({data}) => {
                        if (data.posts.length) {
                            this.page += 1;
                            this.list.push(...data.posts);
                            $state.loaded();
                        } else {
                            $state.complete();
                        }
                    });
                },
            },
        });
    </script>
@endpush
