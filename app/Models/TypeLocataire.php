<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeLocataire extends Model
{
    use HasFactory;

    public function locataires(): HasMany
    {
        return $this->hasMany(Locataire::class);
    }
}
