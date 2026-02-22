{{-- Product Category --}}
@extends('layout')

@section('content')
    @include('global.breadcrumbs',['wrapper'=>true])
    @include('taxonomy.product-category.top-info')
@endsection