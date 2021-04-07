<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
    
        $user = \App\Models\User::all();
        return view ('user.user',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.user_modification',compact('user'));
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
        ]);

        Auth::user()->update($updateuser);
        //$produit->update($request->all());

        return redirect('/producteur')->with('success','Produit modifer avec succés !');
    }
}