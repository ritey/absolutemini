@extends('layouts.master')

@section('page_title')
Images
@endsection

@section('meta_description')
Uploaded on doblotto.com
@endsection

@section('head')

@endsection

@section('content')

	<div class="page-header">
		<h1 class="page-title">Images</h1>
		<p class="lead page-description"></p>
	</div>

	@include('partials.admin_menu')

	<div class="row">

		<div class="col-sm-12 text-right">
			<a class="btn btn-primary" href="{{ route('admin.images.new') }}"><span class="glyphicon glyphicon-plus"></span> New image</a>
		</div>

	</div>

	@if($images)
		@foreach(array_chunk($images->all(),3) as $imageRow)
			<div class="row">
				@foreach($imageRow as $image)
				<div class="col-xs-6 col-md-3">
					<div class="thumbnail">
						<p class="text-center"><input type="text" value="{{ basename($image) }}" /></p>
						<img src="{{ route('image' , [ 'path' => $image, 'name' => basename($image) , 'x' => '200', 'y' => '-1' ] ) }}" alt="">
						<div class="caption">
							<p><a href="{{ route('admin.images.destroy', basename($image)) }}" class="btn btn-primary" role="button">Delete</a></p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		@endforeach
	@endif

@endsection

@section('footer')

	<script type="text/javascript">

		$('input[type=text]').on('mouseup',function(){
			$(this).select();
		});

	</script>

@endsection