<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactController extends FormRequest
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
            "name"=>"requered|min:3",
            "email"=>"requered|email",
            "message"=> "requered|min:10"
        ];
    }
}
