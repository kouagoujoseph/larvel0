@extends('layout_voiture.master')
@section('content')
   <div class="main-container">
    <div class="text-center">INformations sur la voiture</div>
    @if($info->count()>0)
    <div class="col-xl-4 col-sm-6 offset-4">
        <strong>Nom de la voiture:</strong>  {{ $voiture->Nom_voiture }} <br><br>
        <strong>Marque</strong>{{ $item->marque_voiture}} <br><br>
        <strong>Matricule </strong>{{ $item->numero_matricule}}<br><br>
        <strong>Prix: </strong> {{ $voiture->prix }} <br><br>
        <strong>Etat:</strong>  {{ $voiture->etat }} <br><br>
        <strong>EstDisponible: </strong> {{ $voiture->EstDisponible}} <br>
    </div>
    @else
    <strong>Nom de la voiture:</strong>  Hangeover <br><br>
    <strong>Marque</strong>{{ $item->marque_voiture}} <br><br>
    <strong>Matricule </strong>{{ $item->numero_matricule}}<br><br>
    <strong>Prix: </strong> {{ $voiture->prix }} <br><br>
    <strong>Etat:</strong>  {{ $voiture->etat }} <br><br>
    <strong>EstDisponible: </strong> {{ $voiture->EstDisponible}} <br>
   </div>
@stop