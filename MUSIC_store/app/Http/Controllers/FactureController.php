<?php

namespace App\Http\Controllers;

use App\Models\LigneCommande;
use App\Models\Commande;
use App\Models\Facture;
use Barryvdh\DomPDF\Facade\PDF;

class FactureController extends Controller
{
    public function index()
    {
        $factures = Facture::join('commandes', 'factures.numCommande', '=', 'commandes.numCommande')
            ->where('commandes.acteurCommande', '=', Auth()->user()->idUser)
            ->get();

        return view('Facture.liste', compact('factures'));
    }

    public function download($f)
    {
        return response()->download("Factures/$f");
        // $user = Commande::join('users', 'commandes.acteurCommande', '=', 'users.idUser')
        // ->where('commandes.numCommande', '=', $f)
        // ->get()
        // ->first();

        // $detail = LigneCommande::join('instruments', 'ligne_commandes.idInstrumentL', '=', 'instruments.idInstrument')
        // ->where('ligne_commandes.numCommandeL', '=', $f)
        // ->get();

        // return view('Facture.facturePDF', compact('user','detail'));
    }


    public function downloadPDF($id){
        $user = Commande::join('users', 'commandes.acteurCommande', '=', 'users.idUser')
            ->where('commandes.numCommande', '=', $id)
            ->get()
            ->first();

        $detail = LigneCommande::join('instruments', 'ligne_commandes.idInstrumentL', '=', 'instruments.idInstrument')
            ->where('ligne_commandes.numCommandeL', '=', $id)
            ->get();

        PDF::loadView('Facture.facturePDF', compact('user', 'detail'))
            ->setPaper('a4', 'landscape')
            //->download('facture'.$id.'.pdf')
            ->save(public_path('Factures/facture'.$id.'.pdf'));

        Facture::create([
            'numCommande' => $id,
            'facture' =>  "facture$id.pdf"
        ]);

        return redirect()->route('Instrument.index')->with('info', 'commande bien passée');
    }
}
