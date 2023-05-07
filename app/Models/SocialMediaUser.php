<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SocialMediaUser extends Model
{
    use HasFactory;

    public function social_media()
    {
        return $this->belongsTo(SocialMedia::class);
    }

    protected $appends = ['social_media'];
    public function getSocialMediaAttribute()
    {
        return $this->social_media()->get();
    }
    protected $casts = [
        "is_principal" => "boolean"
    ];
}