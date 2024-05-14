<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_SUPERADMIN = 'SUPER ADMIN';
    const ROLE_ADMIN = 'ADMIN';
    const ROLES = [
        self::ROLE_SUPERADMIN=> 'Super Admin',
        self::ROLE_ADMIN=> 'Admin',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->isSuperadmin() || $this->isAdmin();
    }

    public function isSuperadmin(){
        return $this->role === self::ROLE_SUPERADMIN;
    }

    public function isAdmin(){
        return $this->role === self::ROLE_ADMIN;
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
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
        'password' => 'hashed',
    ];
}
