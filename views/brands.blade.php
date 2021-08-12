@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'page'])
        {{ $page->title }}
    @endcomponent
    @portfolioBrands(50)
@stop
