<?php

namespace App\Models;

use App\Enums\ContactRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jiri extends Model
{
    use HasFactory;

    protected $casts = [
        'starting_at' => 'date:Y-m-d H:i',
    ];

    protected $fillable = [
        "name",
        "starting_at",
        "user_id"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, Assignement::class);
    }

    public function unsignedProjects(Jiri $jiri)
    {
        return $this->projects()
            ->whereNot('jiri_id', $jiri->id);
    }

    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class, Attendance::class)
            ->withPivot('id', 'role')
            ->withTimestamps();
    }

    public function students(): BelongsToMany
    {
        return $this
            ->contacts()
            ->withPivot('id')
            ->withPivotValue('role', ContactRole::Student->value);
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Contact::class, Attendance::class);
    }

    public function evaluators(): BelongsToMany
    {
        return $this
            ->contacts()
            ->withPivot('id')
            ->withPivotValue('role', ContactRole::Evaluator->value);
    }
}
