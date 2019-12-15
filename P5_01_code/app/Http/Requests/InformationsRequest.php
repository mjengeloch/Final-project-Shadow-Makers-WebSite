<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationsRequest extends FormRequest
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
            'last_name' => 'nullable|between:1,30',
            'first_name' => 'nullable|between:1,30',
            'address' => 'nullable|between:1,50',
            'zip' => 'nullable|between:1,10',
            'city' => 'nullable|between:1,30',
            'shadow_email' => 'nullable|email',
            'discord' => 'nullable|regex:/^((.+?)#\d{4})/',
            'telephone_number' => 'nullable|max:250',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|between:1,300',
            'twitch' => 'nullable|between:1,30',
            'mixer' => 'nullable|between:1,30',
            'youtube' => 'nullable|between:1,50',
            'website' => 'nullable|regex:/^(https?:\/\/)?(www\.)?([a-zA-Z0-9]+(-?[a-zA-Z0-9])*\.)+[\w]{2,}(\/\S*)?$/',
            'twitter' => 'nullable|between:1,30',
            'instagram' => 'nullable|between:1,30',
            'facebook' => 'nullable|between:1,30',
            'snapchat' => 'nullable|between:1,30'
        ];
    }
}
