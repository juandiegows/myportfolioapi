<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = ["url"];
    protected $appends =  ["url"];
    public function getUrlAttribute(){
       return url($this->link_image);
    }
}
