<?php

namespace App\Actions\Api;

use App\Http\Requests\StoreThemeSettingRequest;
use App\Http\Resources\ThemeSettingResource;
use App\Models\Team;
use App\Models\ThemeSetting;

class StoreThemeSettingController
{
    public function __invoke(Team $team, StoreThemeSettingRequest $request)
    {
        /** @var ThemeSetting $setting */
        $setting = $team->themeSetting;
        $setting->update([
            'group' => 'theme',
            'name' => 'Theme Settings',
            'payload' => $request->settingPayload(),
            'locked' => false,
        ]);

        return back(303);
    }
}
