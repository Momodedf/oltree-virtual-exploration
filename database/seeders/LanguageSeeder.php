<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Language::factory()->create([
            'title' => 'Citadin',
            'description' => 'Tout le monde le parle ou le baragouine plus ou moins.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Impérial',
            'description' => 'Langue de la littérature et de l\'administration.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Cavalier',
            'description' => 'Accents chantants des Cavaliers.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Norrois',
            'description' => 'Accent guttural du Norrois.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Draconique',
            'description' => 'Langue de la magie, des savoirs anciens, des savants alchimistes, et terribles dragons.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Elfique',
            'description' => 'Parlé par le Sidhes et les Chevaucheurs.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Venteux',
            'description' => 'Langue sauvage des orques, des gobelins, et de leurs cousins.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Boisellier',
            'description' => 'Propre aux dryades, aux sylvaniens, aux pixies et autres petits peuples féériques.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Pierreux',
            'description' => 'Langue des peuples chtoniens tels les nains, les géants, ou les kobolds.'
        ]);
        \App\Models\Language::factory()->create([
            'title' => 'Noirceux',
            'description' => 'Effrayant langage des guenaudes, des trolls, et des minotaures.'
        ]);
    }
}
