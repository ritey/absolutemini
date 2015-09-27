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

		<div class="col-sm-12">

			@include('partials.breadcrumb', [ 'name' => 'article', 'breadcrumb' => $content ])

		</div>

	</div>

	<div class="row">

		<div class="col-sm-12 col-md-8 col-lg-8">

			@include('partials.ad')

			<div class="panel panel-default">
				<div class="panel-body">

				{!! stripslashes($content->content) !!}

				</div>
			</div>

		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">

			@include('partials.ad')

		</div>

	</div>

@endsection

@section('footer')

@endsection