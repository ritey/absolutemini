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
		<h1 class="page-title">{{ $category->name }}</h1>
		<p class="lead page-description">{{ $category->summary }}</p>
	</div>

	<div class="row">

		<div class="col-sm-12">

			<ul class="list-unstyled">

				@foreach($articles as $article)

					<li>
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="{{$category->slug}}/{{ $article->slug }}" title="{{ $article->name }}">{{ $article->name }}</a>
					</li>

				@endforeach

			</ul>

		</div>

	</div>

@endsection

@section('footer')

@endsection