<?php
	//if (session_status() == PHP_SESSION_NONE) {
    //    session_start();
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href={{URL::asset("images/icon.png")}}/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/bootstrap/css/bootstrap.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("fonts/iconic/css/material-design-iconic-font.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("fonts/linearicons-v1.0.0/icon-font.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/animate/animate.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/css-hamburgers/hamburgers.min.css") }}>
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="Public/vendor/animsition/css/animsition.min.css") }}> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/select2/select2.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/daterangepicker/daterangepicker.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/slick/slick.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/MagnificPopup/magnific-popup.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("vendor/perfect-scrollbar/perfect-scrollbar.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::to("css/util.css") }}>
	<link rel="stylesheet" type="text/css" href={{ URL::to("/css/main.css") }}>
<!--===============================================================================================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--===============================================================================================-->

</head>

<body class="animsition">
	<!-- Header -->
	<header class="header-v4" >
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container" >

				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1" style="top: 0;">
				<nav class="limiter-menu-desktop container">
					<!-- Logo desktop -->
					<a href="index.php" class="logo">
						<img src={{URL::asset("images/musicStore.png")}} alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{route('Categorie.index')}}">Home</a>
							</li>

							<li>
								<a href="{{route('Instrument.index')}}">Produits</a>
							</li>

							<li>
                                <a>Compte</a>
								<ul class="sub-menu">
                                    @if (Auth::check())
                                    <li><a href={{route('User.edit', Auth()->user()->idUser)}}>Consulter et modifier le compte</a></li>
                                    {{-- <li><a href={{route('User.setMdp', Auth()->user()->idUser)}}>modifier le mot de passe</a></li> --}}
                                    <li>
                                        <form action="{{route('User.destroy', Auth()->user()->idUser)}}" method="post">
                                            @csrf
                                                @method('delete')

                                                <button type="submit" name="destroy" class=" cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                                                    Supprimer le compte
                                                </button>
                                            </form>
                                        </li>
                                        <li><a href={{route('User.logout')}}>Se déconnecter</a></li>
                                    @else
                                        <li><a href="{{route('User.getSignUp')}}">S'inscrire</a></li>
										<li><a href="{{route('User.getSignIn')}}">Se connecter</a></li>
                                    @endif
								</ul>
							</li>

                            @if (Auth::check())
                            <li>
                                <a href="{{route('Facture.index')}}">Activités</a>
                            </li>
                            @endif

							<li>
								<a href="#">A propos</a>
							</li>

							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						@if (Auth::check())
							<a href="{{route('Cart.getCart')}}" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="@if (session()->has('cart')) {{count(session()->get('cart'))}} @else {{0}} @endif">
							    <i class="zmdi zmdi-shopping-cart"></i>
							</a>
						@else
							<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="@if (session()->has('cart')) {{count(session()->get('cart'))}} @else {{0}} @endif">
									<i class="zmdi zmdi-shopping-cart"></i>
							    </div>
							</button>
						@endif
					</div>
				</nav>
			</div>
		</div>

        @if (session()->has('info'))
            <div class="alert alert-info alert-dismissible  text-center fade show" role="alert">
                {{session('info')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                    <span aria-hidden="true" onclick="this.parentElement.style.display='none';
                                                    this.parentElement.parentElement.style.display='none';">&times;
                    </span>
                </button>
            </div>
        @endif

	</header>

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
				Connectez-vous pour avoir acces au panier et y ajouter des produits
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<a href="{{route('User.getSignIn')}}">
					<button type="button" class="btn btn-primary" >Se connecter</button>
				</a>
			</div>
		</div>
		</div>
	</div>

    <!-- content -->
        @yield('content')

    <!-- Footer -->

    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;2022 All rights reserved | Siwar Haddad
            </p>
        </div>
    </footer>
</body>
</html>
