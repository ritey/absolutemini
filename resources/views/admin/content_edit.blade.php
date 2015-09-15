@extends('layouts.master')

@section('page_title')
{{ $content->page_title }} : Edit
@endsection

@section('meta_description')
{{ $content->meta_description }}
@endsection

@section('head')
	<script src="/plugins/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Edit : {{ $content->name}}</h1>
	</div>

	@include('partials.admin_menu')

	<div class="row">

		<div class="col-sm-8">

			{!! Form::open( [ 'method' => 'PUT' , 'route' => [ 'admin.content.update' , $content->id ] , 'class' => 'form-horizontal' ] ) !!}

				@include('partials.errors')

				@include('partials.content_form', ['content' => $content, 'submitButtonText' => 'Save' , 'back_button' => route('admin.content.index') ] )

			{!! Form::close() !!}

		</div>

	</div>

@endsection

@section('footer')


<script type="text/javascript">

	$('document').ready(function(){

		CKEDITOR.replace( 'content' );

	});

</script>

@endsection