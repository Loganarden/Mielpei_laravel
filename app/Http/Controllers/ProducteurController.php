<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProducteurController extends Controller
{
    public function index()
    {
        $produit = \App\Models\Produit::all()->where('user_id', Auth::user()->id);
        return view('producteur.producteur',['produit' => $produit]);
    }

    public function create()
     {
         return view('producteur.inscription_producteur');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ville' => ['required', 'string'],
            'description' => ['required', 'string'],
            'numero' => ['required'],
            'password' => ['required', 'string','min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'ville' => $request['ville'],
            'description' => $request['description'],
            'numero' =>$request['numero'],
            'password' => Hash::make($request['password']),
            'roles' => '2',
        ]);

        return redirect('/admin')->with('success','Produit ajouté avec succés !');
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('producteur.producteur_modification',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $updateuser = 
        $request-> validate([
            'name' => ['required'],
            'email' => ['required'],
            'description' => ['required'],
            'ville' => ['required'],
            'numero' => ['required'],
            
        ]);

        Auth::user()->update($updateuser);
        //$produit->update($request->all());

        return redirect('/producteur')->with('success','Produit modifer avec succés !');
    }



}
