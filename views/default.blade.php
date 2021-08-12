@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'page'])
        {{ $page->title }}
    @endcomponent
    <section class="s-pt-0  s-pb-30 s-pt-lg-30 s-pb-lg-75">
        <div class="divider-10 d-none d-xl-block"></div>
        <div class="container">
            {!! $page->body !!}
        </div>
    </section>
@stop
