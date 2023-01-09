<?php

namespace App\Models;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phase extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'duree',
        'prorite',
    ];

    public function projet(){
        return $this->belongsTo(Projet::class);
    }
}
