@extends('layouts.master')

@section('page_title')
New
@endsection

@section('meta_description')

@endsection

@section('head')
	<script src="/plugins/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">New</h1>
	</div>

	@include('partials.admin_menu')

	<div class="row">

		<div class="col-sm-8">

	        <form class="form-horizontal" role="form" method="PUT" action="{{ route('admin.content.create' ) }}">
	            {!! csrf_field() !!}

				@include('partials.errors')

				@include('partials.content_form', ['content' => $content, 'submitButtonText' => 'Save' , 'back_button' => route('admin.content.index') ] )

			</form>

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