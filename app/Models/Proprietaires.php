<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaires extends Model
{
    use HasFactory;

    public function proprietes()
    {
        return $this->belongsToMany(Propriete::class);
    }
}
