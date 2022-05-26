@extends('template_form')

@section('title')
    Connexion
@endsection

@section('content')
    @if (session()->has('message'))
        <h1> {{session('message')}} </h1>
    @endif
    {{--
        if(isset($_GET["message"])){ ?>
            <div class="alert alert-danger alert-dismissible fade show container_f"  role="alert">
                <strong>=$_GET["message"]?></strong>
            </div>
     --}}

    <div class="container_f">
        <form action="{{route('User.SignIn')}}" method="post">
            @csrf

            <h3>Connexion</h3><hr><br>

            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email"  name="email" class="form-control @error('email')is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="donner votre e-mail" >
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <div class="form-group">
                <label for="password"><b>Mot de passe</b></label>
                <input type="password"  name="password" class="form-control @error('password')is-invalid @enderror" id="password" value="{{ old('password') }}" placeholder="votre mot de passe" >
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Se  connecter
            </button>
            <br><a href="{{route('User.getSignUp')}}"><b>Un nouveau compte?</b></a>
        </form>

        {{-- <br><a href="{{route(User.getSignUp)}}"></b>Creer un compte</b></a> --}}
    </div>  <br><br><br><br><br><br>

    <!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Panier</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Mot de passe ou/et email invalide(s)
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
				<a href="index.php?controller=Client&action=login">
					<button type="button" class="btn btn-primary" >Se connecter</button>
				</a>
			</div>
		</div>
		</div>
	</div>

@endsection
