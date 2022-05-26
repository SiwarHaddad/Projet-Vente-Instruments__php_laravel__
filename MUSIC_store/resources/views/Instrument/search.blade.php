@extends('template')

@section('title')
    Instruments
@endsection

@section('content')
    <div class="bg0 m-t-23 p-b-140">
        <section class="bg0 p-t-23 p-b-140">
            <div class="container">
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <a href="{{route('Instrument.index')}}">
                            <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 @if (!request()->categorie) {{"how-active1"}}@endif" data-filter="*">
                                Tous les produits
                            </button>
                        </a>

                        @foreach($categories as $categorie)
                            <a href={{route('Instrument.index', ['categorie' => $categorie->idCategorie])}}>
                                <button type="button" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 @if (request()->categorie &&  request()->categorie==$categorie->idCategorie) {{"how-active1"}}@endif" data-filter=".{{$categorie->libelleCategorie}}" >
                                    {{$categorie->libelleCategorie}}
                                </button>
                            </a>
                        @endforeach

                    </div>

                    <div class="flex-w flex-c-m m-tb-10">
                        {{-- <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                            Filter
                        </div>  --}}

                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer  trans-04 m-tb-4 js-show-search">
                            &emsp;
                            <form action={{route('Instrument.search')}} method="POST" class="d-flex">
                                @csrf
                                <input type="text" name="search" id="search"  placeholder="Rechercher">

                                <button type="submit">
                                    <i class="icon-search hov-btn3 p-2 cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                @if(request()->input())
                    <h3>{{$instruments->count()}} résultat(s) pour "{{request()->search}}"</h3><br><br>
                @endif

                <div class="row isotope-grid">
                    @foreach($instruments as $instrument)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" >
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">

                                    <img src={{ asset("images/instruments/$instrument->imageInstrument")}} alt={{$instrument->imageInstrument}}>

                                    <a href="{{route('Instrument.show', $instrument->idInstrument)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                        Details
                                    </a>
                                </div>

                                {{-- if(isset($_SESSION["Client"]) && $_SESSION["Client"]["rang"]){ ?> --}}
                                    <div class="flex-r p-t-3">
                                        <a href="{{route('Instrument.edit', $instrument->idInstrument)}}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                            <span class="iconify" data-icon="eva:edit-2-fill"></span>
                                        </a>

                                        <form action="{{route('Instrument.destroy', $instrument->idInstrument)}}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                                <span class="iconify" data-icon="fluent:delete-dismiss-20-filled"></span>
                                            </button>
                                        </form>

                                    </div>


                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            {{str_replace('-',' ',$instrument->libelleInstrument)}}
                                        </div>

                                        <span class="stext-105 cl3">
                                            {{$instrument->prixInstrument." TND"}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
@endsection
