<?php

namespace Tests\Feature;

use App\Actions\Api\GetThemeSettingController;
use App\Models\ThemeSetting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

/**
 * @see GetThemeSettingController
 */
class GetThemeSettingTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_settings_is_succesfull()
    {
        /** @var User $user */
        $user = User::factory()->withPersonalTeam()->create();

        ThemeSetting::factory()->create([
            'team_id' => $user->currentTeam->id,
        ]);

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/theme/settings');
        $response->assertSuccessful();
    }
}
