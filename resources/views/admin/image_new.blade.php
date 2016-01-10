@extends('layouts.master')

@section('page_title')
New image
@endsection

@section('meta_description')

@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">New image</h1>
	</div>

	@include('partials.admin_menu')

	<div class="row">

		<div class="col-sm-8">

			{!! Form::open( [ 'method' => 'POST' , 'route' => [ 'admin.images.create' ] , 'class' => 'form-horizontal' , 'files' => true ] ) !!}

				@include('partials.errors')


				<div class="form-group">

					{!! Form::label('image', 'Image' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

					<div class="col-md-9">

						{!! Form::file('image') !!}

					</div>

				</div>

				<div class="form-group">

					<div class="col-xs-6 col-sm-offset-3 col-sm-4 text-right">

						<a href="{{ route('admin.images.index') }}" class="btn btn-default">Cancel</a>

					</div>

					<div class="col-sm-5 col-xs-6">

						{!! Form::submit('Upload', [ 'class' => 'btn btn-primary form-control' ]) !!}

					</div>

				</div>

			{!! Form::close() !!}

		</div>

	</div>

@endsection

@section('footer')

@endsection