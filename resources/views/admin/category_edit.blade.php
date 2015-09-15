@extends('layouts.master')

@section('page_title')
{{ $category->page_title }} : Edit
@endsection

@section('meta_description')
{{ $category->meta_description }}
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Edit : {{ $category->name}}</h1>
	</div>

	@include('partials.admin_menu')

	<div class="row">

		<div class="col-sm-8">

			{!! Form::open( [ 'method' => 'PUT' , 'route' => [ 'admin.category.update' , $category->id ] , 'class' => 'form-horizontal' ] ) !!}

				@include('partials.errors')

				@include('partials.category_form', ['category' => $category, 'submitButtonText' => 'Save' , 'back_button' => route('admin.category.index') ] )

			{!! Form::close() !!}

		</div>

	</div>

@endsection

@section('footer')

@endsection