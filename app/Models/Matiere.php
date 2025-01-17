<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function etudiant(){
        return $this->hasMany(Etudiant::class);
    }
    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
    public function ue(){
        return $this->belongsTo(UE::class);
    }
}
