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
        return $this->type_topic()->get();
    }
    public function type_topic()
    {
        return $this->BelongsTo(TypeTopic::class);
    }
}