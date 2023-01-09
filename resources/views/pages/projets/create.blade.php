@extends('layouts.app')
@section('content')
    <div class="container mt-5 d-flex flex-column align-items-center">
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <h3>Ajout d'un nouveau projet <a href="{{ route('projets.index') }}"><i class="fa fa-list"></i></a></h3>
        <form action="{{ route('projets.store') }}" method="post" class="w-50">
            @csrf
            @method("post")
            <div class="form-group mb-5">
                <label>{{ __('Libellé') }}:</label>
                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}">
                @error('nom')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group mb-5">
                <label>{{ __('Description') }}:</label>
                <textarea  name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" ></textarea>
                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group mb-5">
                <label>{{ __('Date de début') }}:</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control @error('date_debut') is-invalid @enderror" value="{{ old('date_debut') }}">
                @error('date_debut')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group mb-5">
                <label>{{ __('Date de fin') }}:</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control @error('date_fin') is-invalid @enderror" value="{{ old('date_fin') }}" >
                @error('date_fin')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-success">Créer</button>                               
            </div>     
        </form>
    </div>
@stop
