<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DocRequest extends Request {

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
			'id_doc' => 'required',
            'nama_doc' => 'required',
            'id_kategori' => 'required',
            'id_bidang' => 'required',
            'start_date' => 'required|date',
            'untill_date' => 'required|date',
            'remarks' => 'required'
		];
	}

}
