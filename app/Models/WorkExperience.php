<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkExperience extends Model
{
    use HasFactory;

    protected $appends = ['topics'];
 


    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
    public function topics()
    {
        return $this->belongsToMany(Topic::class, TopicWorkExperience::class);
    }
}
