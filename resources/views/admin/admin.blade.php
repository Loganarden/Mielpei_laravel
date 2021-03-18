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
        
        <div class="container">

            <div class="row">

                <div class="title align-self-center presentation col">
                    <h1>Bonjour {{ Auth::user()->name }}  </h1>
                    <p>content de vous revoir administrateur!</p>
                </div>

                <div class="add_admin col col-lg-4">
                    <a class="nav-link" href="/inscription_admin">Ajouter un Administrateur</a>
                </div>
            </div>

            <div class="container">
                <div class="fiche_client">
                    <h2>vos informaion</h2></br>
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
                        </tbody>
                    </table>
                </div>
            </div>
    
        </div>
        
        <div class="list">
            {{-- liste des producteur  --}}
        </div>

        <div class="listu">
            {{-- liste des utilisatuer inscrit --}}
        </div>
    </div>    
@endsection