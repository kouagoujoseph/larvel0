@extends('layout_voiture.master')
@section('content')
<div class="main-container">
    <div class="col-xl-4 col-sm-6 offset-4">
        <div class="card">
            <div class="card-body">
                <div class="product-img position-relative">
                    image de la voiture
                    <img src="{{ route('location.show', $voiture->id) }}" alt="">

                    {{--  <img src="{{ route('location.show'),$model->id}}" alt=""
                        class="img-fluid mx-auto d-block">--}}
                </div>
                <div class="mt-4 text-center">
                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);"
                            class="text-dark">
                        </a></h5>

                    <p class="text-muted">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star"></i>
                    </p>
                    <form action="">
                        
                        <button class="btn btn-primary">voir detail</button>
                        <button class="btn btn-primary">louer-voiture</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 offset-4">
        <strong>Nom de la voiture:</strong>  {{ $voiture->Nom_voiture }} <br><br>
        <strong>Prix: </strong> {{ $voiture->prix }} <br><br>
        <strong>Etat:</strong>  {{ $voiture->etat }} <br><br>
        <strong>EstDisponible: </strong> {{ $voiture->EstDisponible}} <br>
    </div>
    <br>
    <form action="{{ route('location.index') }}" >
        <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
    </form>
</div>

@stop