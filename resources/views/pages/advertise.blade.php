@extends('layouts.master')

@section('page_title')
Advertise your product or service with absolutemini.com
@endsection

@section('meta_description')
Advertise your product or service absolutemini.com
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Advertise with absolutemini.com</h1>
		<p class="lead page-description"></p>
	</div>

	<div class="row">

		<div class="col-sm-12 col-md-8 col-lg-8">

			<p>If you'd like to advertise your product or service on absolutemini.com please contact dave@absolutemini.com</p>

		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">

			@include('partials.ad')

		</div>

	</div>

@endsection

@section('footer')

@endsection