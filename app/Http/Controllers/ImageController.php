<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use CoderStudios\Requests\ImageRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;

class ImageController extends Controller {

	protected $image_directory = '/images/content/';

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function index()
	{
		$images = Storage::files($this->image_directory);
		$images = collect($images);
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
		$width = 0;
		$height = 0;
		if ($this->request->input('name')) {
			$filename = $this->request->input('name');
		}
		if ($this->request->input('x')) {
			$width = $this->request->input('x');
		}
		if ($this->request->input('y')) {
			$height = $this->request->input('y');
		}
		$image = '/images/content/' . $filename;
		$image_2 = '/images/content/cache/' . $width . 'x' . $height . '_' . $filename;
		$new_image = Storage::get($image);

		if(!Storage::directories(storage_path('app') . '/images/content/cache')) {
			Storage::makeDirectory('/images/content/cache');
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