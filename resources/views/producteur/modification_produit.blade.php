@extends('layouts.app')

@section('css')
    
@endsection

@include('Component.success')

@section('contenu')
<div class="m-4 pull-left">
    <a class="btn btn-primary" href="{{ url()->previous() }}">Retour</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card justify-content-center">

                <div class="card-header texte-center d-flex justify-content-center">
                    <h1>Modifier un porduits :</h1>

                </div>

                <div class="card-body">    

                    <form action="{{ route('produits.update', $produit->id) }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="m-2">

                            <div class="texte-center">
                                <p><input class="form-control" type="text" name="name"  value="{{ $produit->name }}"></p>
                            </div>

                            <div class="texte-center d-flex justify-content-center">
                                <textarea class="form-control" rows="10" cols="50" name="description" >{{ $produit->description }}</textarea>
                            </div></br>

                            <div class="texte-center d-flex justify-content-center">
                                <p><input class="form-control" type="number" name="quantite" value="{{ $produit->quantite }}"></p>
                            </div>

                            <div class="texte-center d-flex justify-content-center">
                                <p><input class="form-control" type="number" step="any" name="prix" value="{{ $produit->prix }}"p>
                            </div>

                            <div class="texte-center d-flex justify-content-center">
                                <p><input type="submit" class="btn btn-primary" value="Modifier"></p>
                            </div>
                        
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection