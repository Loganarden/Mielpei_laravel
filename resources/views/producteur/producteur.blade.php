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

        <div class="container">
            <div class="fiche_client">
            <h2>vos informaion 
                <a class="btn btn-info" href="{{ route('producteur.edit', Auth::user()->id) }}">Modifier</a>  
            </h2></br>

                <table class="table col-md-8">
                    <tbody>
                        <tr>
                            <th class="table-active" >Nom</th>
                            <td> {{ Auth::user()->name }} </td>
                        </tr>
                        <tr>
                            <th class="table-active" >Adresse Email</th>
                            <td> {{ Auth::user()->email }} </td>
                        </tr>
                        <tr>
                            <th class="table-active" >Ville</th>
                            <td> {{ Auth::user()->ville }} </td>
                        </tr>
                        <tr>
                            <th class="table-active" >Numero</th>
                            <td> {{ Auth::user()->numero }} </td>
                        </tr>
                        <tr>
                            <th class="table-active" >Description</th>
                            <td> {{ Auth::user()->description }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="produit">
            {{-- tout les porduit plus crud --}}
            <div class="col-md-12 mb-4">
            <a href="/ajouterproduit"><button class="btn btn-primary">Ajouter un produit</button></a>
            </div>
            

            <div class="container">
                <table class="table col-md-12">
            
                    <thead>
            
                        <tr>
                            <th class="table-active" scope="col">Produit</th>
                            <th class="table-active" scope="col">Nom</th>
                            <th class="table-active" scope="col">Description</th>
                            <th class="table-active" scope="col">Qauntite</th>
                            <th class="table-active" scope="col">Prix</th>
                            <th class="table-active" scope="col">Modifier</th>
                        </tr>
            
                    </thead>
            
                    <tbody>
                        @foreach ($produit as $produit )
            
                        <tr scope="row">
            
                            <td class="table-active">
                                <img width="100" src="{{ $produit->image }}" class="rounded img-thumbnail" alt="{{ $produit->name }}">
                            </td>
                            <td class="table-active">
                                {{ $produit->name }}
                            </td>
                            <td>
                                {{ $produit->description }}
                            </td>
                            <td>
                                {{ $produit->quantite }}
                            </td>
                            <td>
                                 {{ number_format($produit->prix,2)  }} €
                            </td>
                            <td>
                                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('produits.edit',$produit->id) }}">Modifier</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>

                        </tr>
                
                        @endforeach
                    </tbody>
                </table>
            
            </div>

        </div>
    </div>    
@endsection