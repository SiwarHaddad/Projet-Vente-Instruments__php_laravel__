@extends('template_facture')

@section('title')
    Facture
@endsection

@section('body')
    <div class="col-md-12">
        <div class="row">
            <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
               <div class="row">
                   <div class="receipt-header">
                       <div class="col-xs-6 col-sm-6 col-md-6">

                       </div>
                       <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <table>
                        <tr>
                               <td> <img src={{asset('images/musicStore.png')}} height="50" alt="logo">
                               </td>
                               <td>
                                    <div class="receipt-right" >
                                        <h5>MUSIC_store</h5>
                                        <p>+7 5679-6589 <i class="fa fa-phone"></i></p>
                                        <p>music_store@gmail.com <i class="fa fa-envelope-o"></i></p>
                                        <p>TUNISIA <i class="fa fa-location-arrow"></i></p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="receipt-header receipt-header-mid">
                       <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                           <div class="receipt-right" style="float: right; width: 20%">
                               <h5>{{$user->nomUser}}&emsp;{{$user->prenomUser}} </h5>
                               <p><b>Mobile :</b> {{$user->telUser}}</p>
                               <p><b>Email :</b> {{$user->email}}</p>
                               <p><b>Address :</b> {{$user->adresseUser}}</p>
                           </div>
                       </div>
                   </div>
               </div>

               <div>
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th colspan="2">Description</th>
                               <th>Quantité</th>
                               <th>Prix Unitaire</th>
                               <th>Sous-total</th>
                           </tr>
                       </thead>
                       <tbody>
                            @foreach ($detail as $ligne)
                                <tr>
                                    <td class="col-md-8">
                                        <img src={{URL::asset("images/instruments/$ligne->imageInstrument")}} width="50" height="50" alt="{{$ligne->imageInstrument}}">
                                    </td>
                                    <td>
                                        {{$ligne->libelleInstrument}}
                                    </td>
                                    <td class="col-md-1"><i class="fa fa-inr"></i> {{$ligne->quantite}}</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> {{$ligne->prixInstrument}}</td>
                                    <td class="col-md-3"><i class="fa fa-inr"></i> {{$ligne->prixInstrument * $ligne->quantite}}</td>
                                </tr>
                            @endforeach

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"><h2><strong>Total: </strong></h2></td>
                                <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> {{ $user->totalPrix }}</strong></h2></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="receipt-header receipt-header-mid receipt-footer">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                            <div class="receipt-right">
                                <p><b>Date :</b> {{$user->dateCommande}}</p>
                                <h5 style="color: rgb(140, 140, 140);">Merci et bienvenue!</h5>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="receipt-left">
                                <img src={{asset('images/signature.png')}} width="50" height="50" alt="signature">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection
