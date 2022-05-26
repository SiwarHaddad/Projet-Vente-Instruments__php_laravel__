@extends('template')

@section('title')
    Home
@endsection

@if (session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{session('info')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@section('content')
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                @foreach ($categories as $categorie)
                    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                        <div class="block1 wrap-pic-w">
                            <img src={{URL::asset("images/categories/$categorie->imageCategorie")}} alt="{{$categorie->imageCategorie}}">
                            <a href={{route('Instrument.index', ['categorie' => $categorie->idCategorie])}} class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        {{$categorie->libelleCategorie}}
                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Consulter
                                    </div>
                                </div>
                            </a>
                            <div class="flex-r p-t-3">
                                @if (Auth::check() && Auth()->user()->isAdmin)
                                <a href="{{route('Categorie.edit', $categorie->idCategorie)}}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                    <span class="iconify" data-icon="eva:edit-2-fill"></span>
                                </a>

                                <form action="{{route('Categorie.destroy', $categorie->idCategorie)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"  class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                        <span class="iconify" data-icon="fluent:delete-dismiss-20-filled"></span>
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                @if (Auth::check() && Auth()->user()->isAdmin)
                    <a href="{{route('Categorie.create')}}">
                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                            Ajouter une categorie
                        </button>
                    </a><br/><br/>
                @endif
            </div>
        </div>
    </div>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
@endsection
