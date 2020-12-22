<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExhibitorRequest extends FormRequest
{
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
            'firstname' => 'required',
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required',
            'telephone' => 'required|integer',
            'postal_code' => 'required',
            'location' => 'required',
            'website' => 'required',
        ];
    }
}
