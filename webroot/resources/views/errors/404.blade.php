@extends('layouts.master')

@section('page_title')
404 Not Found - Classic mini enthusiast and resource site
@endsection

@section('meta_description')
404 Not Found - Classic mini enthusiast and resource site
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">404 Not Found</h1>
		<p class="lead page-description">Sorry, the item you're looking for can't be found, please try something else from the categories below.</p>
	</div>

	<div class="row">

		<div class="col-sm-12">

			<h2>Mini categories</h2>

			@if (isset($categories))
			@foreach($categories as $category)

				<div class="col-sm-4">

					<div class="panel panel-default">

  						<div class="panel-body">

  							<img src="/images/absolutemini-32.png" alt="{{ $category->name }}"> <a href="{{ $category->slug }}" title="{{ $category->name }}">{{ $category->name }}</a>

  						</div>

  					</div>

				</div>

			@endforeach
			@endif

		</div>

	</div>

@endsection

@section('footer')

@endsection