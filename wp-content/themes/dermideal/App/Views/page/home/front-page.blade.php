{{-- Front Page --}}
@extends('layout')

@section('content')
    @include('page.home.hero-section')
    @include('page.home.advantages')
    @include('page.home.statistic')
    @include('page.home.top-product')
    @include('page.home.cases')
    @include('page.home.motivation')
    @include('page.home.banner')
    @include('page.home.testimonials')
    @include('page.home.form')
@endsection

