<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreThemeSettingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'header' => 'required',
            'image' => 'required',
            'primaryColor' => 'required',
            'secondaryColor' => 'required',
        ];
    }

    public function settingPayload(): array
    {
        return [
            'title' => $this->input('title'),
            'header' => $this->input('header'),
            'image' => $this->input('image'),
            'theme' => [
                'colors' => [
                    'primaryColor' => $this->input('primaryColor'),
                    'secondaryColor' => $this->input('secondaryColor'),
                ],
            ]
        ];
    }
}
