<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $appends = ['topics'];   
    public function frontPage()
    {
        return $this->BelongsTo(Image::class);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class, TopicProject::class   );
    }   
}
