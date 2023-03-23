@extends('layout_voiture.master')
@section('content')

<form action="{{ route('locations.store',$voiture)}}" method="POST" class="col-8 offset-2  bg-white"
    enctype="multipart/form-data">
    <fieldset>
        <legend>
            <h3 class="text-center">Effecuter Location </h3>
        </legend>
        {{ csrf_field() }}

        <div class="card-body">
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Date de debut</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="Date_location" id="example-text-input ">
                </div>
            </div>
            
            <div class="mb-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label">Date de Fin</label>
                <div class="col-md-10">
                    <input class="form-control required" type="text" name="Date_location" id="example-text-input ">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">Valider location</button>
        </div>
    </fieldset>
</form>

<form action="{{ route('locations.index') }}" class="">
    <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
</form>
@endsection