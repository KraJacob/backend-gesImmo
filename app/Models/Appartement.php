<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appartement extends Model
{
    use HasFactory;

    public function typeAppartement(): BelongsTo
    {
        return $this->belongsTo(Appartement::class);
    }

    public function constats(): HasMany
    {
        return $this->hasMany(Constat::class);
    }
}
