<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = ["titre", "description", "type", "date", "heure", "lieu", "fini"];
}
