@extends('template')

@section('title')
    Activités
@endsection

@section('content')
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">num commande</th>
            <th scope="col">date</th>
            <th scope="col">facture</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($factures as $facture)
                <tr>
                    <td>{{$facture->numCommande}}</td>
                    <td>{{$facture->dateCommande}}</td>
                    <td><a href="{{route('Facture.download',$facture->facture)}}">{{$facture->facture}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
</div>
@endsection
