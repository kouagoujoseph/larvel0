@extends('layout_voiture.master')
@section('content')
    <div class="main-container">
        <div class="h1 text-center">Voulez vous louer une voiture?</div>

        <div class="row">
            {{-- 
                 @if($infos->count()>0)
                @foreach ($infos as $item)
                    <div class="col-xl-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="product-img position-relative">
                                    <div class="avatar-sm product-ribbon">
                                        <span class="avatar-title rounded-circle  bg-primary">
                                            - 25 %
                                        </span>
                                    </div>
                                    <img src="{{ $item->image }}" alt=""
                                        class="img-fluid mx-auto d-block">
                                </div>
                                <div class="mt-4 text-center">
                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">
                                            Nouvelle voiture ajoutée </a></h5>

                                    <p class="text-muted">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </p>
                                    <form action="">
                                        <button class="btn btn-primary">voir detail</button>
                                        <button class="btn btn-primary">louer-voiture</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
                 --}}

            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img position-relative">
                            <div class="avatar-sm product-ribbon">
                                <span class="avatar-title rounded-circle  bg-primary">
                                    - 25 %
                                </span>
                            </div>
                            <img src="assets/images/product/img-1.jfif " alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                        <div class="mt-4 text-center">
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">
                                    Voiture climatisée avec capteur </a></h5>

                            <p class="text-muted">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                            </p>
                            <form action="">
                                
                                <button class="btn btn-primary">louer la voiture</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img position-relative">
                            <img src="assets/images/product/img-2.jfif" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                        <div class="mt-4 text-center">
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);"
                                    class="text-dark">Voiture climatisée
                                </a></h5>

                            <p class="text-muted">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star"></i>
                            </p>
                            <form action="">
                                
                                <button class="btn btn-primary">louer la voiture</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img position-relative">
                            <div class="avatar-sm product-ribbon">
                                <span class="avatar-title rounded-circle  bg-primary">
                                    - 20 %
                                </span>
                            </div>
                            <img src="assets/images/product/img-3.jfif" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                        <div class="mt-4 text-center">
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);"
                                    class="text-dark">Voiture a moteur puissant
                                </a></h5>

                            <p class="text-muted">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star"></i>
                            </p>
                            <form action="">
                                
                                <button class="btn btn-primary">louer la voiture</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img position-relative">
                            <img src="assets/images/product/img-4.jfif" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                        <div class="mt-4 text-center">
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">fast
                                    car
                                </a></h5>

                            <p class="text-muted">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star"></i>
                            </p>
                            <form action="">
                                
                                <button class="btn btn-primary">louer la voiture</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">

                        <div class="product-img position-relative">
                            <div class="avatar-sm product-ribbon">
                                <span class="avatar-title rounded-circle  bg-primary">
                                    - 22 %
                                </span>
                            </div>
                            <img src="assets/images/product/img-5.jfif" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                        <div class="mt-4 text-center">
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">
                                    Nouveau venu</a></h5>

                            <p class="text-muted">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star"></i>
                            </p>
                            <form action="">
                               
                                <button class="btn btn-primary">louer la voiture</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img position-relative">
                            <div class="avatar-sm product-ribbon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    - 28 %
                                </span>
                            </div>
                            <img src="assets/images/product/img-6.jfif" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                        <div class="mt-4 text-center">
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);"
                                    class="text-dark">Super voiture en puissance
                                </a></h5>

                            <p class="text-muted">
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star text-warning"></i>
                                <i class="bx bxs-star"></i>
                            </p>
                            <form action="" method="POST">
                               
                                <button class="btn btn-primary">louer la voiture</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <form action="/" class="">
        <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
    </form>
@endsection