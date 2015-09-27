@extends('layouts.master')

@section('page_title')
Posts
@endsection

@section('meta_description')
Articles on absolutemini.com
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Posts</h1>
		<p class="lead page-description"></p>
	</div>

	@include('partials.admin_menu')

	<div class="row">

		<div class="col-sm-12 text-right">
			<a class="btn btn-primary" href="{{ route('admin.content.new') }}"><span class="glyphicon glyphicon-plus"></span> New post</a>
		</div>

	</div>

	@if($content)
		@foreach($content as $row)
			<div class="media">
				@if ($row->thumbnail)
				<div class="media-left">
					<a href="{{ route('admin.content.show', $row->id) }}" title="{{ $row->name }}">
						<img class="media-object" src="/images/absolutemini-64.png" alt="{{ $row->name }}" title="{{ $row->name }}">
					</a>
				</div>
				@endif
				<div class="media-body">
					<h4 class="media-heading"><a href="{{ route('admin.content.show',$row->id) }} " title="{{ $row->name }}">{{ $row->name }}</a></h4>
					<p class="small">Created: {{ date('d/m/Y',strtotime($row->updated_at)) }}</p>
					@if ($row->summary)
					<p>{{ $row->summary }}</p>
					@endif
					<p class="text-right"><a class="btn btn-default" href="{{ route('admin.content.show',$row->id) }}" title="{{ $row->name }}">edit</a></p>
				</div>
			</div>
		@endforeach

		{!! $content->render() !!}
	@endif

@endsection

@section('footer')

@endsection