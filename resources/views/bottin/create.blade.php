@extends('layouts.index')
@section('title', "Nouvel élève")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3">
                <form method="post">
                    @csrf
                    <div class="card-header">
                        <h3 class="fw-bold text-center">Nouvel élève</h3>
                    </div>
                    <div class="card-body">
                    <div class="form-group mb-3">
                            <input type="text" name="prenom" placeholder="Prénom" class="form-control" value="{{old('prenom')}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="nom" placeholder="Nom" class="form-control" value="{{old('nom')}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="adresse" placeholder="Adresse" class="form-control" value="{{old('adresse')}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="telephone" placeholder="Téléphone" class="form-control" value="{{old('telephone')}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="courriel" placeholder="Courriel" class="form-control" value="{{old('courriel')}}">
                        </div>
                        <div class="form-group mb-3">
                            <input type="date" name="naissance" placeholder="Date de naissance" class="form-control" value="{{old('naissance')}}">
                        </div>

                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" value="Enregistrer" class="btn btn-info">
                        <a href="{{ route('bottin.index')}}" class="btn btn-primary">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection