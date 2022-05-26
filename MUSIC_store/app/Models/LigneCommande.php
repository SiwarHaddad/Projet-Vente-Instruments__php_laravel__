<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class LigneCommande extends Model
{
    protected $primaryKey = ['numCommandeL', 'idInstrumentL'];
    public $incrementing = false;

    protected $fillable = [
        'numCommandeL',
        'idInstrumentL',
        'quantite'
    ];

    use HasFactory;
}
