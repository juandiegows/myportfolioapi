<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;


    protected $appends = ['topics'];

    public function getTopicsAttribute()
    {
        return $this->topics()->get();
    }
    public function topics()
    {
        return $this->hasMany(ClientTopic::class);
    }
}