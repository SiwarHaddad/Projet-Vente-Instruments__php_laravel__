@extends('template_form')

@section('title')
    Inscription
@endsection

@section('content')
    <div class="container_f">
        <form action="{{route('User.SignUp')}}" method="post"  onSubmit="return validation(this)" enctype="multipart/form-data" >
            @csrf

            <h3>Inscription</h3><hr><br>

            <div class="form-group">
                <label for="nomUser"><b>Nom</b></label>
                <input type="text"  name="nomUser" class="form-control @error('nomUser')is-invalid @enderror" id="nomUser" value="{{ old('nomUser') }}" placeholder="votre nom" >
                @error('nomUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="prenomUser"><b>Prénom</b></label>
                <input type="text"  name="prenomUser" class="form-control @error('prenomUser')is-invalid @enderror" id="prenomUser" value="{{ old('prenomUser') }}" placeholder="votre prenom" >
                @error('prenomUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email"  name="email" class="form-control @error('email')is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="votre adresse mail" >
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="telUser"><b>Telephone</b></label>
                <input type="text"  name="telUser" class="form-control @error('telUser')is-invalid @enderror" id="telUser" value="{{old('telUser') }}" placeholder="votre tel" >
                @error('telUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="adresseUser"><b>Adresse</b></label>
                <textarea class="form-control  @error('adresseUser')is-invalid @enderror" name="adresseUser" id="adresseUser" rows="3" placeholder="votre adresse" >
                    {{ old('adresseUser') }}
                </textarea>
                @error('adresseUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br>

            <div class="form-group">
                <label for="password"><b>Mot de passe</b></label>
                <input type="password"  name="password" class="form-control @error('password')is-invalid @enderror" id="password" value="{{ old('password') }}" placeholder="votre mot de passe" >
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="password_confirmation"><b>Confirmer mot de passe</b></label>
                <input type="password"  name="password_confirmation" class="form-control" id="password_confirmation" placeholder="votre mot de passe" >
            </div><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                S'inscrire
            </button>
        </form>
        <br><a href="{{route('User.getSignIn')}}"><b>Déjà incris</b></a>
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
