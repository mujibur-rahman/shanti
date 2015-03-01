<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventStoreRequests extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
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
		return [
			'category' 	=> 	'required|numeric',
			'title' 	=> 	'required|max:255',
			'address' 	=>	'required',
			'division'	=> 	'required|numeric',
			'district'	=>	'required|numeric',
			'thana'		=>	'required',
			'openingDate'=>	'required|date',
			'endingDate'=>	'required|date',
			'infoTitle'	=> 	'required',
			'details' 	=> 	'required',
		];
	}

}
