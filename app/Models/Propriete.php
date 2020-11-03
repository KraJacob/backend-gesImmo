<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Propriete extends Model
{
    use HasFactory;

    public function typePropriete(): BelongsTo
    {
        return $this->belongsTo(TypePropriete::class);
    }

    public function localite(): BelongsTo
    {
        return $this->belongsTo(Localite::class);
    }

    public function proprietaires()
    {
        return $this->belongsToMany(Proprietaires::class);
    }
}
