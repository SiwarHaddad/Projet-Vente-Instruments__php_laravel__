@extends('template_form')

@section('title')
    Modification categorie
@endsection

@section('content')
    <div class="container_f">
        <form action="{{route('Categorie.update', $categorie->idCategorie)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('put')

            <h3>Modification d'une categorie</h3><hr><br>

            <div class="form-group">
                <label for="libelleCategorie"><b>Libelle</b></label>
                <input type="text"  name="libelleCategorie" class="form-control" id="libelleCategorie" value={{$categorie->libelleCategorie}} placeholder="donner un libelle pour votre categorie" required>
            </div><br/>



            <div class="form-group">
                <label for="imageCategorie"><b>Image de categorie</b></label>

                <div class="block1 wrap-pic-w" style="width:50%;margin:auto 0">
                    <img src={{URL::asset("images/categories/{$categorie->imageCategorie}")}}  alt={{$categorie->imageCategorie}}>
                </div><br>

                <input type="hidden" name="imgCategorie" value={{$categorie->imageCategorie}}>
                <input type="file" name="choosefile" class="form-control-file" id="imageCategorie"  value={{$categorie->imageCategorie}}    >
            </div><br/><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Modifier
            </button>
        </form>
    </div> <br><br><br><br>
@endsection
