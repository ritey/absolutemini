@extends('layouts.master')

@section('page_title')
Classic mini enthusiast and resource site
@endsection

@section('meta_description')
Classic mini enthusiast and resource site
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">{{ $content->name }}</h1>
		<p class="lead page-description">{{ $content->summary }}</p>
	</div>

	<div class="row">

		<div class="col-sm-12">

			{!! $content->content !!}

		</div>

	</div>

@endsection

@section('footer')

@endsection