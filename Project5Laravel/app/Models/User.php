<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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

    public function excercise()
    {
        return $this->belongsTo(exercise::class);
    }
    public function roles()
    {
        return $this->belongsTo(roles::class);
    }
    public function hasRole(String $role)
    {
        if(auth()->user()){
            $userId = auth()->user()->id;
            $roleId = Roles::where('name', $role)->first()->id;
            $userRole = User::where('role_id', $roleId)
                ->where('id', $userId)
                ->get();
            return $userRole->count() > 0;
        }
    }
}
