<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instrument;

class CartController extends Controller
{

    public function add(Request $request ,  $id)
    {
        $instrument = Instrument::find($id);
        if(!$instrument)
            abort(404);

        $cart = session()->get('cart');

        if(!$cart)
            $cart = [
                $id => [
                    "libelleInstrument" => $instrument->libelleInstrument,
                    "imageInstrument" => $instrument->imageInstrument,
                    "prixInstrument" => $instrument->prixInstrument,
                    "quantite" => $request->quantite
                ]
            ];

        else{
            if(array_key_exists($id, $cart))
                $cart[$id]["quantite"] += $request->quantite;
            else
            $cart[$id] = [
                    "libelleInstrument" => $instrument->libelleInstrument,
                    "imageInstrument" => $instrument->imageInstrument,
                    "prixInstrument" => $instrument->prixInstrument,
                    "quantite" => $request->quantite
                ];
        }

        session()->put('cart', $cart);
        return redirect()->route('Instrument.index')->with('info', 'produit ajouté avec succés');
    }

    public function getCart(Request $request)
    {
        return view('cart.Cart');
    }

    public function removeItem($id)
    {
        $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
        session()->flash('success', 'Produit supprimé du panier avec succés');

        return redirect()->back()->with('info','Produit supprimé du panier avec succés');
    }

    public function remove()
    {
        session()->forget("cart");
        return redirect()->route('Instrument.index')->with('info','le panier est vide');
    }
}
