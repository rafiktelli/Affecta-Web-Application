<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;
    protected $table="utilisateur";
    protected $primaryKey = 'id_utilisateur';
    protected $fillable=["id_utilisateur","username","password"];
    public $timestamps = false;
}
