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
            <h1>Bonjour {{ Auth::user()->name }}  </h1>
            <p>content de vous revoir administrateur!</p>
        </div>
        <div class="add_admin">
            <a class="nav-link" href="/inscription_admin">Ajouter un Administrateur</a>
        </div>

        <div class="list">
            {{-- liste des producteur  --}}
        </div>

        <div class="listu">
            {{-- liste des utilisatuer inscrit --}}
        </div>
    </div>    
@endsection