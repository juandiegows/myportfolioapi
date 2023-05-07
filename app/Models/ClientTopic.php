<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientTopic extends Model
{
    use HasFactory;

    protected $appends = ['topic'];

    public function getTopicAttribute()
    {
        return $this->topic()->get();
    }
    public function topic()
    {
        return $this->BelongsTo(Topic::class);
    }
}