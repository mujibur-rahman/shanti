<?php namespace App\Http\Requests;

class HomeAjaxRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		//$id = $this->segment(2) ? ',' . $this->segment(2) : '';
		return [];
	}

	public function authorize(){
		return true;
	}
}