<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArtisanCommandRequest extends FormRequest
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
            'command_type' => ['required'],
            'artisan_command' => [
                Rule::requiredIf(function () {
                    return $this->command_type !== 'migrate';
                }),
            ],
            'fresh_options' => [Rule::requiredIf(function () {
                return $this->dbseed_options === '--db:seed';
            })],
            'dbseed_options' => ['nullable']
        ];
    }
}
