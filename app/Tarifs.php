<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifs extends Model
{
    protected $fillable = ["nom", "info1", "info2", "info3", "info4", "info5", "prix"];
    //
}
