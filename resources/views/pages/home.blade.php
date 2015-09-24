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
		<h1 class="page-title">Classic mini enthusiast and resource site</h1>
		<p class="lead page-description">The online resource for the classic mini and general mini related information. Here you will find information ranging from; classic mini facts, classic mini accessories, classic mini parts, classic mini history and lots more classic mini information. Simply browse through the classic mini categories below.</p>
	</div>

	<div class="row">

		<div class="col-sm-12">

			<h2>Mini categories</h2>

			@foreach($categories as $category)

				<div class="col-sm-4">

					<div class="panel panel-default">

  						<div class="panel-body">

  							<img src="images/absolutemini-32.png" alt="{{ $category->name }}"> <a href="{{ $category->slug }}" title="{{ $category->name }}">{{ $category->name }}</a>

  						</div>

  					</div>

				</div>

			@endforeach

		</div>

	</div>

@endsection

@section('footer')

@endsection