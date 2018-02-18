<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
        $rules =  [
            'name' => 'required|min:2|max:250',
            'age'   =>  'required|numeric|min:5|max:100',
            'email' => 'required|email|unique:visitors|min:5|max:250',
            'mobile' => 'required|unique:visitors|min:5|max:50',
            'city' => 'required|min:2|max:250',
            'status' => 'required|min:1|max:250',
            'work' => 'required|min:2|max:250',
            'nationality' => 'required|min:2|max:250',
            'national_id' => 'required|min:2|max:250',
            'prev_event' => 'required|min:2|max:5',
            'about_ted' => 'required|min:5',
            'fav_talks' => 'required|min:5',
            'why_attend' => 'required|min:5',
            'how_spread' => 'required|min:5',
            
        ];

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            
            'age.numeric' => 'age must be numeric value',

            'name.required' => 'name is required',
            'age.required' => 'age is required',
            'email.required' => 'email is required',
            'mobile.required' => 'mobile is required',
            'city.required' => 'city is required',
            'status.required' => 'What are you question is required',
            'work.required' => 'Study/Work is required',
            'nationality.required' => 'nationality is required',
            'national_id.required' => 'national ID is required',
            'prev_event.required' => 'TEDx Event before is required',
            'about_ted.required' => 'about TED/TEDx is required',
            'fav_talks.required' => 'favorite 3 talks? and why? is required',
            'why_attend.required' => 'Why do you want to attend TEDxAzharUniversity is required',
            'how_spread.required' => 'spread ideas you are interested in is required',
            
            'name.min' => 'name must be at least 2 characters',
            'age.min' => 'age must be at least 5 year',
            'email.min' => 'email must be at least 2 characters',
            'mobile.min' => 'mobile must be at least 2 characters',
            'city.min' => 'city must be at least 2 characters',
            'nationality.min' => 'nationality must be at least 2 characters',
            'national_id.min' => 'national ID must be at least 2 characters',
            'prev_event.min' => 'TEDx Event before must be at least 5 characters',
            'about_ted.min' => 'about TED/TEDx must be at least 5 characters',
            'fav_talks.min' => 'favorite 3 talks? and why? must be at least 5 characters',
            'why_attend.min' => 'Why do you want to attend TEDxAzharUniversity must be at least 5 characters',
            'how_spread.min' => 'spread ideas you are interested in must be at least 5 characters',

            'name.max' => 'name must be at most 250 characters',
            'age.max' => 'age must be at most 100 year',
            'email.max' => 'email must be at most 250 characters',
            'mobile.max' => 'mobile must be at most 250 characters',
            'city.max' => 'city must be at most 250 characters',
            'nationality.max' => 'nationality must be at most 250 characters',
            'national_id.max' => 'national ID must be at most 250 characters',
            'prev_event.max' => 'TEDx Event before must be at most 5 characters',
            'about_ted.max' => 'about TED/TEDx must be at most 5 characters',
            'fav_talks.max' => 'favorite 3 talks? and why? must be at most 5 characters',
            'why_attend.max' => 'Why do you want to attend TEDxAzharUniversity must be at most 5 characters',
            'how_spread.max' => 'spread ideas you are interested in must be at most 5 characters',
            
        ];
    }
}
