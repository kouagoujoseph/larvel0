@extends('layout_voiture.master')
@section('content')
   <div class="main-container">
   <div>Liste des locations</div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nom Voiture</td>
                <td>Marque voiture</td>
                <td>numéro Matricule</td>
                <td>prix de location</td>
                <td>image</td>
                <td>Date de  debut</td>
                <td>Date de Fin</td>
                <td>Detail de la voiture</td>
                <td>Rendre</td>

            </tr>
        </thead>
        <tbody>
            @if($locations->count()>0)

            @foreach ($locations as $location)

    @foreach ($location->voiture() as $item )
        
            <tr>
                <td>{{ $location->id}} </td>
                <td>{{ $item->Nom_voiture}} </td>
                <td>{{ $item->marque_voiture}} </td>
                <td>{{ $item->numero_matricule}} </td>
                <td>{{ $item->prix}} </td>
                <td><img src="/votre-route/"></td>
                 <td>{{ $location->Date_location}} </td>
                <td>{{ $location->Fin_location}} </td>


                <td>
                <a href="{{ route('locations.rendre_voiture', $item) }}" class="btn btn-danger offset-5" type="button"  data-bs-toggle="modal" data-bs-target="#rendreModal"><i class="bx bx-trash"></i></a> 

                    <div class="modal fade" id="rendreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="legalMentionsModalLabel">Reour de la voiture</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                    <div class="modal-body text-justify text-black">
                        <br><br>
                        {{$message}}
                        <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
                    
                    </div>
                </div>
            </div>       
        </div>
                                                  
                </td>
                
                <td>
                    <a href="{{ route('locations.show', $item) }}" title="show"> 
                        <form action="{{ route('locations.show', $item) }}" method="GET">
                        {{ csrf_field() }}
                        <button class="btn btn-success" title="show">Detail_voiture</button>
                    </form>
                    </a>
                </td>
            </tr>

            @endforeach
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
   
    <a href="{{ route('voitures') }}" class="btn btn-primary waves-effect waves-light offset-5 text-white"> <i class="bx bx-add-to-queue"></i> Effectuer nouvelle location
  </a>

  
  <br><br>
  <a href="/home_dashbord" class="col-2">
    <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
</a>
  </div> 
  <br><br><br><br>
 
@endsection