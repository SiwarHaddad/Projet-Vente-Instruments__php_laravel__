<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    protected $primaryKey = 'idCategorie';

    protected $fillable = [
        'libelleCategorie',
        'imageCategorie'
    ];

    use HasFactory;

    /**
     * Une catégorie peut avoir plusieurs produits
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    // public function instruments() : HasMany
    // {
    //     return $this->hasMany('App\Instrument');
    // }
}

