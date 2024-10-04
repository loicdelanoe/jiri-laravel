<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Contact extends Model
{
    use HasFactory;
    use HasAttributes;

    protected $fillable = [
        "first_name", "last_name", "email"
    ];

    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => $attributes['first_name'] . ' ' . $attributes['last_name'],
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
