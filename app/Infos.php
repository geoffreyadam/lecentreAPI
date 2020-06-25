<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infos extends Model
{
    protected $fillable = ["ouvert", "reouverture", "acces_tram", "acces_bus", "horaires_fermé", "horaires_ouvert", "horaires_plus"];
    //
}
