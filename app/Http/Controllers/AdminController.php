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
        $admin = \App\Models\User::all();
        return view ('admin.admin',['admin' => $admin]);
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

    public function user()
    {
        //
    }

    public function producteur()
    {
        // $producteur = App\Models\User::all();
        
        // return view ('',['producteur' => $producteur]);
    }

}
