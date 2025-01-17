<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function matiere(){
        return $this->belongsTo(Matiere::class);
    }
}
