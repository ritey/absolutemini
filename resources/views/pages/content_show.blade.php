@extends('layouts.master')

@section('page_title')
{{ $content->page_title }}
@endsection

@section('meta_description')
{{ $content->meta_description }}
@endsection

@section('head')
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">{{ $content->name }}</h1>
		<p class="lead page-description">{{ $content->summary }}</p>
	</div>

	<div class="row">

		<div class="col-sm-12">

			@include('partials.breadcrumb', [ 'name' => 'article', 'breadcrumb' => $content ])

		</div>

	</div>

	<div class="row">

		<div class="col-sm-12 col-md-8 col-lg-8">

			@include('partials.ad')

			<div class="panel panel-default">
				<div class="panel-body">

				{!! stripslashes($content->content) !!}

				</div>
			</div>

		</div>

		<div class="col-sm-12 col-md-4 col-lg-4">

			@include('partials.ad')

		</div>

	</div>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>
@endsection