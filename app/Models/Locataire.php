<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Locataire extends Model
{
    use HasFactory;

    public function typeLocataire(): BelongsTo
    {
        return $this->belongsTo(TypeLocataire::class);
    }
}
