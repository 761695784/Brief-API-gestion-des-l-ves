<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function matiere () {
        return $this->hasMany(Matiere::class);
    }
    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
}
