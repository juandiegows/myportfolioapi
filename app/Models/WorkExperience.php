<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkExperience extends Model
{
    use HasFactory;

    protected $casts = ['with_certificate' => 'boolean'];
    protected $appends = ['professions'];
    public function getProfessionsAttribute()
    {
        return $this->professions()->get();
    }
    public function professions()
    {
        return $this->belongsToMany(Profession::class, WorkExperienceRole::class);
    }
}