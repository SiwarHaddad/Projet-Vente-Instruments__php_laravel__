<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $primaryKey = 'numCommande';

    protected $fillable = [
        'acteurCommande',
        'dateCommande',
        //'contenuCommande',
        'totalPrix',
        'statusCommande'
    ];

    use HasFactory;
}
