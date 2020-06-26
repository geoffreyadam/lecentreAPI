<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    protected $fillable = ["totalBillets", "totalPrice", "date", "prenom", "nom", "email", "adresse", "codePostal", "ville", "pays"];
    //
}
