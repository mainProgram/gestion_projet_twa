@extends('layouts.app')
@section('content')
   <h3 class="text-center my-5">
      Liste des projets 
      <a href="{{ route("projets.create") }}">
         <i class="fa fa-plus"></i>
      </a>
   </h3>
   <table id="myTable" class="table table-hover">
      <thead>
         <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($projets as $projet)
            <tr>
               <td>{{ $projet->nom }}</td>
               <td>{{ $projet->description }}</td>
               <td>{{ $projet->date_debut }}</td>
               <td>{{ $projet->date_fin }}</td>
               <td class="text-center"><a href="{{ route('projets.show', $projet->id ) }}"><i class="fa fa-search-plus"></i></a></td>
            </tr>
      @endforeach
      </tbody>
   </table>
   <div class="mt-3 d-flex justify-content-end">{{ $projets->links() }}</div>
@stop