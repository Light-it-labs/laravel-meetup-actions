<?php

namespace App\Actions\Api;

use App\Http\Requests\GetThemeSettingRequest;
use App\Http\Resources\ThemeSettingResource;
use App\Models\ThemeSetting;

class GetThemeSettingController
{
    public function __invoke(GetThemeSettingRequest $request): ThemeSettingResource
    {
        /** @var ThemeSetting $setting */
        $setting = $request->user()->currentTeam->themeSetting;

        return new ThemeSettingResource($setting);
    }
}
