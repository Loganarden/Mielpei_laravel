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
                    <h2>vos informaion
                        <a class="btn btn-info" href="{{ route('clients.edit', Auth::user()->id) }}">Modifier</a>      
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
                        </tbody>
                    </table>
                </div>
            </div></br>

            <div class="listu">
                {{-- liste des utilisatuer inscrit --}}
                <div class="container">
                    <h2>Liste des client</h2>
                    <table class="table col-md-8">
                        <thead>
                            <tr>
                                <th class="table-active" scope="col">Nom</th>
                                <th class="table-active" scope="col">Email</th>
                                <th class="table-active" scope="col"></th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach ($user as $user )
                            <tr scope="row">
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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

                <div class="list">
                    {{-- liste des producteur  --}}
                    <div class="container">
                        <h2>Liste des producteur</h2>
                        <table class="table col-md-8">
                            <thead>
                                <tr>
                                    <th class="table-active" scope="col">Nom</th>
                                    <th class="table-active" scope="col">Email</th>
                                    <th class="table-active" scope="col"></th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                @foreach ($producteur as $producteur )
                                <tr scope="row">
                                    <td>
                                        {{ $producteur->name }}
                                    </td>
                                    <td>
                                        {{ $producteur->email }}
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', $producteur->id) }}" method="POST">
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
        
        </div>

    </div>    
@endsection