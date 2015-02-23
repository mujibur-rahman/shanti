<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Auth\Guard;

class UserUpdateRequest extends FormRequest {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{	
		$id = $this->segment( 2 );
		return [
			'firstname' 	=> 'required',
			'lastname' 		=> 'required',
			'email' 		=> 'required|email|unique:users,email,' . $id,
			//'email' 		=> 'required|email|max:255|unique:users',
			//'password' 		=> 'required|confirmed|min:6',
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