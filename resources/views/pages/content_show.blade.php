@extends('layouts.master')

@section('page_title')
{{ $content->page_title }}
@endsection

@section('meta_description')
{{ $content->meta_description }}
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">{{ $content->name }}</h1>
		<p class="lead page-description">{{ $content->summary }}</p>
	</div>

	<div class="row">

			@include('partials.breadcrumb', [ 'name' => 'article', 'breadcrumb' => $content ])

		<div class="col-sm-12 col-md-8 col-lg-8">

			{!! stripslashes($content->content) !!}

		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">

			@include('partials.ad')

		</div>

	</div>

@endsection

@section('footer')

@endsection