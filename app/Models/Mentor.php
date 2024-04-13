<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mentor extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "mentor";
    protected $table = 'mentors';

    // Mentor.php (Model)
    public static function search($search)
    {
        return self::where('first_name', 'like', '%' . $search . '%')
            ->orWhere('last_name', 'like', '%' . $search . '%')
            ->get();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'email_verified_at'
    ];

    /**
     * Get all of the mentorReview for the Mentor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function social_handle(): HasOne
    {
        return $this->hasOne(SocialHandle::class);
    }

    public function misc_info(): HasOne
    {
        return $this->hasOne(MiscInfo::class);
    }

    /**
     * Get all of the mentorReview for the Mentor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function session(): HasMany
    {
        return $this->hasMany(Session::class);
    }

    /**
     * Get all of the mentorReview for the Mentor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mentor_review(): HasMany
    {
        return $this->hasMany(MentorReview::class);
    }

    /**
     * Get all of the notification for the Mentor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notification(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

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
        'password' => 'hashed',
    ];
}
