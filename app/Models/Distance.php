<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    protected $table="log";
    protected $fillable = ['Latitude0','Longtide0','Latitude1','Longtide1','Jarak'];
}
