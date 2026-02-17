{{-- Post --}}
@extends('layout')

@section('content')

	<div class="mx-auto container flex flex-col md:flex-row flex-wrap gap-8 mt-[110px]">
		@include('global.breadcrumbs')
	</div>
	<div class="mx-auto container flex flex-col md:flex-row flex-wrap gap-8 mt-10">

		<div class="flex flex-col gap-6">
			<h1 class="text-4xl">{{$title}}</h1>
			{!! $thumbnail !!}
		</div>

		<div class="flex flex-col gap-6 prose prose-base">
			{!! $content !!}
		</div>


	</div>
@endsection
