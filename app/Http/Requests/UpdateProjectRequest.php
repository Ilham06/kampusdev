<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'banner' => 'nullable|image',
            'demo_url' => 'nullable',
            'video_demo_url' => 'nullable',
            'features' => 'required|string',
            'technologies' => 'required|string',
            'buy_packages' => 'required|string',
            'other_information' => 'nullable|string',
            'image_labels.*' => 'nullable|string',
            'image.*' => 'nullable|image',
        ];
    }
}
