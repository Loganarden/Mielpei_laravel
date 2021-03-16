@extends('layouts.app')

@section('css')

@endsection

@section('contenu')

<div>

    <div class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto">
        <h1 class="title">Bienvenue sur MiélPéi</h1>
    </div>

    <div class=" container">
        <div class="row">
            <div class=" col-md-12">
                <div class="row">
                    @foreach ($produit as $produit)
                    <a href="{{ route('produits.show', $produit->id) }}" method="POST">
                        <div class="card m-3" style="width: 20rem;">
                            <img src="{{ $produit->image }}" class=" card-img-top" alt="{{ $produit->name }}">
                    </a>
                            <div class=" card-body">
                                <h5 class=" card-title" style="font-size: 20px">{{ $produit->name }}</h5>
                                <p class=" card-text">{{ $produit->description }}</p>
                            </div>
                            <ul class=" list-group list-group-flush">
                                <li class=" list-group-item text-sm-center" style="font-size: 20px"> {{ $produit->prix }} € <a href="{{ route('produits.show',$produit->name) }}" class=" col-md-4 btn btn-primary float-right">Acheter</a></li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </div>
    
</div>


@endsection