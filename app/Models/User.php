<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //one to many inverse
    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    //one to many Peminjaman user
    public function peminjamanuser(){
        return $this->hasMany(Peminjaman::class, 'id_user');
    }

    //one to many Peminjaman admin
    public function peminjamanadmin(){
        return $this->hasMany(Peminjaman::class, 'id_admin');
    }
}
