<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PodcastRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'podcast' => 'file|mimes:mpga,wav|max:5000',
            'published_at' => 'required|date|date_format:"Y-m-d"'
        ];

        if($this->method() == 'POST') {
            $rules['podcast'] = 'required|file|mimes:mpga,wav|max:5000';
        }

        return $rules;
    }
}
