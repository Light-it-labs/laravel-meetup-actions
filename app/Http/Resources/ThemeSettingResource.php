<?php

namespace App\Http\Resources;

use App\Models\ThemeSetting;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin ThemeSetting
 */
class ThemeSettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->payload;
    }
}
