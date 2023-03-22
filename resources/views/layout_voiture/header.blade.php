<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <header id="page-topbar">
        <div class="navbar-header">
            <nav class="navbar navbar-static-top navbar-expand-lg bg-bbcar-color py-4">
                <div class="container-fluid d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-center nav-content" id="nav-content">
                        <div class="collapse navbar-collapse d-lg-flex d-md-none  w-100" id="navbarSupportedContent">
                            <ul
                                class="navbar-nav mb-2 mb-lg-0 w-100 d-flex justify-content-between align-items-center ">


                                <li class="nav-item">
                                    <a class="nav-link text-black active text-uppercase " aria-current="page"
                                        href="/home_dashbord"><strong><i class="bx bx-home-circle"></i> Accueil</strong></a>
                                </li>
                                <li class="nav-item "><a class="nav-link text-black text-uppercase"
                                        href="/location"><strong><i class="bx bxs-badge"></i>
                                            Gestion-voiture</strong></a></li>

                                <li class="nav-item ">
                                    <a class="nav-link text-black text-uppercase " href="{{ route('voitures_louées') }}"><strong> <i
                                                class="bx bx-list-ol"></i> Voitures-louées</strong></a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link text-black text-uppercase" href="/home_dashbord"><strong><i
                                                class="bx bx-taxi"></i> louer-voiture</strong></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-black text-uppercase" href="{{ route('rendre') }}"><strong>
                                            <i class="bx bx-redo"></i> Rendre-voiture</strong></a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link text-black text-uppercase" href="{{ route('contact') }}"><strong> <i
                                                class="bx bx-phone-outgoing"></i> Contactez-nous</strong></a>
                                </li>
                                @if (Route::has('login'))
                                @auth
                                
                                    <div class="dropdown d-inline-block">
                                        <button type="button" class="btn header-item waves-effect bg-white" id="page-header-user-dropdown"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Se deconnecter
                                            <span class="d-none d-xl-inline-block ms-1" key="t-henry"></span>
                                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a class="dropdown-item" href="{{ route('profile.show') }}"><i
                                                    class="bx bx-user font-size-16 align-middle me-1"></i> <span
                                                    key="t-profile">Profile</span></a>
                    
                                            <div class="dropdown-divider"></div>
                    
                                            <a class="dropdown-item text-danger" href="{{ route('deconnexion') }}"><i
                                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                                    key="t-logout">Logout</span></a>
                                        </div>
                                    </div>
                                @else
                                <div class="d-flex align-items-center ">
                                    <li class="nav-item me-3">
                                        <a href="{{ route('login') }}"
                                            class="nav-link text-uppercase btn btn-sm bg-white px-3 bbcar-color fw-bold"><strong>Connexion</strong></a>
                                    </li>
                                </div>

                                @if (Route::has('register'))
                                <li class="nav-item text-uppercase">
                                    <a href="{{ route('register') }}" u
                                        class="nav-link text-uppercase btn btn-sm bg-white px-3 bbcar-color fw-bold"
                                        id="btn-essai">CREER UN COMPTE</a>
                                </li>
                                @endif
                                @endauth
                                @endif

                            </ul>
                        </div>
                        {{-- Mobile navbar --}}
                        <button class=" rounded mobile-toggle mobile-toggle-square border border-white" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFF"
                                    class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </i>
                        </button>
                        <div class="offcanvas offcanvas-end bg-bbcar-color" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel"> </h5>
                                <button type="button" class=" border-none border-0 btn-x text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close">

                                    <i class="btn-x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#FFF"
                                            class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </i>
                                </button>
                            </div>
                            <div class="offcanvas-body w-100 p-0 m-0">
                                <ul class="p-0 m-0">
                                    <li class="nav-item"><a class="nav-link " href="home_dashbord">Accueil</a></li>
                                    <li class="nav-item"><a class="nav-link " href="/location">Gestion-voiture</a></li>
                                    <li class="nav-item"><a class="nav-link " href="{{ route('voitures_louées') }}">Voitures louées</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link " href="{{ route('louer_voiture') }}">Louer-voiture</a></li>
                                    <li class="nav-item"><a class="nav-link " href="{{ route('rendre') }}">Rendre-voiture</a></li>
                                    <li class="nav-item"><a class="nav-link " href="{{ route('contact') }}">Contactez-nous</a></li>
                                      @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/home') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                    @else
                                    <div class="d-flex align-items-center ">
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}"
                                                class="nav-link text-uppercase btn btn-sm bg-white px-3 bbcar-color fw-bold"><strong>Connexion</strong></a>
                                        </li>
                                    </div>

                                    @if (Route::has('register'))
                                    <li class="nav-item text-uppercase">
                                        <a href="{{ route('register') }}" u
                                            class="nav-link text-uppercase btn btn-sm bg-black px-3 bbcar-color fw-bold"
                                            id="btn-essai">
                                            CREER UN COMPTE
                                        </a>
                                    </li>
                                    @endif
                                    @endauth

                                    @endif
                                </ul>
                            </div>
                        </div>
                        {{-- End Offcanvas for mobile screen --}}
                    </div>
                </div>
            </nav>
        </div>

    </header>
</body>