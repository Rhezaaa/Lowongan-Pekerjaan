<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
            {    
                return [
                    'name'     => ['required'],
                    'description'    => ['required'],
                    'email' => ['required'],
                    'website'  => ['string'],
                    'logo'    => ['required', 'image'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name'     => ['required'],
                    'description'    => ['required'],
                    'email' => ['required'],
                    'website'  => ['string'],
                    'logo'    => ['image'],
                ];               
            }
            default: break;
        }
    }
}
