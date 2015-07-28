<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfileRequest extends Request {

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
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
            'name'     => 'required',
            'email'    => 'required',
            'picture'  => 'image',
            'role'     => 'not_in:0'
		];
	}

}
