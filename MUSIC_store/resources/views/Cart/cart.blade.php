@extends('template')

@section('title')
    Panier
@endsection


@section('content')
@if (session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{session('info')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <!-- Shoping Cart -->
        <form class="bg0 p-t-75 p-b-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg- col-xl-8 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-1">Produit</th>
                                        <th class="column-2"></th>
                                        <th class="column-2"></th>
                                        <th class="column-3" colspan="2">Prix</th>
                                        <th class="column-4">Quantite</th>
                                        <th class="column-5" >Total</th>
                                        <th class="column-2"></th>
                                    </tr>
                                    <?php $total = 0; ?>
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            <tr class="table_row">
                                                <td class="column-1">
                                                    <div class="how-itemcart1">
                                                        <img src="images/instruments/{{$details['imageInstrument']}}" alt="{{$details['imageInstrument']}}">
                                                    </div>
                                                </td>
                                                <td class="column-2">{{str_replace('-',' ',$details['libelleInstrument'])}}</td>
                                                <td>&emsp;</td>
                                                <td class="column-3" colspan="2">{{$details['prixInstrument']." TND"}}</td>
                                                <td class="column-4">
                                                    <div class="flex-w flex-r-m p-b-10">
                                                        <div class=" size-204 flex-m respon6-next">
                                                            <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                                <input class="w-25" style="text-align:center;" value="{{$details['quantite']}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="column-5">
                                                    <?php $total += $details['prixInstrument'] * $details['quantite']; ?>
                                                    {{$details['prixInstrument'] * $details['quantite']}} TND
                                                </td>
                                                {{-- <td>
                                                <a href="" class="icon-header-item cl2 hov-cl1 trans-04 p-l-10 p-r-1 js-show-cart">
                                                    <span class="iconify" data-icon="eva:edit-2-fill"></span>
                                                </a>
                                                </td> --}}
                                                <td>
                                                    <a href="{{route('Cart.removeItem', $id)}}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-50 js-show-cart">
                                                        <span class="iconify" data-icon="fluent:delete-dismiss-20-filled"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <a href="{{route('Instrument.index')}}">
                                    <button type="button" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Poursuivre l'achat
                                    </button>
                                </a>

                                <a href="{{route('Cart.remove')}}">
                                    <button type="button" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        vider Panier
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-4 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Totals Achat
                            </h4>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        <?=$total.' TND'?>
                                    </span>
                                </div>
                            </div>
                            <a href="{{route('Commande.store')}}">
                                <button type="button" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" >
                                    Passer la commande
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
@endsection



