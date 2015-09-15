<div class="form-group">

	{!! Form::label('name', 'Name' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('name', $category->name, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('slug', 'Friendly URL' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('slug', $category->slug, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('page_title', 'SEO Title' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('page_title', $category->page_title, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	{!! Form::label('meta_description', 'SEO description' , [ 'class' => 'col-sm-3 control-label' ] ) !!}

	<div class="col-md-9">

		{!! Form::text('meta_description', $category->meta_description, [ 'class' => 'form-control' ]) !!}

	</div>

</div>

<div class="form-group">

	<div class="col-sm-offset-3 col-sm-10">

		<div class="checkbox">

			<label for="enabled">

				<input id="enabled" name="enabled" type="checkbox" value="1" @if($category->enabled) checked @endif> Enable

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