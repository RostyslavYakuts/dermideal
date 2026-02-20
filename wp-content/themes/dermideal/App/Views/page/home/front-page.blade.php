{{-- Front Page --}}
@extends('layout')

@section('content')
    @include('page.home.hero-section')
    @include('page.home.stock')
    @include('page.home.categories')
    @include('page.home.bestsellers')
    @include('page.home.new-products')
    @include('page.home.top-product')
    @include('page.home.motivation')
    @include('page.home.statistic')
    @include('page.home.advantages')
    @include('page.home.banner')
    @include('page.home.testimonials')
    @include('page.home.brands')
    @include('page.home.content')
@endsection

