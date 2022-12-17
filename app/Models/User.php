<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    const MALE_GENDER = 1;
    const FEMALE_GENDER = 2;

    protected $guarded = false;
    protected $table = 'users';
    use HasApiTokens, HasFactory, Notifiable;

    static function getGenders()
    {
        return [
            self::MALE_GENDER => 'мужской',
            self::FEMALE_GENDER => 'женский',
        ];
    }
    public function getGenderTitleAttribute()
    {
        return self::getGenders()[$this->gender];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'patronymic',
        'age',
        'address',
        'gender',
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
    ];
}
