<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Instrument;
use App\Http\Requests\InstrumentRequest;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->categorie){
            $instruments = Instrument::where('categorieInstrument', '=', request()->categorie)
                ->inRandomOrder()
                ->get();
            $categories = Categorie::all();

            return view('Instrument.index', compact('instruments', 'categories'));
        }
        $instruments = Instrument::all()->shuffle();
        $categories = Categorie::all();

        return view('Instrument.index', compact('instruments', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('Instrument.new', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstrumentRequest $request)
    {
        $imageName = $request->file('choosefile')->getClientOriginalName();

        $destinationPath = base_path() . '/public/images/instruments';
        $request->file('choosefile')->move($destinationPath, $imageName);

        Instrument::create([
            'idInstrument' => $request->idInstrument,
            'libelleInstrument' => $request->libelleInstrument,
            'descriptionInstrument' => $request->descriptionInstrument,
            'categorieInstrument' => $request->categorieInstrument,
            'marqueInstrument' => $request->marqueInstrument,
            'imageInstrument' =>$imageName,
            'quantiteDispoInstrument' => $request->quantiteDispoInstrument,
            'prixInstrument' => $request->prixInstrument
        ]);

        return redirect()->route('Instrument.index')->with('info','ajout avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instrument = Instrument::join('categories', 'instruments.categorieInstrument', '=', 'categories.idCategorie')
           ->where("instruments.idInstrument", "=" , $id)
           ->get(['instruments.*', 'categories.libelleCategorie'])->first();

        return view('Instrument.detail', compact('instrument'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instrument = Instrument::find($id);
        $categories = Categorie::all();
        return view('Instrument.edit', compact('instrument' ,'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstrumentRequest $request, $id)
    {
        $instrument = Instrument::find($id);

        unlink(public_path("images/instruments/$instrument->imageInstrument"));

        $imageName = $request->file('choosefile')->getClientOriginalName();

        $destinationPath = base_path() . '/public/images/instruments';
        $request->file('choosefile')->move($destinationPath, $imageName);

        $instrument->update([
            'idInstrument' => $request->idInstrument,
            'libelleInstrument' => $request->libelleInstrument,
            'descriptionInstrument' => $request->descriptionInstrument,
            'categorieInstrument' => $request->categorieInstrument,
            'marqueInstrument' => $request->marqueInstrument,
            'imageInstrument' =>$imageName,
            'quantiteDispoInstrument' => $request->quantiteDispoInstrument,
            'prixInstrument' => $request->prixInstrument
        ]);

        return redirect()->route('Instrument.index')->with('info','modification avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instrument = Instrument::find($id);

        unlink(public_path("images/instruments/$instrument->imageInstrument"));

        $instrument->delete();

        return redirect()->route('Instrument.index')->with('info','suppression avec succés ');
    }



    public function search(InstrumentRequest $request)
    {
        $ValS = request('search');

        $instruments = Instrument::where("libelleInstrument", "like" , "%$ValS%")
            ->orWhere("descriptionInstrument", "like" , "%$ValS%")
            ->get();

        $categories = Categorie::all();

        return view('Instrument.search', compact('instruments', 'categories'));
    }
}
