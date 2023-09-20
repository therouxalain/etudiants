<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// modifier notre modèle pour afficher les champs remplissables
// afin de les protéger des entrées indésirables.

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'adresse',
        'telephone',
        'courriel',
        'naissance',
    ];
}
