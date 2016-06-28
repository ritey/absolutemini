<div class="form-group">

	<label class="col-sm-3 control-label" for="name">Name</label>

	<div class="col-md-9">

		<input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" />

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="slug">Friendly URL</label>

	<div class="col-md-9">

		<input type="text" name="slug" id="slug" class="form-control" value="{{ $category->slug }}" />

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="page_title">SEO Title</label>

	<div class="col-md-9">

		<input type="text" name="page_title" id="page_title" class="form-control" value="{{ $category->page_title }}" />

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="meta_description">SEO description</label>

	<div class="col-md-9">

		<input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ $category->meta_description }}" />

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

		<input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary form-control" />

	</div>

</div>