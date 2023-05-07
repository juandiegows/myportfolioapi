<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';
    use HasFactory;

    protected $casts = [
        'with_certificate' => "boolean"

    ];
}