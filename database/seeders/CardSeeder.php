<?php

namespace Database\Seeders;

use App\Models\Card;
use Database\Factories\CardFactory;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Base
        \App\Models\Card::factory()
            ->count(54)
            ->create(['type' => 0]); // Exaltation
        \App\Models\Card::factory()
            ->count(18)
            ->create(['type' => 1]); // Persecution
        \App\Models\Card::factory()
            ->count(36)
            ->create(['type' => 2]); // Patrouille

        // Companion

        \App\Models\Card::factory()
            ->count(18)
            ->create(['type' => 1, 'fromCompanion' => true]); // Persecution
        \App\Models\Card::factory()
            ->count(18)
            ->create(['type' => 2, 'fromCompanion' => true]); // Patrouille
    }
}
