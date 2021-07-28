<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class optiondep extends Model
{
    use HasFactory;
    protected $table= "optiondep";
    protected $primaryKey ="idOption";
    protected $fillable=["idOption","desOption","idDep","DesDep","nbPlaceOption"];
    public $timestamps = false;

}
