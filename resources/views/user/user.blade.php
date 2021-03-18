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
            <h1 class="display-4">Bonjour {{ Auth::user()->name }} </h1>
            <p class="display-4">content de vous revoir !</p>
        </div></br></br>

        <div class="container">
            <div class="fiche_client">
                <h2>vos information</h2> </br>
                
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
@endsection