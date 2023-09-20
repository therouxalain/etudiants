@extends('layouts.index')
@section('title', "Modifier")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3">
                <form method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h3 class="fw-bold text-center">Modifier</h3>
                    </div>
                    <div class="card-body">
                    <div class="form-group mb-3">
                            <input type="text" name="prenom" placeholder="prenom" class="form-control" value="{{$etudiant->prenom}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="nom" placeholder="Nom" class="form-control" value="{{$etudiant->nom}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="adresse" placeholder="Adresse" class="form-control" value="{{$etudiant->adresse}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="telephone" placeholder="Téléphone" class="form-control" value="{{$etudiant->telephone}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="courriel" placeholder="Courriel" class="form-control" value="{{$etudiant->courriel}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="date" name="naissance" placeholder="Date de naissance" class="form-control" value="{{$etudiant->naissance}}">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" value="Procéder à la modification" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection