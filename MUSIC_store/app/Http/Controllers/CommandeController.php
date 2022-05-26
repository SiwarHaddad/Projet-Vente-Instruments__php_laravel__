<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = 0;

        foreach(session('cart') as $item)
            $total += $item['prixInstrument']*$item['quantite'];

        Commande::create([
            'acteurCommande' => Auth()->user()->idUser,
            'dateCommande' => now()->format('Y-m-d H:i:s'),
            //'contenuCommande' => $request->descriptionInstrument,
            'totalPrix' => $total,
            'statusCommande' => 'En cours'
        ]);

        return redirect()->route('LigneCommande.store');
    }

}
