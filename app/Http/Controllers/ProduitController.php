<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit = \App\Models\Produit::all();
        
        return view ('home',['produit' => $produit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View ('producteur.addproduit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name' => ['required'],
            'description' => ['required'],
            'quantite' => ['required'],
            'prix' => ['required'],
        ]);

        Produit::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'quantite' => $request['quantite'],
            'prix' => $request['prix'],
            'image' => '\images\miel.png',
        ]);

        return redirect('/')->with('success','Produit ajouté avec succés !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show (Produit $produit, $id)
    {
        $produit = \App\Models\Produit::find($id);

        return view ('produits',compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('producteur.modification_produit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        //$updateproduit = 
        $request-> validate([
            'name' => ['required'],
            'description' => ['required'],
            'quantite' => ['required'],
            'prix' => ['required'],
        ]);

        //Produit::whereId($id)->update($updateproduit);
        $produit->update($request->all());

        return redirect('/producteur')->with('success','Produit modifer avec succés !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //\App\Models\Produit::destroy($id);
        $produit->delete();

        return redirect('/producteur')->with('success','Produit suprimer !');
    }
}
