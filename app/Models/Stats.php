<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Stats extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'user_id',
        'born',
        'height',
        'weight',
        'bodyfat',
        'biceps_r',
        'biceps_l',
        'thigh_r',
        'thigh_l',
        'calf_r',
        'calf_l',
        'chest',
        'hip',
        'neck',
        'mesureDate'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'from' => 'datetime',
    ];

    public $timestamps = true;

    protected $table = 'stats';


    public function user() {
        $this->belongsTo(User::class);
    }
}
