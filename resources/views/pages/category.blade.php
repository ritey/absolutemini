@extends('layouts.master')

@section('page_title')
{{ $category->name }}
@endsection

@section('meta_description')
{{ $category->summary }}
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">{{ $category->name }}</h1>
		<p class="lead page-description">{{ $category->summary }}</p>
	</div>

	<div class="row">

		<div class="col-sm-12 col-md-8 col-lg-8">

			@include('partials.breadcrumb', [ 'name' => 'category', 'breadcrumb' => $category ])

			<ul class="list-unstyled">

				@foreach($articles as $article)

					<li>
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="{{$category->slug}}/{{ $article->slug }}" title="{{ $article->name }}">{{ $article->name }}</a>
					</li>

				@endforeach

			</ul>

		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">

			@include('partials.ad')

		</div>

	</div>

@endsection

@section('footer')

@endsection