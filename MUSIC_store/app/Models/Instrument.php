<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Instrument extends Model
{
    protected $primaryKey = 'idInstrument';

    protected $fillable = [
        'libelleInstrument',
        'descriptionInstrument',
        'categorieInstrument',
        'marqueInstrument',
        'imageInstrument',
        'quantiteDispoInstrument',
        'prixInstrument'
    ];

    use HasFactory;


    /**
     * Un produit appartient à une catégorie.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//     public function
//     categories() : BelongsTo{
//         return $this->belongsTo('App\Categorie');
//     }
}
