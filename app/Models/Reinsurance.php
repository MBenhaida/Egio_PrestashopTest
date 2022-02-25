<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reinsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'icone',
        'alt',
        'statut',
        'ordre',
        'lien',
        'title_lien',
        'new_tab',
    ];
}
