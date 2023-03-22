@extends('layout_voiture.master')
@section('content')
@can("admin")
<form action="{{ route('location.update',$offre->id) }}" method="POST" class="col-8 offset-2  bg-white"
    enctype="multipart/form-data">
    <fieldset>
        <legend>
            <h3 class="text-center">Editer la voiture</h3>
        </legend>
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="card-body">
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Nom_voiture</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="Nom_voiture" id="example-text-input"
                        value="{{ $offre->Nom_voiture}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Marque_voiture</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="marque_voiture" id="example-text-input"
                        value="{{ $offre->marque_voiture }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Numéro_matricule</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="numero_matricule" id="example-text-input"
                        value="{{ $offre->numero_matricule }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">EstDisponible</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="EstDisponible" id="example-text-input"
                        value="{{ $offre->EstDisponible }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">prix</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="prix" id="example-text-input"
                        value="{{ $offre->prix}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Etat</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="etat" id="example-text-input"
                        value="{{ $offre->etat}} ">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">image</label>
                <div class="col-md-10">
                    <input class="form-control" type="file" name="image" id="example-text-input"
                        value="{{ $offre->image}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">Modifier les information de la voiture</button>
        </div>
    </fieldset> 
</form>
@endcan
@cannot("admin")
<div class="text-center bg-danger h2 offset-4 col-4">Vous n'etes pas administrateur. Vous ne pouvez pas effectuer cette fonction</div>
@endcannot
<form action="{{ route('location.index') }}" class="">
    <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
</form>
@stop