@extends('template_form')

@section('title')
    Inscription
@endsection

@section('content')
    <div class="container_f">
        <form action={{route('User.update', Auth()->user()->idUser)}} method="post"  onSubmit="return validation(this)" enctype="multipart/form-data" >
            @csrf
            @method('put')

            <h3>Modification du compte</h3><hr><br>

            <div class="form-group">
                <label for="nomUser"><b>Nom</b></label>
                <input type="text"  name="nomUser" class="form-control @error('nomUser')is-invalid @enderror" id="nomUser" value="{{ $user->nomUser }}" placeholder="votre nom" >
                @error('nomUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="prenomUser"><b>Prénom</b></label>
                <input type="text"  name="prenomUser" class="form-control @error('prenomUser')is-invalid @enderror" id="prenomUser" value="{{ $user->prenomUser }}" placeholder="votre prenom" >
                @error('prenomUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email"  name="email" class="form-control @error('email')is-invalid @enderror" id="email" value="{{ $user->email }}" placeholder="votre adresse mail" >
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="telUser"><b>Prénom</b></label>
                <input type="text"  name="telUser" class="form-control @error('telUser')is-invalid @enderror" id="telUser" value="{{ $user->telUser }}" placeholder="votre tel" >
                @error('telUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="adresseUser"><b>Adresse</b></label>
                <textarea class="form-control  @error('adresseUser')is-invalid @enderror" name="adresseUser" id="adresseUser" rows="3" placeholder="votre adresse" >
                    {{ $user->adresseUser }}
                </textarea>
                @error('adresseUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br>


            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Modifier
            </button>
        </form>
    </div>  <br><br><br><br>


    <!-- javascript -->
    <script language="javascript">
        // correspondance des deux mots de passe
        function validation(f) {
            if (f.mdpClient.value != f.ConfirmMdpClient.value) {
                alert('Les deux mots de passe saisis ne sont pas les mêmes');
                f.mdpClient.focus();
                return false;
            }
            else if (f.mdpClient.value == f.ConfirmMdpClient.value) {
                return true;
            }
            else {
                f.mdpClient.focus();
                return false;
            }
        }
    </script>
@endsection
