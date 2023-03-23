@extends('layout_voiture.master')
@section('content')

<form action="{{ route('location.store')}}" method="POST" class="col-8 offset-2  bg-white"
    enctype="multipart/form-data">
    <fieldset>
        <legend>
            <h3 class="text-center">Creer une voiture</h3>
        </legend>
        {{ csrf_field() }}

        <div class="card-body">
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Nom_Voiture</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="Nom_voiture" id="example-text-input ">
                </div>
            </div>
            
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">marque_voitre</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="marque_voiture" id="example-text-input ">
                </div>
            </div>
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">numéro_matricule</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="numero_matricule" id="example-text-input ">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">EstDisponible</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="EstDisponible" id="example-text-input">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">prix</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="prix" id="example-text-input">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Etat</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="etat" id="example-text-input">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Image</label>
                <div class="col-md-10">
                    <input class="form-control required" type="file" name="image" id="example-text-input">
                </div>
            </div>
            <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">creer la voiture</button>
        </div>
    </fieldset>
</form>



<form action="{{ route('location.index') }}" class="">
    <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
</form>
@endsection