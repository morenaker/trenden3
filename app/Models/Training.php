<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Training extends Authenticatable
{
    use HasFactory;

    public mixed $user_id;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'time',
        'date',
        'type',
        'user',
        'intens',
        'kcal',

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

    protected $table = 'training';


    public function user() {
        $this->belongsTo(User::class);
    }
}
