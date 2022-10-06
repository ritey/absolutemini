<div class="form-group">

	<label class="col-sm-3 control-label" for="name">Name</label>

	<div class="col-md-9">

		<input type="text" name="name" id="name" class="form-control" value="{{ $content->name }}" />

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="slug">Friendly URL</label>

	<div class="col-md-9">

		<input type="text" name="slug" id="slug" class="form-control" value="{{ $content->slug }}" />

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="page_title">SEO Title</label>

	<div class="col-md-9">

		<input type="text" name="page_title" id="page_title" class="form-control" value="{{ $content->page_title }}" />

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="meta_description">SEO description</label>

	<div class="col-md-9">

		<input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ $content->meta_description }}" />

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="category_id">Category</label>

	<div class="col-md-9">

		<select name="category_id" name="category_id" class="form-control">

			@foreach($categories as $category)

				<option value="{{ $category }}" {{ ($content->category_id == $category) ? 'selected' : '' }} >{{ $category }}</option>

			@endforeach

		</select>

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="summary">Summary</label>

	<div class="col-md-9">

		<textarea name="summary" id="summary" class="form-control">{{ $content->summary }}</textarea>

	</div>

</div>

<div class="form-group">

	<label class="col-sm-3 control-label" for="content">Post</label>

	<div class="col-md-9">

		<textarea name="content" id="content" class="form-control">{{ stripslashes($content->content) }}</textarea>

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

		<input type="submit" value="{{ $submitButtonText" class="btn btn-primary form-control" />

	</div>

</div>