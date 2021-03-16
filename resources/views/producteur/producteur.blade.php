@extends('layouts.app')

@section('css')
    
@endsection

@section('contenu')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="title align-self-center presentation">
            <h1>Bonjour {{ Auth::user()->name }} </h1>
            <p>content de vous revoir ! qu'avez vous de nouveaux à nous proposer ?</p>
        </div>

        <div class="produit">
            {{-- tout les porduit plus crud --}}
            <a href="/ajouterproduit">Ajouter un produit</a>
        </div>
    </div>    
@endsection