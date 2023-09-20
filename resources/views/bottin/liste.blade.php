@extends('layouts.index')
@section('title', "Liste d'étudiants")
@section('content')
<div class="container">
    <div class="col">
        <div class="d-flex justify-content-between pt-3">
            <h1 class="fw-bold">Bottin des élèves</h1>
            <a href="{{ route('bottin.create')}}" class="btn btn-primary d-flex align-items-center">Ajouter un élève</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-stripped">
            <thead class="table-dark text-center">
                <tr>
                    <th>Élève</th>
                    <th>Adresse</th>
                    <th>Courriel</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($liste as $etudiant)
                <tr>
                <td><a href="{{ route('bottin.show', $etudiant->id)}}" class="btn btn-light">{{$etudiant->prenom}} {{$etudiant->nom}}</a></td>
                    <td>{{$etudiant->adresse}}</td>
                    <td>{{$etudiant->courriel}}</td>
                    
                </tr>
                <!-- En cas de source vide -->
                @empty
                <tr>
                    <td>Aucun élève dans la base pour l'instant</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection