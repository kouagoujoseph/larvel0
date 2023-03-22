@extends('layout_voiture.master')
@section('content')
   <div class="main-container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nom</td>
                <td>Marque voiture</td>
                <td>numéro Matricule</td>
                <td>EstDisponible</td>
                <td>prix</td>
                <td>Etat</td>
                <td>image</td>
                <td>Suppprimer</td>
                <td>Editer</td>
                <td>Detail de la voiture</td>
            </tr>
        </thead>
        <tbody>
            @if($info->count()>0)

            @foreach ($info as $item)
            <tr>
                <td>{{ $item->id}} </td>
                <td>{{ $item->Nom_voiture}} </td>
                <td>{{ $item->marque_voiture}} </td>
                <td>{{ $item->numero_matricule}} </td>
                <td>{{ $item->EstDisponible}} </td>
                <td>{{ $item->prix}} </td>
                <td>{{ $item->etat}} </td>
                <td><img src="/votre-route/"></td>
                <td>
                    @can("admin")
                    <form action="{{ route('location.destroy', $item) }}" method="POST"
                    onsubmit=" return confirm('Voulez-vous vraiment supprimer?');">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}   
                    <button class="btn btn-danger" title="Supprimer"><i class="bx bx-trash"></i></button>
                </form> 
                    @endcan
                    @cannot("admin")
                    <button class="btn btn-danger" title="Supprimer">pas autorisé</button>
                    @endcannot
                    
                   
                </td>
                <td>
                    <a href="{{ route('location.edit', $item) }}" class="btn btn-primary" title="Editer"> <i class=" bx
                        bxs-edit-alt"></i></a>
                </td>
                <td>
                    <a href="{{ route('location.show', $item) }}" title="show"> 
                        <form action="{{ route('location.show', $item) }}" method="GET">
                        {{ csrf_field() }}
                        <button class="btn btn-success" title="show">Detail_voiture</button>
                    </form>
                    </a>
                </td>
            </tr>

            @endforeach
            @else
            <h1> <strong>
                Pas de voiture en location
                </strong> 
            </h1>
            @endif
        </tbody>

    </table>
    <br>
    <a href="{{ route('location.create') }}" class="btn btn-primary waves-effect waves-light offset-5 text-white"> <i class="bx bx-add-to-queue"></i> Ajouter une nouvelle voiture
  </a>
  <br><br>
  <a href="/home_dashbord" class="col-2">
    <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
</a>
  </div> 
  <br><br><br><br>
 
@endsection