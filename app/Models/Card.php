<?php

namespace App\Models;

use App\Traits\Enums;
use Database\Factories\CardFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    use Enums;

    public $timestamps = false;

    /*protected $enumTypes = [
        'Exaltation',
        'Persécution',
        'Patrouille'
    ];*/
}
