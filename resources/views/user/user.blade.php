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
            <p>content de vous revoir !</p>
        </div>

        <div class="panier">
            {{-- tout les panier plus crud --}}

        </div>
    </div>    
@endsection