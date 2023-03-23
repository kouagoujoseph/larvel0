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
                           <!-- Button trigger modal -->
<!--Button Modal tiggrer-->
<a href="#" class="btn btn-danger offset-5" type="button"  data-bs-toggle="modal" data-bs-target="#legalMentionsModal"><i class="bx bx-trash"></i></a> 
                              
<!-- Modal -->
<div class="modal fade" id="legalMentionsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="legalMentionsModalLabel">Legal Notice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-justify text-black">
                <br><br>
                Vous n'etes pas administrateur. Donc vous ne pouvez pas exécuter cette opération
                <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
            
            </div>
        </div>
    </div>       
 </div>
                    @endcannot
                    
                   
                </td>
                <td>
                     @can("admin")
                     <a href="{{ route('location.edit', $item) }}" class="btn btn-primary" title="Editer"> <i class=" bx bxs-edit-alt"></i>
                    </a> 
                     @endcan
                     @cannot("admin")
                          <!-- Button trigger modal -->
<!--Button Modal tiggrer-->
<a href="#" class="btn btn-primary offset-5" type="button"  data-bs-toggle="modal" data-bs-target="#legalMentionsModal"><i class=" bx bxs-edit-alt"></i></a> 
                              
<!-- Modal -->
<div class="modal fade" id="legalMentionsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="legalMentionsModalLabel">Legal Notice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-justify text-black">
                <br><br>
                Vous n'etes pas administrateur. Donc vous ne pouvez pas exécuter cette opération
                <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
            
            </div>
        </div>
    </div>       
 </div>
                     @endcannot
                   
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
    @can("admin")
    <a href="{{ route('location.create') }}" class="btn btn-primary waves-effect waves-light offset-5 text-white"> <i class="bx bx-add-to-queue"></i> Ajouter une nouvelle voiture
  </a>
  @endcan
  @cannot("admin")
      <!-- Button trigger modal -->
<!--Button Modal tiggrer-->
<a href="#" class="btn btn-primary offset-5" type="button"  data-bs-toggle="modal" data-bs-target="#legalMentionsModal">Ajoute une voiture</a> 
                              
<!-- Modal -->
<div class="modal fade" id="legalMentionsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="legalMentionsModalLabel">Legal Notice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-justify text-success">
                <br><br>
                Vous n'etes pas administrateur. Donc vous ne pouvez pas exécuter cette opération
                <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
            
            </div>
        </div>
    </div>       
 </div>
  @endcannot
  <br><br>
  <a href="/home_dashbord" class="col-2">
    <button class="btn btn-primary"><i class="bx bxs-left-arrow"></i> Page précédente</button>
</a>
  </div> 
  <br><br><br><br>
 
@endsection