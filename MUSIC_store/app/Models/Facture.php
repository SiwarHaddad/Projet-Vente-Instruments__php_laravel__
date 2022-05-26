<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $primaryKey = 'numCommande';

    protected $fillable = [
        'numCommande',
        'facture'
    ];

    use HasFactory;
}
