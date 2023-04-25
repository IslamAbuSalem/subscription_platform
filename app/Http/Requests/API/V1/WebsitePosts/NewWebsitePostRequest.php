<?php

namespace App\Http\Requests\API\V1\WebsitePosts;

use Illuminate\Foundation\Http\FormRequest;

class NewWebsitePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|unique:website_posts,title',
            'description' => 'required|string',
            'website_id'=> 'required|numeric|exists:websites,id',
        ];
    }
}
