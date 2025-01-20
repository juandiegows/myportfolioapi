<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
/**
 * @OA\Schema(
 *     schema="User",
 *     title="User",
 *     description="User object",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         format="int64",
 *         description="User ID"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="User's name"
 *     ),
 *     @OA\Property(
 *         property="last_name",
 *         type="string",
 *         description="User's last name"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string",
 *         format="email",
 *         description="User's email"
 *     ),
 *     @OA\Property(
 *         property="user_name",
 *         type="string",
 *         nullable=true,
 *         description="User's username"
 *     ),
 *     @OA\Property(
 *         property="password",
 *         type="string",
 *         nullable=true,
 *         description="User's password"
 *     ),
 *     @OA\Property(
 *         property="remember_token",
 *         type="string",
 *         nullable=true,
 *         description="User's remember token"
 *     ),
 *     @OA\Property(
 *         property="created_at",
 *         type="string",
 *         format="date-time",
 *         description="Date and time when the user was created"
 *     ),
 *     @OA\Property(
 *         property="updated_at",
 *         type="string",
 *         format="date-time",
 *         description="Date and time when the user was last updated"
 *     ),
 *     @OA\Property(
 *         property="active",
 *         type="boolean",
 *         description="Whether the user is active or not"
 *     ),
 *     @OA\Property(
 *         property="is_principal",
 *         type="boolean",
 *         description="Whether the user is principal or not"
 *     ),
 * )
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

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

    public function outstandingAchievements(){
        return $this->hasMany(OutstandingAchievement::class);
    }

    public function professions()
    {
        return $this->belongsToMany(Profession::class, ProfessionUser::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Topic::class, Skill::class);
    }

    public function social_medias()
    {
        return $this->hasMany(SocialMediaUser::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function clients()
    {
        return $this->belongsToMany(Client::class, Participant::class);
    }

    public function works()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, ProjectUser::class);
    }

    public function socialMediaAccounts(){
        return $this->hasMany(SocialMediaUser::class);
    }
}
