<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agent extends Model
{
    use HasFactory;

    public function agence():BelongsTo
    {
        return $this->belongsTo(Agence::class);
    }
}
