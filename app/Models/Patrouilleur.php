<?php

namespace App\Models;

use App\Traits\Enums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrouilleur extends Model
{
    use HasFactory;
    use Enums;

    protected $enumPeuples = [
        'Impérial',
        'Cavalier',
        'Norrois',
        'Citadin',
        'Sidhe',
        'Chevaucheur',
        'Longue-Barbe',
        'Nez-de-cuir'
    ];

    protected $enumVocations = [
        'Archéologue',
        'Bâtisseur',
        'Chasseur de trésor',
        'Chroniqueur',
        'Conquérant',
        'Maraudeur',
        'Mystique',
        'Tueur de monstre'
    ];

    protected $enuInitiations = [
        'Pélérin',
        'Adopté',
        'Héritier'
    ];
}
