<?php

namespace CoderStudios\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request {

	/**
	 * Determine if the user is authorised to make this request.
	 *
	 * @return boolean
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			'id' 				=> 'required',
			'slug'				=> 'required|max:255|min:3',
			'name'			 	=> 'required',
			'page_title' 		=> 'required',
			'meta_description'	=> 'required',
		];

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			unset($rules['id']);
		}

		return $rules;
	}

	/**
	 * Override the default error messages.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [];
	}
}