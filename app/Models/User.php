<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function marketingHolidays()
    {
        return $this->hasMany(Holidays::class, 'user_id');
    }

    // Holidays where the user is marked as 'manger_id'
    public function managedHolidays()
    {
        return $this->hasMany(Holidays::class, 'manger_id');
    }

    public function marketingOrders()
    {
        return $this->hasMany(Orders::class, 'user_id');
    }

    // Holidays where the user is marked as 'manger_id'
    public function purchasingHolidays()
    {
        return $this->hasMany(Orders::class, 'purchasing_user_id');
    }

    public function rolesWithUser(){
        return $this->hasMany(RolesWithUsers::class);
    }
    public function userDetails(){
        return $this->hasOne(UserDetails::class);
    }
}
