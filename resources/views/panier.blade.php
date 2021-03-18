@extends('layouts.app')

@section('css')
    
@endsection

@section('contenu')

<div class="container">
    <table class="table col-md-12">

        <thead>

            <tr>
                <th class="table-active" scope="col">Produit</th>
                <th class="table-active" scope="col">Nom</th>
                <th class="table-active" scope="col">Qauntite</th>
                <th class="table-active" scope="col">Prix</th>
                <th class="table-active" scope="col">Total</th>
            </tr>

        </thead>

        <tbody>
            @foreach ($content as $produit )

            <tr scope="row">

                <td class="table-active">
                    <img width="100" src="{{ $produit->image }}" class="rounded img-thumbnail" alt="{{ $produit->name }}">
                </td>
                <td class="table-active">
                    {{ $produit->name }}
                </td>
                <td>
                    {{ $produit->quantity }}
                </td>
                <td>
                    {{ number_format($produit->price,2)  }} €
                </td>
                <td>
                    {{ number_format($produit->price * $produit->quantity,2) }} €
                </td>
            </tr>
    
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3"></th>
                <td class="table-active" colspan="1">Total TTC</td>
                <td>{{ number_format($total,2) }} € </td>
            </tr>
        </tfoot>
    </table>

</div>
    
@endsection