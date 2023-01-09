<?php

namespace App\Models;

use App\Models\Phase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_fin',
        'date_debut',
        'description',
    ];

    public function phases(){
        return $this->hasMany(Phase::class, 'projet_id');
    }
}
