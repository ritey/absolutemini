<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Requests\ImageRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;
use Log;

class ImageController extends Controller {

	protected $image_directory = '/images/gallery/famous_minis';

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function index()
	{
		$images = Storage::allFiles($this->image_directory);
		$images = collect($images);
		foreach($images as $image) {
			echo '<a title="" data-gallery="" href="image.png?path=/'.$image.'&x=450&y=-1"><img alt="" src="image.png?path=/'.$image.'&x=200&y=-1" /> </a><br>';
		}
		exit();
		return view('admin.image_index',compact('images'));
	}

	public function create()
	{
		return view('admin.image_new');
	}

	public function destroy($id)
	{
		Storage::delete('/images/content/' . $id);
		$files = Storage::files('/images/content/cache/');
		foreach ($files as $file) {
			$date = Carbon::createFromTimestamp(Storage::lastModified($file));
			if (Carbon::now() > $date->addHours(1)) {
				Storage::delete($file);
			}
		}
		return redirect()->route('admin.images.index');
	}

	public function store(ImageRequest $request)
	{
		if ($request->hasFile('image')) {
			$request->file('image')->move(storage_path('app') . '/images/content/',$request->file('image')->getClientOriginalName());
		}
		return redirect()->route('admin.images.index');
	}

	public function render()
	{
		$filename = '';
		$path = '';
		$width = 0;
		$height = 0;
		if ($this->request->input('path')) {
			$filename = basename($this->request->input('path'));
		}
		if ($this->request->input('path')) {
			$path = '/'.$this->request->input('path');
		}
		if ($this->request->input('x')) {
			$width = $this->request->input('x');
		}
		if ($this->request->input('y')) {
			$height = $this->request->input('y');
		}
		$image = $path;
		$image_2 = '/images/cache/' . $width . 'x' . $height . '_' . $filename;
		$new_image = Storage::get($image);

		if(!Storage::directories(storage_path('app') . '/images/cache')) {
			Storage::makeDirectory('/images/cache');
		}

		if ($width > 0) {
			if (!Storage::exists($image_2)) {
				switch(exif_imagetype(storage_path('app') . $image)) {
					case 2:
						$new_image = imagescale(imagecreatefromjpeg(storage_path('app') . $image), $width, $height, IMG_BICUBIC_FIXED);
						imagejpeg($new_image,storage_path('app') . $image_2);
					break;
					case 3:
						$new_image = imagescale(imagecreatefrompng(storage_path('app') . $image), $width, $height, IMG_BICUBIC_FIXED);
						imagepng($new_image,storage_path('app') . $image_2);
					break;
					default:

					break;
				}
				$new_image = Storage::get($image_2);
			} else {
				$new_image = Storage::get($image_2);
			}
		}
		return (new Response($new_image, 200))
              ->header('Content-Type', 'image/png');

	}
}