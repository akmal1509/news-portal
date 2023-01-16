<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccessMenu>
 */
class AccessMenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'roleId' => UserRole::factory(),
            'menuId' => Menu::factory()
        ];
    }
}
