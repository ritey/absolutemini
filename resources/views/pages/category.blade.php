@extends('layouts.master')

@section('page_title')
{{ $category->name }}
@endsection

@section('meta_description')
{{ $category->meta_description }}
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">{{ $category->name }}</h1>
		<p class="lead page-description">{{ $category->meta_description }}</p>
	</div>

	<div class="row">

		<div class="col-sm-12">

			@include('partials.breadcrumb', [ 'name' => 'category', 'breadcrumb' => $category ])

		</div>

	</div>

	<div class="row">

		<div class="col-sm-12 col-md-8 col-lg-8">

			<div class="panel panel-default">
				<div class="panel-body">

					<ul class="list-unstyled">

						@foreach($articles as $article)

							<li>
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <a href="{{$category->slug}}/{{ $article->slug }}" title="{{ $article->name }}">{{ $article->name }}</a>
							</li>

						@endforeach

					</ul>

					{!! $articles->render() !!}

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