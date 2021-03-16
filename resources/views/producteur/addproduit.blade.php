@extends('layouts.app')

@section('css')
    
@endsection


@section('contenu')

    <div class="m-4 pull-left">
        <a class="btn btn-primary" href="{{ url()->previous() }}">Retour</a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card justify-content-center">

                    <div class="card-header texte-center d-flex justify-content-center">
                        <h1>Ajouter un porduits :</h1>

                    </div>

                    <div class="card-body">    

                        <form action="/ajouterproduit" method="POST">
                            {{ csrf_field() }}

                            <div class="m-2">

                                <div class="texte-center">
                                    <p><input class="form-control" type="text" name="name" placeholder="Nom du produit"></p>
                                </div>

                                <div class="texte-center d-flex justify-content-center">
                                    <textarea class="form-control" rows="10" cols="50" name="description" placeholder="Déscription"></textarea>
                                </div></br>

                                <div class="texte-center d-flex justify-content-center">
                                    <p><input class="form-control" type="number" name="quantite" placeholder="Quantites"></p>
                                </div>

                                <div class="texte-center d-flex justify-content-center">
                                    <p><input class="form-control" type="number" step="any" name="prix" placeholder="Prix"></p>
                                </div>

                                <div class="texte-center d-flex justify-content-center">
                                    <p><input type="submit" class="btn btn-primary" value="Ajouter"></p>
                                </div>
                            
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection