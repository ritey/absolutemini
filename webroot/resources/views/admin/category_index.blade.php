@extends('layouts.master')

@section('page_title')
Categories
@endsection

@section('meta_description')
Categories on absolutemini.com
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Categories</h1>
		<p class="lead page-description"></p>
	</div>

	@include('partials.admin_menu')

	<div class="row">

		<div class="col-sm-12 text-right">
			<a class="btn btn-primary" href="{{ route('admin.category.new') }}"><span class="glyphicon glyphicon-plus"></span> New category</a>
		</div>

	</div>

	@if($category)
		@foreach($category as $row)
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading"><a href="{{ route('admin.category.edit',$row->id) }} " title="{{ $row->name }}">{{ $row->name }}</a></h4>
					<p class="small">Created: {{ date('d/m/Y',strtotime($row->updated_at)) }}</p>
					<p class="text-right"><a class="btn btn-default" href="{{ route('admin.category.edit',$row->id) }}" title="{{ $row->name }}">edit</a></p>
				</div>
			</div>
		@endforeach
	@endif

@endsection

@section('footer')

@endsection