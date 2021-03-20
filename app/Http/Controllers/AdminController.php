<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $user = \App\Models\User::all()->where('roles', '3');
        $producteur = \App\Models\User::all()->where('roles', '2');
        return view ('admin.admin',['user' => $user, 'producteur' => $producteur]);
    }

    public function create()
     {
         return view ('admin.inscription_admin');
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
            'password' => ['required', 'string','min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'roles' => '1',
        ]);

        return redirect('/admin')->with('success','Produit ajouté avec succés !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //\App\Models\Produit::destroy($id);
        $user->delete();

        return redirect('/admin')->with('success','Produit suprimer !');
    }
}
