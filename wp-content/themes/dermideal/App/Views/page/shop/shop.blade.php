{{-- Shop --}}
@extends('layout')

@section('content')
    @include('global.breadcrumbs',['wrapper'=>true])
    @include('page.shop.h1')
    @include('page.shop.categories')
    @include('page.shop.stock')
    @include('page.shop.new-products')
@endsection

