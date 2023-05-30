<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MetierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Metier::factory()->create([
            'title' => 'Aberrant',
            'description' => 'Choisir un pouvoir par rang
Choisir une faiblesse tous les deux rangs'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Alchimiste',
            'description' => 'Fabriquer des potions entre deux séances'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Archer',
            'description' => 'Ajouter le rang aux dégâts à distance
Portée + 5 mètres par rang'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Assassin',
            'description' => 'Attaque sournoise : 1d8 dégâts
supplémentaires par rang et par scène'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Augure',
            'description' => 'Une fois par séance, annoncer une augure de
rang heures'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Barde',
            'description' => 'Ajouter le rang aux jets de connaissance
Une fois par scène donner un bonus à un allié'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Berzerk',
            'description' => 'Ajouter le rang à l’attaque, CA 11, 1 mana par tour
Sanglier [ ] - Ours [ ] - Loup [ ]'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Chevalier',
            'description' => 'Choisir une monture de rang DV
Ligue : bonus de demi-rang en attaque,
sauvegarde et CA'
        ]);

        \App\Models\Metier::factory()->create([
            'title' => 'Citadin',
            'description' => 'Choisir une relation par rang
Modifier le jet de patrouille en cité'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Druide',
            'description' => 'Choisir une liturgie chtonienne par deux rangs'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Exorciste',
            'description' => 'Choisir un exorcisme par rang'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Façonnier',
            'description' => 'Créer ou modifier une prouesse narrative en
dépensant des points de ressources'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Guérisseur',
            'description' => 'Soigner 4 x érudit x rang PV par jour
Dépenser 3 mana pour soigner 1d8 + rang'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Guerrier',
            'description' => '+rang aux dégâts de CaC ; CA+1 par 2 rangs
Une fois par scène, donner un bonus à un allié'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Magicien',
            'description' => 'Choisir deux sorts par rang au
début de l’aventure'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Maître de guerre',
            'description' => 'Choisir trois ordre de bataille par rang'
        ]);

        \App\Models\Metier::factory()->create([
            'title' => 'Maître des bêtes',
            'description' => 'Choisir un dé de vie de compagnon animal
par rang ou augmenter un animal'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Marchand',
            'description' => 'Ajouter le rang pour négocier et convaincre
Une fois par séance, demander des pourparlés'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Marqué',
            'description' => 'Dans une marque en particulier, choisir un
pouvoir par rang'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Noble',
            'description' => 'Ajouter le rang pour traiter avec les autorités
Attirer des suivants'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Patrouilleur',
            'description' => 'Répartir le rang entre les sauvegardes
Une fois par jour, donne +rang au JS d’un allié'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Prêtre',
            'description' => 'Choisir un mystère par rang dans
son panthéon'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Rôdeur',
            'description' => 'Ajouter le rang pour les jets en extérieur
Modifier le jet de patrouille en extérieur'
        ]);
        \App\Models\Metier::factory()->create([
            'title' => 'Voleur',
            'description' => 'Ajouter le rang aux jets de subterfuge, de vol,
de discrétion, d’athlétisme, de survie urbaine.
Relancer un jet une fois par scène'
        ]);
    }
}
