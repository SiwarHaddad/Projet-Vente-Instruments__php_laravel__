<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LigneCommande;
use Illuminate\Support\Facades\DB;

class LigneCommandeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numCommande = DB::table('Commandes')
            ->latest()
            ->first()
            ->numCommande;

        foreach(session('cart') as $id=>$item){
            LigneCommande::create([
                'numCommandeL' => $numCommande,
                'idInstrumentL' => $id,
                'quantite' => $item['quantite']
            ]);
        }
        session()->forget("cart");

        return redirect()->route('Facture.downloadPDF',$numCommande);
    }

}
