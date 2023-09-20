@extends('layouts.index')
@section('title', "Détails")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Détails</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td><strong>Nom :</strong> {{$etudiant->prenom}} {{$etudiant->nom}}</td>
                        </tr>
                        <tr>
                            <td><strong>Adresse : </strong> {{$etudiant->adresse}}</td>
                        </tr>
                        <tr>
                            <td><strong>Téléphone : </strong> {{$etudiant->telephone}}</td>
                        </tr>
                        <tr>
                            <td><strong>Courriel : </strong> {{$etudiant->courriel}}</td>
                        </tr>
                        <tr>
                            <td><strong>Date de naissance : </strong> {{$etudiant->naissance}}</td>
                        </tr>

                    </table>
                </div>
                <!-- Simple jeu sur les couleurs de boutons -->
                <div class="card-footer text-center col">
                    <div class="mt-2">
                        <a href="{{ route('bottin.edit', $etudiant->id)}}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('bottin.index')}}" class="btn btn-secondary">Revenir à la une</a>
                    
                    <form method="post" class="text-center mt-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Supprimer de la base</button>
                    </form></div>
                </div>
            </div>
        </div>
    </div>
</div>