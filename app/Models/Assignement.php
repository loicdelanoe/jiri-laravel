<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignement extends Model
{
    use HasFactory;

    public function jiri(): BelongsTo
    {
        return $this->belongsTo(Jiri::class);
    }
}
