<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jiri extends Model
{
    use HasFactory;
    use HasAttributes;

    protected $fillable = [
        "name",
        "starting_at"
    ];

    protected function casts(): array
    {
        return [
            'starting_at' => 'datetime:Y-m-d H:i',
        ];
    }
}
