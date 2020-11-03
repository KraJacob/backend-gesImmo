<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Constat extends Model
{
    use HasFactory;

    public function appartement(): BelongsTo
    {
        return $this->belongsTo(Appartement::class);
    }

    public function huissier(): BelongsTo
    {
        return $this->belongsTo(Huissier::class);
    }
}
