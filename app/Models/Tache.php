<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $table="taches";
    protected $fillable =["nom","etat","user"];
    use HasFactory;
}
