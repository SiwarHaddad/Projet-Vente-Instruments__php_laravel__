<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('Categorie.index', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categorie.new');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = $request->file('choosefile')->getClientOriginalName();

        $destinationPath = base_path() . '/public/images/categories';
        $request->file('choosefile')->move($destinationPath, $imageName);

        Categorie::create([
            "libelleCategorie" => $request->libelleCategorie,
            "imageCategorie" => $imageName
        ]);


        return redirect()->route('Categorie.index')->with('info','ajout avec succés');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('Categorie.edit', compact('categorie'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if ($request->has("picture")) {

        $categorie = Categorie::find($id);

        unlink(public_path("images/categories/$categorie->imageCategorie"));

        $imageName = $request->file('choosefile')->getClientOriginalName();

        $destinationPath = base_path() . '/public/images/categories';
        $request->file('choosefile')->move($destinationPath, $imageName);

        $categorie->update([
            "libelleCategorie" => $request->libelleCategorie,
            "imageCategorie" => $imageName
        ]);

        return redirect()->route('Categorie.index')->with('info','Modificaton avec succés');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);

        unlink(public_path("images/categories/$categorie->imageCategorie"));

        $categorie->delete();

        return redirect()->route('Categorie.index')->with('info','suppression avec succés');

    }
}
