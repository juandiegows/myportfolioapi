<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Education;
use App\Models\Profession;
use App\Models\ProfessionUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'professions'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_principal' => 'boolean',
        'active' => 'boolean',

    ];

    protected $appends = ['professions', 'social_medias'];

    public function getProfessionsAttribute()
    {
        return $this->professions()->get();
    }
    public function getSocialMediasAttribute()
    {
        return $this->social_medias()->get();
    }


    public function professions()
    {
        return $this->belongsToMany(Profession::class, ProfessionUser::class);
    }

    public function social_medias()
    {
        return $this->hasMany(SocialMediaUser::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

}