<div class="form-group">

	{!! Form::label('name', 'Name' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('name', $content->name, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('slug', 'Friendly URL' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('slug', $content->slug, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('page_title', 'SEO Title' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('page_title', $content->page_title, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('meta_description', 'SEO description' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('meta_description', $content->meta_description, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('thumbnail', 'Image path' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('thumbnail', $content->thumbnail, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('summary', 'Summary' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::textarea('summary', $content->summary, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('content', 'Post' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::textarea('content', $content->content, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	<div class="col-sm-offset-3 col-sm-10">

		<div class="checkbox">

			<label for="enabled">

				<input id="enabled" name="enabled" type="checkbox" value="1" @if($content->enabled) checked @endif> Enable

			</label>

		</div>

	</div>

</div>

<div class="form-group">

	<div class="col-xs-6 col-sm-offset-3 col-sm-4 text-right">

		<a href="{{ $back_button }}" class="btn btn-default">Cancel</a>

	</div>

	<div class="col-sm-5 col-xs-6">

		{!! Form::submit($submitButtonText, [ 'class' => 'btn btn-primary form-control' ]) !!}

	</div>

</div>