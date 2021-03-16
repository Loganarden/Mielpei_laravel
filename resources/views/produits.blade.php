@extends('layouts.app')

@section('css')

@endsection


@section('contenu')
    <div class=" container">

        <div class="col-md-12 border border-dark p-4">

            <div class="row">

                <div class="col">

                    <img src="{{ $produit->image }}" class="rounded" alt="{{ $produit->name }}">
    
                </div>
    
                <div class="col pt-5">
    
                    <h1 class="pt-5 display-4">{{ $produit->name }}</h1>
                    <p class="pt-3 ">{{ $produit->description }}</p>
                    <p class="prix display-4" > prix :{{ $produit->prix }} €</p>
                    <form class="pt-3" method="POST" action="/">
                        <input type="hidden" name="id" value="{{ $produit->id }}">
                        <label for="quantite">Quantite :</label>
                        <input type="number" name="quantite" value="1" min="1">
                        <p class="pt-3"><button class="btn btn-primary" type="submit">Ajouter au panier</button></p>
                    </form>
    
                </div>
                
            </div>

        </div>   

    </div>
@endsection
