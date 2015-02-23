<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Auth\Guard;

class UserStoreRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'firstname' 	=> 'required',
			'lastname' 		=> 'required',
			'email' 		=> 'required|email|max:255|unique:users',
			'password' 		=> 'required|confirmed|min:6',
			'role' 			=> 'required|numeric'
			/*,
			'body' => 'required'*/
		];
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		// Only allow logged in users
        // return \Auth::check();
        // Allows all users in

        if ( ! \Auth::check() )
        {
            return false;
        }
		return true;
	}

}