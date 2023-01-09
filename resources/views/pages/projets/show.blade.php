@extends('layouts.app')
@section('content')
   <h3 class="text-center my-5">Projet: {{ $projet->nom}}</h3>

   <table id="myTable" class="table table-hover">
      <thead>
         <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Début</th>
            <th>Fin</th>
         </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{ $projet->nom }}</td>
            <td>{{ $projet->description }}</td>
            <td>{{ $projet->date_debut }}</td>
            <td>{{ $projet->date_fin }}</td>
        </tr>
      </tbody>
   </table>

    @if(count($projet->phases) > 0 )
        <h6 class="text-center my-3">Phases du projets</h6>
        <table class="table table-hover">
            <thead>
               <tr>
                  <th>Nom</th>
                  <th>Durée</th>
                  <th>Priorité</th>
               </tr>
            </thead>
            <tbody>
                @foreach($projet->phases as $phase)
                    <tr>
                        <td>{{ $phase->nom }}</td>
                        <td>{{ $phase->duree }}</td>
                        <td>{{ $phase->priorite }}</td>
                    </tr>
                @endforeach
            </tbody>
         </table>
    @else
        <h6 class="text-danger text-center mt-5">Il n'y a pas encore de phases pour ce projet !</h6>
    @endif

    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#ajoutProjet">Ajouter une phase</button>
    </div>

   <!-- Modal -->
   <div class="modal fade" id="ajoutProjet" tabindex="-1" aria-labelledby="ajoutProjetLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="ajoutProjetLabel">Ajout de phase</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body px-5">
          <form action="{{ route('projets.update', $projet->id ) }}" method="POST">
             @csrf
             @method("put")
             <div class="form-group mb-3">
                <label>{{ __('Phase') }}:</label>
                <input type="text" name="nom" class="form-control" required>
             </div>
             <div class="form-group mb-3">
                <label>{{ __('Durée') }}:</label>
                <input type="time" name="duree" class="form-control" required>
             </div>
             <div class="form-group mb-3">
                <label>{{ __('Priorité') }}:</label>
                <input type="text" name="priorite" class="form-control" required>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">Fermer</button>
                <button type="submit" class="btn btn-outline-success">Créer</button>                               
             </div>     
          </form>
       </div>
    </div>
    </div>
 </div>
@stop