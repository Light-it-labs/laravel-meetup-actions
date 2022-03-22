<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ThemeSetting>
 */
class ThemeSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'team_id' => Team::factory(),
            'group' => 'theme',
            'name' => $this->faker->colorName(),
            'locked' => false,
            'payload' => [
                'image' => $this->faker->imageUrl,
                'title' => $this->faker->jobTitle(),
                'header' => 'header-1',
                'theme' => [
                    'colors' => [
                        'primaryColor' => $this->faker->rgbaCssColor
                    ]
                ]
            ],
        ];
    }
}
