<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    private static $seedIncrement = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fromCompanion' => false,
            'type' => 0,
            'number' => static::$seedIncrement++
        ];
    }

    public static function resetSeedIncrement() {
        static::$seedIncrement = 1;
    }
}
