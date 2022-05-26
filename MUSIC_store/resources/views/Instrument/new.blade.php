@extends('template_form')

@section('title')
    Ajout Instrument
@endsection

@section('content')
    <div class="container_f">
        <form action={{route('Instrument.store')}} method="post" enctype="multipart/form-data" >
            @csrf
            <h3>Ajout d'un instrument</h3><hr><br>

            <div class="form-group">
                <label for="libelleInstrument"><b>Libelle</b></label>
                <input type="text"  name="libelleInstrument" class="form-control @error('libelleInstrument')is-invalid @enderror" value="{{ old('libelleInstrument') }}" id="libelleInstrument"  placeholder="Libelle de l'instrument" >
                @error('libelleInstrument')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="descriptionInstrument"><b>Description</b></label>
                <textarea class="form-control @error('descriptionInstrument')is-invalid @enderror" name="descriptionInstrument" id="descriptionInstrument"   rows="3" placeholder="Description">
                    {{ old('descriptionInstrument') }}
                </textarea>
                @error('descriptionInstrument')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br>

            <div class="form-group">
                <label for="categorieInstrument"><b> Catégorie</b></label>
                <select class="form-control" name="categorieInstrument" id="categorieInstrument">
                    @foreach($categories as $categorie)
                        <option value="{{$categorie->idCategorie}}">{{$categorie->libelleCategorie}}</option>
                    @endforeach
                </select>
            </div><br>

            <div class="form-group">
                <label for="marqueInstrument"><b>Marque</b></label>
                <input type="text"  name="marqueInstrument" class="form-control" id="marqueInstrument" placeholder="Marque de l'instrument" >
            </div><br/>

            <div class="form-group">
                <label for="imageInstrument"><b>Image d'instrument</b></label><br/>
                <input type="file" name="choosefile" class="form-control-file" id="imageInstrument" >
            </div><br/><br/>

            <div class="form-group">
                <label for="quantiteDispoInstrument"><b>Quantité disponible</b></label>
                <input type="number" min="1" name="quantiteDispoInstrument" class="form-control  @error('quantiteDispoInstrument')is-invalid @enderror" value="{{ old('quantiteDispoInstrument') }}"id="quantiteDispoInstrument" placeholder="Quantité disponible" >
                @error('quantiteDispoInstrument')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="prixInstrument"><b>Prix</b></label>
                <input type="text"  name="prixInstrument" class="form-control @error('prixInstrument')is-invalid @enderror" value="{{ old('prixInstrument') }}" id="prixInstrument" placeholder="Prix" >
                @error('prixInstrument')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Ajouter
            </button>
        </form>
    </div> <br><br><br><br>
@endsection
