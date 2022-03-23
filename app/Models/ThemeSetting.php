<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ThemeSetting
 *
 * @property int $id
 * @property string $group
 * @property string $name
 * @property bool $locked
 * @property array $payload
 * @property int $team_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ThemeSettingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThemeSetting whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ThemeSetting extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'payload' => 'array'
    ];
}
