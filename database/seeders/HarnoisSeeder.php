<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HarnoisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Language::factory()->create([
            'title' => 'Lance',
            'description' => ''
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Épée et bouclier',
            'description' => 'Permet le port du bouclier'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Épée longue',
            'description' => '+2 aux dégâts'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Dague',
            'description' => '-1 à la CA contre les adversaires équipés d’armes plus longue ou d’un bouclier'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Hache, masse ou marteau à une main',
            'description' => 'Permet le port du bouclier
-1 à l’attaque contre les combattants armés'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Hache, masse ou marteau à deux main',
            'description' => '+2 dégâts contre les créatures et les animaux'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Arc court',
            'description' => 'Portée utile 50 mètres ; -1 par 5 mètres jusqu’à 150 mètres'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Arc long',
            'description' => 'Portée utile 100 mètres ; -1 par 10 mètres jusqu’à 250 mètres'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Fronde',
            'description' => 'Portée utile 30 mètres ; -1 par 5 mètres jusqu’à 100 mètres'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Javeline',
            'description' => 'Portée utile 20 mètres ; -1 par 5 mètres jusqu’à 70 mètres ; bonus de dégâts du guerrier'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Vêtements lourds',
            'description' => 'CA +1'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Cuirasse',
            'description' => 'CA +2'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Broigne',
            'description' => 'CA +3'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Cotel',
            'description' => 'CA +4'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Laurique',
            'description' => 'CA +6'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Bouclier',
            'description' => 'CA +1'
        ]);
    }
}
