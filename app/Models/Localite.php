<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Localite extends Model
{
    use HasFactory;

    public function proprietes(): HasMany
    {
        return $this->hasMany(Propriete::class);
    }
}
