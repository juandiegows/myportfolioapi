<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function topics()
    {
        return $this->belongsToMany(Topic::class, PostTopic::class);
    }
}
