<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topic extends Model
{
    use HasFactory;


    protected $appends = ['type_topic'];

    public function getTypeTopicAttribute()
    {
        return $this->typeTopic()->get();
    }
    public function typeTopic()
    {
        return $this->BelongsTo(TypeTopic::class);
    }

    public function topic()
    {
        return $this->BelongsTo(Topic::class);
    }
}
