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
		<p class="lead page-description"></p>
	</div>

	<div class="row">

		<div class="col-sm-12">

			@foreach($categories as $category)

				<div class="col-sm-4">

					<div class="panel panel-default">
  						<div class="panel-body">
  							<a href="{{ $category->slug }}" title="{{ $category->name }}">{{ $category->name }}</a>
  						</div>
  					</div>

				</div>

			@endforeach

		</div>

	</div>

@endsection

@section('footer')

@endsection