<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paiement extends Model
{
    use HasFactory;

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function agence(): BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }
}
